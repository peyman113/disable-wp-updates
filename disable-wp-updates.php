<?php

/**
 * Plugin Name: Disable WP Updates
 * Description: Disables WordPress core, theme, and plugin updates using clean native code.
 * Version: 1.0.0
 * Author: Peyman Farahani
 * Author URI: https://peymanfarahani.com/
 * License: GPLv2 or later
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// 🔒 Disable update transients for core, plugins, and themes
add_filter('pre_site_transient_update_core', '__return_null');
add_filter('pre_site_transient_update_plugins', '__return_null');
add_filter('pre_site_transient_update_themes', '__return_null');

// 🚫 Remove update check actions from the admin panel
remove_action('load-update-core.php', 'wp_update_plugins');
remove_action('load-update-core.php', 'wp_update_themes');
remove_action('load-update-core.php', 'wp_version_check');

// 🔌 Block outbound update requests to WordPress.org
add_filter('pre_http_request', function ($pre, $args, $url) {
    if (
        strpos($url, 'api.wordpress.org/core/version-check') !== false ||
        strpos($url, 'api.wordpress.org/plugins/update-check') !== false ||
        strpos($url, 'api.wordpress.org/themes/update-check') !== false
    ) {
        return true; // Prevent the request from being sent
    }
    return $pre;
}, 100, 3);
