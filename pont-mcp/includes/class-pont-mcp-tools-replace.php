<?php
/**
 * Rechercher / remplacer du texte (typiquement des adresses) dans le contenu de nombreux
 * articles et pages, directement sur le serveur, sans renvoyer chaque contenu complet.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tools_Replace {

	const MAX_PAIRS = 300;
	const MAX_LIMIT = 200;

	public static function definitions() {
		return array(
			'replace_in_content' => array(
				'title'       => 'Rechercher / remplacer dans les contenus',
				'description' => 'Remplace des chaînes (ex. anciennes adresses après un déplacement de pages) dans le contenu HTML de nombreux articles et pages. Chaque paire { from, to } est une chaîne exacte ; quand plusieurs correspondent au même endroit, la plus longue l’emporte. Par défaut en simulation (dry_run) : liste les contenus touchés et le nombre de remplacements, sans rien modifier. Les modifications passent par WordPress (révisions conservées). Traiter par lots avec limit, et relancer jusqu’à ce que remaining soit 0.',
				'level'       => Pont_MCP_Settings::LEVEL_FULL,
				'handler'     => array( __CLASS__, 'replace_in_content' ),
				'properties'  => array(
					'replacements' => array(
						'type'        => 'array',
						'description' => 'Paires à remplacer (max ' . self::MAX_PAIRS . '), chaînes exactes d’au moins 5 caractères.',
						'items'       => array(
							'type'       => 'object',
							'properties' => array(
								'from' => array( 'type' => 'string' ),
								'to'   => array( 'type' => 'string' ),
							),
							'required'   => array( 'from', 'to' ),
						),
					),
					'post_types'   => array(
						'type'        => 'array',
						'items'       => array( 'type' => 'string' ),
						'description' => 'Types de contenu (défaut : page et post).',
					),
					'dry_run'      => array( 'type' => 'boolean', 'description' => 'true (défaut) : simulation sans modification ; false : applique les remplacements.' ),
					'ids'          => array(
						'type'        => 'array',
						'items'       => array( 'type' => 'integer' ),
						'description' => 'Optionnel : limiter aux contenus de ces ID (max 200), pour une correction ciblée page par page.',
					),
					'contains'     => array( 'type' => 'string', 'description' => 'Optionnel mais conseillé avec beaucoup de paires : chaîne présente dans toutes les chaînes from (ex. « /especes-plantes-grasses/ »). La base est alors parcourue une seule fois au lieu d’une fois par paire (beaucoup plus rapide).' ),
					'limit'        => array( 'type' => 'integer', 'description' => 'Nombre maximal de contenus traités par appel (défaut 50, max ' . self::MAX_LIMIT . ').' ),
				),
				'required'    => array( 'replacements' ),
			),
		);
	}

	public static function replace_in_content( array $args ) {
		global $wpdb;

		$map = array();
		foreach ( (array) $args['replacements'] as $pair ) {
			$from = isset( $pair['from'] ) ? (string) $pair['from'] : '';
			$to   = isset( $pair['to'] ) ? (string) $pair['to'] : '';
			if ( strlen( $from ) < 5 ) {
				throw new Pont_MCP_Tool_Error( 'Chaîne à remplacer trop courte (5 caractères minimum) : « ' . $from . ' ».' );
			}
			if ( $from !== $to ) {
				$map[ $from ] = $to;
			}
		}
		if ( ! $map ) {
			throw new Pont_MCP_Tool_Error( 'Aucune paire de remplacement valide.' );
		}
		if ( count( $map ) > self::MAX_PAIRS ) {
			throw new Pont_MCP_Tool_Error( 'Trop de paires (maximum ' . self::MAX_PAIRS . ').' );
		}

		$types   = ! empty( $args['post_types'] ) ? array_map( 'sanitize_key', (array) $args['post_types'] ) : array( 'page', 'post' );
		$dry_run = ! isset( $args['dry_run'] ) || false !== $args['dry_run'];
		$limit   = isset( $args['limit'] ) ? max( 1, min( self::MAX_LIMIT, (int) $args['limit'] ) ) : 50;

		$likes    = array();
		$vals     = array();
		$contains = isset( $args['contains'] ) ? (string) $args['contains'] : '';
		if ( '' !== $contains ) {
			foreach ( array_keys( $map ) as $from ) {
				if ( false === strpos( $from, $contains ) ) {
					throw new Pont_MCP_Tool_Error( '« contains » doit figurer dans chaque chaîne from ; absent de « ' . $from . ' ».' );
				}
			}
			$likes[] = 'post_content LIKE %s';
			$vals[]  = '%' . $wpdb->esc_like( $contains ) . '%';
		} else {
			foreach ( array_keys( $map ) as $from ) {
				$likes[] = 'post_content LIKE %s';
				$vals[]  = '%' . $wpdb->esc_like( $from ) . '%';
			}
		}
		$ids_filter = '';
		if ( ! empty( $args['ids'] ) ) {
			$only = array_slice( array_filter( array_map( 'absint', (array) $args['ids'] ) ), 0, 200 );
			if ( $only ) {
				$ids_filter = ' AND ID IN (' . implode( ',', $only ) . ')';
			}
		}
		$type_ph = implode( ',', array_fill( 0, count( $types ), '%s' ) );
		$sql     = "SELECT ID FROM {$wpdb->posts} WHERE post_type IN ($type_ph)"
			. " AND post_status IN ('publish','future','private','draft','pending')" . $ids_filter
			. ' AND (' . implode( ' OR ', $likes ) . ') ORDER BY ID';
		$ids     = $wpdb->get_col( $wpdb->prepare( $sql, array_merge( $types, $vals ) ) ); // phpcs:ignore WordPress.DB.PreparedSQL.NotPrepared

		// Plus longues d'abord, pour compter chaque remplacement une seule fois.
		$keys = array_keys( $map );
		usort(
			$keys,
			static function ( $a, $b ) {
				return strlen( $b ) - strlen( $a );
			}
		);

		$changed = array();
		$skipped = array();
		$count   = 0;
		$exact   = 0;

		foreach ( $ids as $id ) {
			$post = get_post( $id );
			if ( ! $post ) {
				continue;
			}

			// LIKE ignore la casse : on ne garde que les correspondances exactes.
			$n   = 0;
			$tmp = $post->post_content;
			foreach ( $keys as $from ) {
				$n  += substr_count( $tmp, $from );
				$tmp = str_replace( $from, "\0", $tmp );
			}
			if ( ! $n ) {
				continue;
			}
			++$exact;
			if ( count( $changed ) + count( $skipped ) >= $limit ) {
				continue;
			}

			if ( ! current_user_can( 'edit_post', $post->ID ) ) {
				$skipped[] = array( 'id' => $post->ID, 'reason' => 'droits insuffisants' );
				continue;
			}

			// strtr : à position égale, la chaîne la plus longue l'emporte ; pas de remplacement en cascade.
			$new = strtr( $post->post_content, $map );

			if ( ! $dry_run ) {
				$result = wp_update_post(
					wp_slash(
						array(
							'ID'           => $post->ID,
							'post_content' => $new,
						)
					),
					true
				);
				if ( is_wp_error( $result ) ) {
					$skipped[] = array( 'id' => $post->ID, 'reason' => $result->get_error_message() );
					continue;
				}
			}

			$count    += $n;
			$changed[] = array(
				'id'           => $post->ID,
				'title'        => get_the_title( $post ),
				'replacements' => $n,
			);
		}

		return array(
			'dry_run'      => $dry_run,
			'matching'     => $exact,
			'changed'      => $changed,
			'replacements' => $count,
			'skipped'      => $skipped,
			'remaining'    => $dry_run ? $exact : $exact - count( $changed ),
		);
	}
}
