<?php
/**
 * Stockage des réglages et du journal d'activité.
 */

defined( 'ABSPATH' ) || exit;

class Pont_MCP_Settings {

	const OPTION     = 'pont_mcp_settings';
	const LOG_OPTION = 'pont_mcp_log';
	const LOG_SIZE   = 50;

	/** Lecture seule : aucune modification possible. */
	const LEVEL_READ = 'lecture';
	/** Brouillons : création/modification de brouillons, médias, catégories. Rien de visible en ligne. */
	const LEVEL_DRAFTS = 'brouillons';
	/** Complet : publication, modification des contenus en ligne et du CSS du site. */
	const LEVEL_FULL = 'complet';

	public static function levels() {
		return array(
			self::LEVEL_READ   => 'Lecture seule',
			self::LEVEL_DRAFTS => 'Brouillons (rien n’est modifié en ligne)',
			self::LEVEL_FULL   => 'Complet (publication, contenus en ligne, CSS du site)',
		);
	}

	public static function get() {
		$settings = get_option( self::OPTION, array() );
		return wp_parse_args(
			is_array( $settings ) ? $settings : array(),
			array(
				'key_hash' => '',
				'user_id'  => 0,
				'created'  => '',
				'level'             => self::LEVEL_DRAFTS,
				'amazon_tag'        => '',
				'amazon_domain'     => 'amazon.fr',
				'amazon_disclosure' => '',
			)
		);
	}

	public static function update( array $changes ) {
		update_option( self::OPTION, array_merge( self::get(), $changes ), false );
	}

	public static function level() {
		$level = self::get()['level'];
		return array_key_exists( $level, self::levels() ) ? $level : self::LEVEL_DRAFTS;
	}

	/**
	 * Vrai si le niveau d'accès configuré atteint $required.
	 */
	public static function allows( $required ) {
		$order = array_keys( self::levels() );
		return array_search( self::level(), $order, true ) >= array_search( $required, $order, true );
	}

	public static function log( $tool, $ok, $message = '' ) {
		$log = get_option( self::LOG_OPTION, array() );
		$log = is_array( $log ) ? $log : array();
		array_unshift(
			$log,
			array(
				'time'    => time(),
				'tool'    => (string) $tool,
				'ok'      => (bool) $ok,
				'message' => mb_substr( (string) $message, 0, 200 ),
			)
		);
		update_option( self::LOG_OPTION, array_slice( $log, 0, self::LOG_SIZE ), false );
	}

	public static function get_log() {
		$log = get_option( self::LOG_OPTION, array() );
		return is_array( $log ) ? $log : array();
	}
}
