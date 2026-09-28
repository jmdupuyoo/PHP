<?php
/**
 * Suppression des réglages et du journal à la désinstallation.
 */

defined( 'WP_UNINSTALL_PLUGIN' ) || exit;

delete_option( 'pont_mcp_settings' );
delete_option( 'pont_mcp_log' );
