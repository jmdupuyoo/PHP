<?php
/**
 * Plugin Name:       Pont MCP
 * Description:       Connecte ce site WordPress à Claude (connecteur MCP personnalisé) : contenus, médias, SEO, redirections 301, menus, widgets, options du thème, CSS, Polylang, liens Amazon, Google Analytics.
 * Version:           1.2.4
 * Requires at least: 6.0
 * Requires PHP:      7.4
 * Author:            Jardin zoologique tropical
 * License:           GPL-2.0-or-later
 * Text Domain:       pont-mcp
 */

defined( 'ABSPATH' ) || exit;

define( 'PONT_MCP_VERSION', '1.2.4' );
define( 'PONT_MCP_DIR', __DIR__ );
define( 'PONT_MCP_NAMESPACE', 'pont-mcp/v1' );
define( 'PONT_MCP_ROUTE', '/mcp' );

require_once PONT_MCP_DIR . '/includes/class-pont-mcp-settings.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-auth.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-polylang.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools-media.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools-affiliate.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools-appearance.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools-seo.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-redirects.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tools-replace.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-tracking.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-server.php';
require_once PONT_MCP_DIR . '/includes/class-pont-mcp-admin.php';

Pont_MCP_Auth::init();
Pont_MCP_Server::init();
Pont_MCP_Admin::init();
Pont_MCP_Tools_SEO::init();
Pont_MCP_Redirects::init();
Pont_MCP_Tracking::init();

add_filter(
	'plugin_action_links_' . plugin_basename( __FILE__ ),
	static function ( $links ) {
		array_unshift( $links, '<a href="' . esc_url( admin_url( 'options-general.php?page=pont-mcp' ) ) . '">' . esc_html__( 'Réglages', 'pont-mcp' ) . '</a>' );
		return $links;
	}
);
