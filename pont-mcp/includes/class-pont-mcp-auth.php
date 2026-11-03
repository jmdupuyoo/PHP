<?php
/**
 * Authentification par clé secrète.
 *
 * La clé est transmise dans l'URL du connecteur (?cle=...) ou dans un en-tête
 * « Authorization: Bearer ... ». Seule son empreinte SHA-256 est stockée.
 * Une clé valide connecte la requête en tant que l'administrateur qui l'a générée,
 * ce qui permet aux vérifications de droits de WordPress de s'appliquer normalement.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Auth {

	const MIN_KEY_LENGTH = 32;

	/** @var bool Vrai si la requête courante a été authentifiée par une clé valide. */
	private static $authenticated = false;

	public static function init() {
		// Après les cookies et les mots de passe d'application : n'intervient que si personne n'est connecté.
		add_filter( 'determine_current_user', array( __CLASS__, 'determine_current_user' ), 30 );
	}

	/**
	 * Génère une nouvelle clé pour l'utilisateur donné et renvoie la clé en clair (affichée une seule fois).
	 */
	public static function generate_key( $user_id ) {
		$key = wp_generate_password( 48, false, false );
		Pont_MCP_Settings::update(
			array(
				'key_hash' => hash( 'sha256', $key ),
				'user_id'  => (int) $user_id,
				'created'  => current_time( 'mysql' ),
			)
		);
		return $key;
	}

	public static function revoke_key() {
		Pont_MCP_Settings::update(
			array(
				'key_hash' => '',
				'user_id'  => 0,
				'created'  => '',
			)
		);
	}

	public static function connector_url( $key ) {
		return add_query_arg( 'cle', rawurlencode( $key ), rest_url( PONT_MCP_NAMESPACE . PONT_MCP_ROUTE ) );
	}

	public static function determine_current_user( $user_id ) {
		if ( $user_id || ! self::is_mcp_request() ) {
			return $user_id;
		}

		$settings = Pont_MCP_Settings::get();
		$key      = self::request_key();
		if ( '' === $settings['key_hash'] || strlen( $key ) < self::MIN_KEY_LENGTH ) {
			return $user_id;
		}
		if ( ! hash_equals( $settings['key_hash'], hash( 'sha256', $key ) ) ) {
			return $user_id;
		}

		$owner = get_userdata( (int) $settings['user_id'] );
		if ( ! $owner || ! user_can( $owner, 'manage_options' ) ) {
			return $user_id;
		}

		self::$authenticated = true;
		return $owner->ID;
	}

	public static function is_authenticated() {
		return self::$authenticated
			&& get_current_user_id() === (int) Pont_MCP_Settings::get()['user_id'];
	}

	private static function is_mcp_request() {
		$route = PONT_MCP_NAMESPACE . PONT_MCP_ROUTE;
		// phpcs:disable WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['rest_route'] ) && false !== strpos( wp_unslash( $_GET['rest_route'] ), $route ) ) {
			return true;
		}
		// phpcs:enable
		$uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '';
		return false !== strpos( (string) $uri, rest_get_url_prefix() . '/' . $route );
	}

	private static function request_key() {
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		if ( isset( $_GET['cle'] ) && is_string( $_GET['cle'] ) ) {
			return trim( wp_unslash( $_GET['cle'] ) );
		}
		foreach ( array( 'HTTP_AUTHORIZATION', 'REDIRECT_HTTP_AUTHORIZATION' ) as $header ) {
			if ( ! empty( $_SERVER[ $header ] ) && preg_match( '/^Bearer\s+(\S+)$/i', wp_unslash( $_SERVER[ $header ] ), $m ) ) {
				return $m[1];
			}
		}
		return '';
	}
}
