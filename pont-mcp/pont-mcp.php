<?php
/**
 * Plugin Name:       Pont MCP
 * Description:       Connecte ce site WordPress à Claude (connecteur MCP personnalisé) : lecture et rédaction des contenus, médias, CSS du site, analyse du thème.
 * Version:           1.1.0
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Jardin zoologique tropical
 * License:           GPL-2.0-or-later
 * Text Domain:       pont-mcp
 */

defined( 'ABSPATH' ) || exit;

define( 'PONT_MCP_VERSION', '1.1.0' );
define( 'PONT_MCP_DIR', __DIR__ );
define( 'PONT_MCP_NAMESPACE', 'pont-mcp/v1' );
define( 'PONT_MCP_ROUTE', '/mcp' );

require_once PONT_MCP_DIR . '/includes/class-pont-mcp-settings.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-auth.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-server.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-admin.php';

Pont_MCP_Auth::init();
Pont_MCP_Server::init();
Pont_MCP_Admin::init();

add_filter(
	'plugin_action_links_' . plugin_basename( __FILE__ ),
	static function ( $links ) {
		array_unshift( $links, '<a href="' . esc_url( admin_url( 'options-general.php?page=pont-mcp' ) ) . '">' . esc_html__( 'Réglages', 'pont-mcp' ) . '</a>' );
		return $links;
	}
);
