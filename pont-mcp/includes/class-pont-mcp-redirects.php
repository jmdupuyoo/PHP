<?php
/**
 * Redirections 301 simples (ancienne adresse du site => nouvelle adresse).
 *
 * Les redirections sont stockées dans l'option pont_mcp_redirects et appliquées avant
 * l'affichage de la page, même si l'ancienne page existe encore.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Redirects {

	const OPTION = 'pont_mcp_redirects';
	const MAX    = 500;

	public static function init() {
		// Priorité 1 : avant les redirections canoniques de WordPress et des extensions SEO.
		add_action( 'template_redirect', array( __CLASS__, 'maybe_redirect' ), 1 );
	}

	public static function definitions() {
		$read = Pont_MCP_Settings::LEVEL_READ;
		$full = Pont_MCP_Settings::LEVEL_FULL;

		return array(
			'list_redirects'  => array(
				'title'       => 'Lister les redirections 301',
				'description' => 'Redirections 301 gérées par Pont MCP (ancienne adresse => nouvelle adresse).',
				'level'       => $read,
				'handler'     => array( __CLASS__, 'list_redirects' ),
				'properties'  => array(),
			),
			'create_redirect' => array(
				'title'       => 'Créer une redirection 301',
				'description' => 'Redirige définitivement (301) une ancienne adresse du site vers une nouvelle. L’ancienne adresse est un chemin du site (ex. /ancienne-page/) ; la nouvelle est un chemin ou une URL du même site. Remplace une redirection existante pour la même adresse. La redirection s’applique même si l’ancienne page existe encore.',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'create_redirect' ),
				'properties'  => array(
					'from' => array( 'type' => 'string', 'description' => 'Ancienne adresse : chemin (/ancienne-page/) ou URL complète du site.' ),
					'to'   => array( 'type' => 'string', 'description' => 'Nouvelle adresse : chemin ou URL complète du même site.' ),
				),
				'required'    => array( 'from', 'to' ),
			),
			'delete_redirect' => array(
				'title'       => 'Supprimer une redirection 301',
				'description' => 'Supprime la redirection d’une ancienne adresse.',
				'level'       => $full,
				'handler'     => array( __CLASS__, 'delete_redirect' ),
				'properties'  => array(
					'from' => array( 'type' => 'string', 'description' => 'Ancienne adresse de la redirection à supprimer.' ),
				),
				'required'    => array( 'from' ),
			),
		);
	}

	public static function list_redirects( array $args ) {
		$items = array();
		foreach ( self::all() as $from => $redirect ) {
			$items[] = array(
				'from'    => $from,
				'to'      => $redirect['to'],
				'created' => $redirect['created'],
			);
		}

		return array(
			'count'     => count( $items ),
			'redirects' => $items,
		);
	}

	public static function create_redirect( array $args ) {
		if ( ! current_user_can( 'manage_options' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour gérer les redirections.' );
		}

		$from = self::local_path( $args['from'] );
		$to   = self::local_path( $args['to'] );
		if ( null === $from || '/' === $from ) {
			throw new Pont_MCP_Tool_Error( 'Ancienne adresse invalide : indiquez un chemin du site, autre que l’accueil.' );
		}
		if ( null === $to ) {
			throw new Pont_MCP_Tool_Error( 'Nouvelle adresse invalide : indiquez un chemin ou une URL de ce site.' );
		}
		if ( self::key( $from ) === self::key( $to ) ) {
			throw new Pont_MCP_Tool_Error( 'L’ancienne et la nouvelle adresse sont identiques.' );
		}

		$redirects = self::all();
		$key       = self::key( $from );

		// Pas de chaîne ni de boucle : la nouvelle adresse ne doit pas être elle-même redirigée.
		if ( isset( $redirects[ self::key( $to ) ] ) ) {
			throw new Pont_MCP_Tool_Error( 'La nouvelle adresse est elle-même redirigée vers ' . $redirects[ self::key( $to ) ]['to'] . ' : visez directement l’adresse finale.' );
		}
		if ( ! isset( $redirects[ $key ] ) && count( $redirects ) >= self::MAX ) {
			throw new Pont_MCP_Tool_Error( 'Nombre maximal de redirections atteint (' . self::MAX . ').' );
		}

		// Les redirections qui menaient à l'ancienne adresse visent désormais la nouvelle.
		$updated = array();
		foreach ( $redirects as $other => $redirect ) {
			if ( self::key( $redirect['to'] ) === $key ) {
				$redirects[ $other ]['to'] = $to;
				$updated[]                 = $other;
			}
		}

		$replaced          = isset( $redirects[ $key ] );
		$redirects[ $key ] = array(
			'to'      => $to,
			'created' => current_time( 'mysql' ),
		);
		update_option( self::OPTION, $redirects, true );

		return array(
			'from'          => $key,
			'to'            => $to,
			'replaced'      => $replaced,
			'also_updated'  => $updated,
			'test'          => home_url( $key ),
		);
	}

	public static function delete_redirect( array $args ) {
		if ( ! current_user_can( 'manage_options' ) ) {
			throw new Pont_MCP_Tool_Error( 'Droits insuffisants pour gérer les redirections.' );
		}

		$from      = self::local_path( $args['from'] );
		$redirects = self::all();
		$key       = null === $from ? '' : self::key( $from );
		if ( ! isset( $redirects[ $key ] ) ) {
			throw new Pont_MCP_Tool_Error( 'Aucune redirection pour cette adresse.' );
		}

		unset( $redirects[ $key ] );
		update_option( self::OPTION, $redirects, true );

		return array( 'deleted' => $key );
	}

	public static function maybe_redirect() {
		$redirects = self::all();
		if ( empty( $redirects ) || empty( $_SERVER['REQUEST_URI'] ) ) {
			return;
		}

		$uri  = wp_unslash( $_SERVER['REQUEST_URI'] ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized
		$path = self::local_path( $uri );
		if ( null === $path ) {
			return;
		}

		$key = self::key( $path );
		if ( ! isset( $redirects[ $key ] ) ) {
			return;
		}

		$target = home_url( $redirects[ $key ]['to'] );
		$query  = wp_parse_url( $uri, PHP_URL_QUERY );
		if ( $query && false === strpos( $target, '?' ) ) {
			$target .= '?' . $query;
		}

		wp_safe_redirect( $target, 301, 'Pont MCP' );
		exit;
	}

	private static function all() {
		$redirects = get_option( self::OPTION, array() );
		return is_array( $redirects ) ? $redirects : array();
	}

	/**
	 * Chemin relatif à l'accueil du site (sans sous-dossier d'installation, sans requête),
	 * ou null si l'adresse vise un autre site.
	 */
	private static function local_path( $address ) {
		$address = trim( (string) $address );
		if ( '' === $address ) {
			return null;
		}

		$home = wp_parse_url( home_url( '/' ) );
		$url  = wp_parse_url( $address );
		if ( false === $url ) {
			return null;
		}
		if ( isset( $url['host'] ) && strtolower( preg_replace( '/^www\./i', '', $url['host'] ) ) !== strtolower( preg_replace( '/^www\./i', '', $home['host'] ) ) ) {
			return null;
		}

		$path = isset( $url['path'] ) ? rawurldecode( $url['path'] ) : '/';
		$path = '/' . ltrim( $path, '/' );

		$base = isset( $home['path'] ) ? rtrim( $home['path'], '/' ) : '';
		if ( '' !== $base && 0 === strpos( $path . '/', $base . '/' ) ) {
			$path = '/' . ltrim( substr( $path, strlen( $base ) ), '/' );
		}

		$fragment = isset( $url['fragment'] ) ? '#' . $url['fragment'] : '';
		$query    = isset( $url['query'] ) ? '?' . $url['query'] : '';

		return $path . $query . $fragment;
	}

	/** Clé de comparaison : minuscules, sans requête, avec barre finale. */
	private static function key( $path ) {
		$path = strtolower( strtok( strtok( $path, '#' ), '?' ) );
		return '/' === $path ? '/' : trailingslashit( $path );
	}
}
