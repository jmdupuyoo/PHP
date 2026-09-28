<?php
/**
 * Outils SEO et métadonnées.
 *
 * Les champs SEO sont écrits là où l'extension SEO du site les lit (Yoast, Rank Math, SEOPress).
 * Sans extension SEO, Pont MCP les stocke lui-même et les affiche dans le <head> des pages.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Tools_SEO {

	/** Correspondance champ Pont MCP => clé de métadonnée, par extension. */
	const FIELDS = array(
		'yoast'    => array(
			'title'          => '_yoast_wpseo_title',
			'description'    => '_yoast_wpseo_metadesc',
			'focus_keyword'  => '_yoast_wpseo_focuskw',
			'canonical'      => '_yoast_wpseo_canonical',
			'noindex'        => '_yoast_wpseo_meta-robots-noindex',
			'og_title'       => '_yoast_wpseo_opengraph-title',
			'og_description' => '_yoast_wpseo_opengraph-description',
		),
		'rankmath' => array(
			'title'          => 'rank_math_title',
			'description'    => 'rank_math_description',
			'focus_keyword'  => 'rank_math_focus_keyword',
			'canonical'      => 'rank_math_canonical_url',
			'noindex'        => 'rank_math_robots',
			'og_title'       => 'rank_math_facebook_title',
			'og_description' => 'rank_math_facebook_description',
		),
		'seopress' => array(
			'title'          => '_seopress_titles_title',
			'description'    => '_seopress_titles_desc',
			'focus_keyword'  => '_seopress_analysis_target_kw',
			'canonical'      => '_seopress_robots_canonical',
			'noindex'        => '_seopress_robots_index',
			'og_title'       => '_seopress_social_fb_title',
			'og_description' => '_seopress_social_fb_desc',
		),
		'pont'     => array(
			'title'          => '_pont_mcp_seo_title',
			'description'    => '_pont_mcp_seo_description',
			'focus_keyword'  => '_pont_mcp_seo_focus_keyword',
			'canonical'      => '_pont_mcp_seo_canonical',
			'noindex'        => '_pont_mcp_seo_noindex',
			'og_title'       => '_pont_mcp_seo_og_title',
			'og_description' => '_pont_mcp_seo_og_description',
		),
	);

	const PLUGIN_NAMES = array(
		'yoast'    => 'Yoast SEO',
		'rankmath' => 'Rank Math',
		'seopress' => 'SEOPress',
		'aioseo'   => 'All in One SEO',
		'pont'     => 'aucune extension SEO : Pont MCP affiche lui-même les balises',
	);

	public static function init() {
		// Balises SEO de secours, uniquement si aucune extension SEO n'est active.
		add_action( 'wp', array( __CLASS__, 'maybe_output_fallback' ) );
	}

	public static function definitions() {
		$read   = Pont_MCP_Settings::LEVEL_READ;
		$drafts = Pont_MCP_Settings::LEVEL_DRAFTS;
		$fields = array(
			'title'          => array( 'type' => 'string', 'description' => 'Titre SEO (balise <title>, idéalement 50 à 60 caractères). Chaîne vide : retour au titre par défaut.' ),
			'description'    => array( 'type' => 'string', 'description' => 'Meta description (idéalement 120 à 155 caractères).' ),
			'focus_keyword'  => array( 'type' => 'string', 'description' => 'Mot-clé principal visé.' ),
			'canonical'      => array( 'type' => 'string', 'description' => 'URL canonique (rarement utile ; vide pour la valeur par défaut).' ),
			'noindex'        => array( 'type' => 'boolean', 'description' => 'true : demander aux moteurs de ne pas indexer ce contenu.' ),
			'og_title'       => array( 'type' => 'string', 'description' => 'Titre pour les partages sur les réseaux sociaux.' ),
			'og_description' => array( 'type' => 'string', 'description' => 'Description pour les partages sur les réseaux sociaux.' ),
		);

		return array(
			'get_seo'      => array(
				'title'       => 'Lire le SEO d’un contenu',
				'description' => 'Titre SEO, meta description, mot-clé, canonique, indexation, réseaux sociaux, et diagnostic (longueurs, intertitres, images sans texte alternatif, liens internes, nombre de mots).',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'get_seo' ),
				'properties'  => array( 'id' => array( 'type' => 'integer', 'description' => 'ID du contenu.' ) ),
				'required'    => array( 'id' ),
			),
			'update_seo'   => array(
				'title'       => 'Modifier le SEO d’un contenu',
				'description' => 'Écrit les champs fournis dans l’extension SEO du site (Yoast, Rank Math, SEOPress) ou, à défaut, dans Pont MCP. Un contenu en ligne exige le niveau Complet.',
				'level'       => $drafts,
				'handler'     => array( __CLASS__, 'update_seo' ),
				'properties'  => array( 'id' => array( 'type' => 'integer', 'description' => 'ID du contenu.' ) ) + $fields,
				'required'    => array( 'id' ),
			),
			'seo_audit'    => array(
				'title'       => 'Audit SEO du site',
				'description' => 'Passe en revue les contenus publiés et liste les problèmes : meta description absente ou mal calibrée, titre trop long, pas d’image mise en avant, images sans texte alternatif, contenu court, pas d’intertitres, pas de lien interne.',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'seo_audit' ),
				'properties'  => array(
					'type'  => array( 'type' => 'string', 'description' => 'Type de contenu : post (défaut), page, ou any.' ),
					'limit' => array( 'type' => 'integer', 'description' => 'Nombre maximal de contenus analysés (défaut 100, max 300).' ),
				),
			),
			'update_media' => array(
				'title'       => 'Modifier un média',
				'description' => 'Modifie le titre, le texte alternatif, la légende ou la description d’un média de la médiathèque.',
				'level'       => $drafts,
				'handler'     => array( __CLASS__, 'update_media' ),
				'properties'  => array(
					'id'          => array( 'type' => 'integer', 'description' => 'ID du média.' ),
					'title'       => array( 'type' => 'string', 'description' => 'Titre.' ),
					'alt'         => array( 'type' => 'string', 'description' => 'Texte alternatif.' ),
					'caption'     => array( 'type' => 'string', 'description' => 'Légende.' ),
					'description' => array( 'type' => 'string', 'description' => 'Description.' ),
				),
				'required'    => array( 'id' ),
			),
			'get_meta'     => array(
				'title'       => 'Lire les champs personnalisés',
				'description' => 'Champs personnalisés (métadonnées publiques) d’un contenu. Les métadonnées internes (commençant par _) ne sont pas listées ; le SEO passe par get_seo.',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'get_meta' ),
				'properties'  => array( 'id' => array( 'type' => 'integer', 'description' => 'ID du contenu.' ) ),
				'required'    => array( 'id' ),
			),
			'update_meta'  => array(
				'title'       => 'Modifier des champs personnalisés',
				'description' => 'Crée, modifie ou supprime (valeur null) des champs personnalisés publics d’un contenu. Un contenu en ligne exige le niveau Complet.',
				'level'       => $drafts,
				'handler'     => array( __CLASS__, 'update_meta' ),
				'properties'  => array(
					'id'     => array( 'type' => 'integer', 'description' => 'ID du contenu.' ),
					'values' => array( 'type' => 'object', 'description' => 'Objet { nom_du_champ: valeur } ; null supprime le champ.' ),
				),
				'required'    => array( 'id', 'values' ),
			),
		);
	}

	public static function plugin() {
		if ( defined( 'WPSEO_VERSION' ) ) {
			return 'yoast';
		}
		if ( class_exists( 'RankMath' ) || defined( 'RANK_MATH_VERSION' ) ) {
			return 'rankmath';
		}
		if ( defined( 'SEOPRESS_VERSION' ) ) {
			return 'seopress';
		}
		if ( defined( 'AIOSEO_VERSION' ) ) {
			return 'aioseo';
		}
		return 'pont';
	}

	/* ------------------------------------------------------------------ */

	public static function get_seo( array $args ) {
		$post   = self::post( $args['id'] );
		$plugin = self::plugin();
		$seo    = 'aioseo' === $plugin ? null : self::read_fields( $post->ID, $plugin );

		$analysis = self::analyze( $post, $seo );

		return array(
			'id'          => $post->ID,
			'url'         => get_permalink( $post ),
			'slug'        => $post->post_name,
			'seo_plugin'  => self::PLUGIN_NAMES[ $plugin ],
			'seo'         => $seo,
			'analysis'    => $analysis,
			'note'        => 'aioseo' === $plugin ? 'All in One SEO stocke ses données dans ses propres tables : lecture et écriture non prises en charge.' : null,
		);
	}

	public static function update_seo( array $args ) {
		$post = self::post( $args['id'] );
		if ( ! current_user_can( 'edit_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour modifier ce contenu.' );
		}
		Pont_MCP_Tools::require_live_access_for_post( $post );

		$plugin = self::plugin();
		if ( 'aioseo' === $plugin ) {
			throw new Pont_MCP_Tool_Error( 'All in One SEO n’est pas pris en charge (données stockées dans ses propres tables). Modifiez le SEO depuis l’éditeur.' );
		}

		$map     = self::FIELDS[ $plugin ];
		$changed = array();
		foreach ( $map as $field => $meta_key ) {
			if ( ! array_key_exists( $field, $args ) ) {
				continue;
			}
			$value = $args[ $field ];
			if ( 'noindex' === $field ) {
				self::write_noindex( $post->ID, $plugin, (bool) $value );
			} else {
				$value = 'canonical' === $field ? esc_url_raw( $value ) : sanitize_text_field( $value );
				if ( '' === $value ) {
					delete_post_meta( $post->ID, $meta_key );
				} else {
					update_post_meta( $post->ID, $meta_key, wp_slash( $value ) );
				}
			}
			$changed[] = $field;
		}
		if ( ! $changed ) {
			throw new Pont_MCP_Tool_Error( 'Aucun champ SEO fourni.' );
		}

		// Laisse l'extension SEO recalculer ses données (ex. index Yoast).
		wp_update_post( array( 'ID' => $post->ID ) );
		clean_post_cache( $post->ID );

		return array(
			'message'    => 'SEO mis à jour (' . implode( ', ', $changed ) . ').',
			'seo_plugin' => self::PLUGIN_NAMES[ $plugin ],
			'seo'        => self::read_fields( $post->ID, $plugin ),
			'analysis'   => self::analyze( get_post( $post->ID ), self::read_fields( $post->ID, $plugin ) ),
		);
	}

	public static function seo_audit( array $args ) {
		$type  = $args['type'] ?? 'post';
		$limit = min( 300, max( 1, (int) ( $args['limit'] ?? 100 ) ) );
		$query = new WP_Query(
			array(
				'post_type'      => 'any' === $type ? array_diff( get_post_types( array( 'public' => true ) ), array( 'attachment' ) ) : $type,
				'post_status'    => 'publish',
				'posts_per_page' => $limit,
				'no_found_rows'  => true,
			) + Pont_MCP_Polylang::query_args( '' )
		);

		$plugin  = self::plugin();
		$report  = array();
		$summary = array();
		foreach ( $query->posts as $post ) {
			$seo      = 'aioseo' === $plugin ? null : self::read_fields( $post->ID, $plugin );
			$analysis = self::analyze( $post, $seo );
			if ( ! $analysis['issues'] ) {
				continue;
			}
			foreach ( $analysis['issues'] as $issue ) {
				$summary[ $issue ] = ( $summary[ $issue ] ?? 0 ) + 1;
			}
			$report[] = array(
				'id'     => $post->ID,
				'title'  => get_the_title( $post ),
				'url'    => get_permalink( $post ),
				'issues' => $analysis['issues'],
			);
		}
		arsort( $summary );

		return array(
			'seo_plugin'      => self::PLUGIN_NAMES[ $plugin ],
			'analysed'        => count( $query->posts ),
			'with_issues'     => count( $report ),
			'issues_summary'  => $summary,
			'contents'        => $report,
		);
	}

	public static function update_media( array $args ) {
		$post = get_post( $args['id'] );
		if ( ! $post || 'attachment' !== $post->post_type || ! current_user_can( 'edit_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Média ' . $args['id'] . ' introuvable ou non modifiable.' );
		}
		$data = array( 'ID' => $post->ID );
		if ( isset( $args['title'] ) ) {
			$data['post_title'] = $args['title'];
		}
		if ( isset( $args['caption'] ) ) {
			$data['post_excerpt'] = $args['caption'];
		}
		if ( isset( $args['description'] ) ) {
			$data['post_content'] = $args['description'];
		}
		if ( count( $data ) > 1 ) {
			$result = wp_update_post( wp_slash( $data ), true );
			if ( is_wp_error( $result ) ) {
				throw new Pont_MCP_Tool_Error( $result->get_error_message() );
			}
		}
		if ( isset( $args['alt'] ) ) {
			update_post_meta( $post->ID, '_wp_attachment_image_alt', wp_slash( sanitize_text_field( $args['alt'] ) ) );
		}
		return array(
			'message' => 'Média modifié.',
			'id'      => $post->ID,
			'title'   => get_the_title( $post->ID ),
			'alt'     => get_post_meta( $post->ID, '_wp_attachment_image_alt', true ),
			'note'    => 'Le texte alternatif déjà inséré dans les contenus n’est pas modifié : seules les nouvelles insertions l’utiliseront.',
		);
	}

	public static function get_meta( array $args ) {
		$post = self::post( $args['id'] );
		$meta = array();
		foreach ( get_post_meta( $post->ID ) as $key => $values ) {
			if ( is_protected_meta( $key, 'post' ) ) {
				continue;
			}
			$values       = array_map( 'maybe_unserialize', $values );
			$meta[ $key ] = 1 === count( $values ) ? $values[0] : $values;
		}
		return array( 'id' => $post->ID, 'meta' => $meta ? $meta : new stdClass() );
	}

	public static function update_meta( array $args ) {
		$post = self::post( $args['id'] );
		if ( ! current_user_can( 'edit_post', $post->ID ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour modifier ce contenu.' );
		}
		Pont_MCP_Tools::require_live_access_for_post( $post );

		$done = array();
		foreach ( (array) $args['values'] as $key => $value ) {
			$key = (string) $key;
			if ( '' === $key || is_protected_meta( $key, 'post' ) ) {
				throw new Pont_MCP_Tool_Error( 'Champ protégé ou invalide : « ' . $key . ' » (les métadonnées internes commençant par _ ne sont pas modifiables ; pour le SEO, utilisez update_seo).' );
			}
			if ( ! current_user_can( 'edit_post_meta', $post->ID, $key ) ) {
				throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour le champ « ' . $key . ' ».' );
			}
			if ( null === $value ) {
				delete_post_meta( $post->ID, $key );
			} else {
				update_post_meta( $post->ID, $key, wp_slash( $value ) );
			}
			$done[] = $key;
		}
		return array( 'message' => 'Champs mis à jour : ' . implode( ', ', $done ) . '.' );
	}

	/* ------------------------------------------------------------------ */
	/* Balises de secours (sans extension SEO)                             */
	/* ------------------------------------------------------------------ */

	public static function maybe_output_fallback() {
		if ( 'pont' !== self::plugin() || ! is_singular() ) {
			return;
		}
		$id     = get_queried_object_id();
		$fields = self::read_fields( $id, 'pont' );

		if ( $fields['title'] ) {
			add_filter(
				'pre_get_document_title',
				static function () use ( $fields ) {
					return $fields['title'];
				},
				20
			);
		}
		if ( $fields['noindex'] ) {
			add_filter( 'wp_robots', 'wp_robots_no_robots' );
		}
		add_action(
			'wp_head',
			static function () use ( $fields ) {
				if ( $fields['description'] ) {
					echo '<meta name="description" content="' . esc_attr( $fields['description'] ) . '">' . "\n";
				}
				if ( $fields['canonical'] ) {
					remove_action( 'wp_head', 'rel_canonical' );
					echo '<link rel="canonical" href="' . esc_url( $fields['canonical'] ) . '">' . "\n";
				}
				$og_title = $fields['og_title'] ? $fields['og_title'] : ( $fields['title'] ? $fields['title'] : '' );
				$og_desc  = $fields['og_description'] ? $fields['og_description'] : $fields['description'];
				if ( $og_title ) {
					echo '<meta property="og:title" content="' . esc_attr( $og_title ) . '">' . "\n";
				}
				if ( $og_desc ) {
					echo '<meta property="og:description" content="' . esc_attr( $og_desc ) . '">' . "\n";
				}
			},
			1
		);
	}

	/* ------------------------------------------------------------------ */

	private static function read_fields( $post_id, $plugin ) {
		$out = array();
		foreach ( self::FIELDS[ $plugin ] as $field => $meta_key ) {
			if ( 'noindex' === $field ) {
				$out['noindex'] = self::read_noindex( $post_id, $plugin );
				continue;
			}
			$out[ $field ] = (string) get_post_meta( $post_id, $meta_key, true );
		}
		return $out;
	}

	private static function read_noindex( $post_id, $plugin ) {
		$key   = self::FIELDS[ $plugin ]['noindex'];
		$value = get_post_meta( $post_id, $key, true );
		switch ( $plugin ) {
			case 'yoast':
				return '1' === (string) $value;
			case 'rankmath':
				return is_array( $value ) && in_array( 'noindex', $value, true );
			case 'seopress':
				return 'yes' === $value;
			default:
				return (bool) $value;
		}
	}

	private static function write_noindex( $post_id, $plugin, $noindex ) {
		$key = self::FIELDS[ $plugin ]['noindex'];
		switch ( $plugin ) {
			case 'yoast':
				$noindex ? update_post_meta( $post_id, $key, '1' ) : delete_post_meta( $post_id, $key );
				break;
			case 'rankmath':
				$robots = get_post_meta( $post_id, $key, true );
				$robots = array_values( array_diff( is_array( $robots ) ? $robots : array(), array( 'index', 'noindex' ) ) );
				$robots[] = $noindex ? 'noindex' : 'index';
				update_post_meta( $post_id, $key, $robots );
				break;
			case 'seopress':
				$noindex ? update_post_meta( $post_id, $key, 'yes' ) : delete_post_meta( $post_id, $key );
				break;
			default:
				$noindex ? update_post_meta( $post_id, $key, '1' ) : delete_post_meta( $post_id, $key );
		}
	}

	/**
	 * Diagnostic simple, indépendant de l'extension SEO.
	 */
	private static function analyze( WP_Post $post, $seo ) {
		$content    = (string) $post->post_content;
		$text       = trim( preg_replace( '/\s+/u', ' ', wp_strip_all_tags( strip_shortcodes( $content ) ) ) );
		$words      = $text ? count( preg_split( '/\s+/u', $text ) ) : 0;
		$h2         = preg_match_all( '#<h2\b#i', $content );
		$images     = preg_match_all( '#<img\b[^>]*>#i', $content, $imgs );
		$no_alt     = 0;
		foreach ( $imgs[0] as $img ) {
			if ( ! preg_match( '#\balt="[^"]+"#i', $img ) ) {
				++$no_alt;
			}
		}
		$host     = preg_quote( (string) wp_parse_url( home_url(), PHP_URL_HOST ), '#' );
		$internal = preg_match_all( '#<a\b[^>]*href="(https?://' . $host . '|/)[^"]*"#i', $content );

		$title_seo = $seo && $seo['title'] ? $seo['title'] : get_the_title( $post );
		$desc      = $seo ? $seo['description'] : '';
		$issues    = array();

		if ( ! $seo || '' === $desc ) {
			$issues[] = 'meta description absente';
		} elseif ( mb_strlen( $desc ) < 70 ) {
			$issues[] = 'meta description trop courte';
		} elseif ( mb_strlen( $desc ) > 160 ) {
			$issues[] = 'meta description trop longue';
		}
		if ( mb_strlen( wp_strip_all_tags( $title_seo ) ) > 65 ) {
			$issues[] = 'titre SEO trop long';
		}
		if ( ! has_post_thumbnail( $post ) && 'page' !== $post->post_type ) {
			$issues[] = 'pas d’image mise en avant';
		}
		if ( $no_alt ) {
			$issues[] = 'images sans texte alternatif';
		}
		if ( $words < 300 && get_option( 'page_on_front' ) != $post->ID ) { // phpcs:ignore Universal.Operators.StrictComparisons
			$issues[] = 'contenu court (moins de 300 mots)';
		}
		if ( $words >= 300 && ! $h2 ) {
			$issues[] = 'aucun intertitre H2';
		}
		if ( ! $internal ) {
			$issues[] = 'aucun lien interne';
		}

		return array(
			'words'                  => $words,
			'seo_title_length'       => mb_strlen( wp_strip_all_tags( $title_seo ) ),
			'description_length'     => mb_strlen( (string) $desc ),
			'h2_count'               => (int) $h2,
			'images'                 => (int) $images,
			'images_without_alt'     => $no_alt,
			'internal_links'         => (int) $internal,
			'has_featured_image'     => has_post_thumbnail( $post ),
			'issues'                 => $issues,
		);
	}

	private static function post( $id ) {
		$post = get_post( (int) $id );
		if ( ! $post || ! current_user_can( 'read_post', $post->ID ) || in_array( $post->post_type, array( 'revision', 'nav_menu_item', 'attachment' ), true ) ) {
			throw new Pont_MCP_Tool_Error( 'Contenu ' . $id . ' introuvable.' );
		}
		return $post;
	}
}
