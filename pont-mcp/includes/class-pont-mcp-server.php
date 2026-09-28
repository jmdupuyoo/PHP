<?php
/**
 * Serveur MCP (Model Context Protocol) en transport « Streamable HTTP », sans état.
 *
 * Chaque requête POST contient un message JSON-RPC 2.0 (ou un lot de messages) ;
 * la réponse est renvoyée en JSON. Les notifications reçoivent un 202 sans contenu.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Server {

	const SUPPORTED_PROTOCOLS = array( '2025-06-18', '2025-03-26', '2024-11-05' );

	const PARSE_ERROR      = -32700;
	const INVALID_REQUEST  = -32600;
	const METHOD_NOT_FOUND = -32601;
	const INVALID_PARAMS   = -32602;

	public static function init() {
		add_action( 'rest_api_init', array( __CLASS__, 'register_routes' ) );
		add_filter( 'rest_pre_serve_request', array( __CLASS__, 'serve_empty_response' ), 10, 2 );
	}

	public static function register_routes() {
		register_rest_route(
			PONT_MCP_NAMESPACE,
			PONT_MCP_ROUTE,
			array(
				array(
					'methods'             => 'POST',
					'callback'            => array( __CLASS__, 'handle_post' ),
					'permission_callback' => array( __CLASS__, 'check_permission' ),
				),
				array(
					// Pas de flux SSE ni de sessions : le client doit utiliser POST.
					'methods'             => 'GET, DELETE',
					'callback'            => static function () {
						$response = new WP_REST_Response( array( 'message' => 'Utilisez POST.' ), 405 );
						$response->header( 'Allow', 'POST' );
						return $response;
					},
					'permission_callback' => '__return_true',
				),
			)
		);
	}

	public static function check_permission() {
		if ( Pont_MCP_Auth::is_authenticated() && current_user_can( 'edit_posts' ) ) {
			return true;
		}
		return new WP_Error(
			'pont_mcp_forbidden',
			'Clé de connexion absente ou invalide. Générez une nouvelle adresse dans Réglages › Pont MCP.',
			array( 'status' => 403 )
		);
	}

	/**
	 * Les notifications JSON-RPC n'attendent aucune réponse : on renvoie un 202 au corps vide
	 * au lieu du « null » que produirait l'API REST.
	 */
	public static function serve_empty_response( $served, $result ) {
		if ( ! $served && $result instanceof WP_REST_Response && 202 === $result->get_status() && null === $result->get_data()
			&& $result->get_matched_route() === '/' . PONT_MCP_NAMESPACE . PONT_MCP_ROUTE ) {
			return true;
		}
		return $served;
	}

	public static function handle_post( WP_REST_Request $request ) {
		$message = json_decode( $request->get_body(), true );
		if ( JSON_ERROR_NONE !== json_last_error() || ! is_array( $message ) ) {
			return new WP_REST_Response( self::error( null, self::PARSE_ERROR, 'JSON invalide.' ), 400 );
		}

		if ( self::is_list( $message ) ) {
			if ( ! $message ) {
				return new WP_REST_Response( self::error( null, self::INVALID_REQUEST, 'Lot vide.' ), 400 );
			}
			$responses = array_values( array_filter( array_map( array( __CLASS__, 'process' ), $message ) ) );
			return $responses ? new WP_REST_Response( $responses, 200 ) : new WP_REST_Response( null, 202 );
		}

		$response = self::process( $message );
		return null === $response ? new WP_REST_Response( null, 202 ) : new WP_REST_Response( $response, 200 );
	}

	/**
	 * Traite un message JSON-RPC. Renvoie la réponse, ou null pour une notification.
	 */
	private static function process( $message ) {
		if ( ! is_array( $message ) || self::is_list( $message ) ) {
			return self::error( null, self::INVALID_REQUEST, 'Message JSON-RPC invalide.' );
		}

		$has_id = array_key_exists( 'id', $message );
		$id     = $has_id ? $message['id'] : null;

		// Réponse envoyée par le client (nous n'émettons jamais de requêtes) : rien à faire.
		if ( ! isset( $message['method'] ) && ( isset( $message['result'] ) || isset( $message['error'] ) ) ) {
			return null;
		}
		if ( ( $message['jsonrpc'] ?? '' ) !== '2.0' || ! isset( $message['method'] ) || ! is_string( $message['method'] ) ) {
			return self::error( $id, self::INVALID_REQUEST, 'Message JSON-RPC invalide.' );
		}
		if ( ! $has_id ) {
			return null; // notifications/initialized, notifications/cancelled, etc.
		}

		$params = isset( $message['params'] ) && is_array( $message['params'] ) ? $message['params'] : array();

		switch ( $message['method'] ) {
			case 'initialize':
				return self::result( $id, self::initialize( $params ) );
			case 'ping':
				return self::result( $id, new stdClass() );
			case 'tools/list':
				return self::result( $id, array( 'tools' => Pont_MCP_Tools::list_for_client() ) );
			case 'tools/call':
				return self::call_tool( $id, $params );
			case 'resources/list':
				return self::result( $id, array( 'resources' => array() ) );
			case 'prompts/list':
				return self::result( $id, array( 'prompts' => array() ) );
			default:
				return self::error( $id, self::METHOD_NOT_FOUND, 'Méthode inconnue : ' . $message['method'] );
		}
	}

	private static function initialize( array $params ) {
		$requested = $params['protocolVersion'] ?? '';
		$version   = in_array( $requested, self::SUPPORTED_PROTOCOLS, true ) ? $requested : self::SUPPORTED_PROTOCOLS[0];
		$levels    = Pont_MCP_Settings::levels();

		return array(
			'protocolVersion' => $version,
			'capabilities'    => array( 'tools' => array( 'listChanged' => false ) ),
			'serverInfo'      => array(
				'name'    => 'pont-mcp',
				'title'   => 'Pont MCP — ' . get_bloginfo( 'name' ),
				'version' => PONT_MCP_VERSION,
			),
			'instructions'    => sprintf(
				"Serveur WordPress du site « %s » (%s). Niveau d'accès : %s.\n"
				. "Commencez par site_overview. Pour travailler le design, utilisez theme_info puis fetch_site_url "
				. "(HTML réel des pages, classes CSS, feuilles de style chargées) avant de proposer du CSS, "
				. "et get_custom_css avant update_custom_css pour ne rien écraser. "
				. "Chaque modification du CSS est enregistrée en révision et peut être annulée avec restore_custom_css. "
				. "Les nouveaux contenus sont créés en brouillon sauf demande explicite.",
				get_bloginfo( 'name' ),
				home_url( '/' ),
				$levels[ Pont_MCP_Settings::level() ]
			),
		);
	}

	private static function call_tool( $id, array $params ) {
		$name = isset( $params['name'] ) && is_string( $params['name'] ) ? $params['name'] : '';
		$args = isset( $params['arguments'] ) && is_array( $params['arguments'] ) ? $params['arguments'] : array();

		if ( ! Pont_MCP_Tools::exists( $name ) ) {
			return self::error( $id, self::INVALID_PARAMS, 'Outil inconnu : ' . $name );
		}

		try {
			$data = Pont_MCP_Tools::call( $name, $args );
			Pont_MCP_Settings::log( $name, true );
			return self::result( $id, array( 'content' => array( self::text_content( $data ) ) ) );
		} catch ( Throwable $e ) {
			$expected = $e instanceof Pont_MCP_Tool_Error;
			$message  = $expected ? $e->getMessage() : 'Erreur interne : ' . $e->getMessage();
			Pont_MCP_Settings::log( $name, false, $message );
			return self::result(
				$id,
				array(
					'content' => array( array( 'type' => 'text', 'text' => $message ) ),
					'isError' => true,
				)
			);
		}
	}

	private static function text_content( $data ) {
		$text = is_string( $data )
			? $data
			: wp_json_encode( $data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
		return array( 'type' => 'text', 'text' => (string) $text );
	}

	private static function result( $id, $result ) {
		return array( 'jsonrpc' => '2.0', 'id' => $id, 'result' => $result );
	}

	private static function error( $id, $code, $message ) {
		return array(
			'jsonrpc' => '2.0',
			'id'      => $id,
			'error'   => array( 'code' => $code, 'message' => $message ),
		);
	}

	private static function is_list( array $value ) {
		return array() === $value || array_keys( $value ) === range( 0, count( $value ) - 1 );
	}
}
