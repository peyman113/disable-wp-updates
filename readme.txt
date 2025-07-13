=== Disable WP Updates ===
Contributors: peymanfarahani
Tags: disable updates, wordpress core updates, plugin updates, theme updates, auto updates
Requires at least: 5.0
Tested up to: 6.8
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Cleanly disables all WordPress updates — core, themes, and plugins — using lightweight native code. Ideal for developers managing production or client sites.

== Description ==

This plugin disables all automatic and manual update checks in WordPress, including:

- Core update checks
- Plugin update checks
- Theme update checks
- API calls to `api.wordpress.org` for version checks

The plugin is designed to be lightweight and developer-friendly. It uses WordPress native filters and actions to prevent any update-related communication. No database changes, no overrides, no hacks.

**Important Note:**  
This plugin is intended for use in production environments, staging sites, or cases where full manual control over updates is desired. It is **not recommended for average users**, as it disables critical security and compatibility updates.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/disable-wp-updates/` directory, or install the plugin via the WordPress admin dashboard.
2. Activate the plugin through the ‘Plugins’ menu in WordPress.
3. No configuration is needed. Once activated, all updates will be disabled.

== Frequently Asked Questions ==

= Will this plugin delete existing updates or data? =
No. It simply disables WordPress update checks. It does not remove or alter any files.

= Can I re-enable updates later? =
Yes. Just deactivate or delete the plugin and WordPress will resume checking for updates as usual.

= Does this affect security updates? =
Yes — all types of updates are disabled, including security patches. Use with caution and keep backups.

== Screenshots ==

1. No admin notifications or update nags after activation.

== Changelog ==

= 1.0.0 =
* Initial release.

== Upgrade Notice ==

= 1.0.0 =
Initial stable version — disables all update checks via native WordPress filters.

