=== Disable Emojis ===

Contributors: littlebizzy
Tags: disable emojis, disable, remove, emojis, emoticons, smileys, icons
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Stable tag: 1.0.4
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSBEMJ

Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.

== Description ==

Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.

Unlike some other similar plugins, this plugin forces the "convert emoticons" option in WordPress settings to be unregistered directly using a hook. If users deactivate this plugin, that setting will return to previous value (whatever it was set to prior to activating this plugin) so it's very conflict free.

== Installation ==

1. Upload to `/wp-content/plugins/disable-emojis-littlebizzy` directory
2. Activate via WP Admin > Plugins
3. Verify that emojis javascript is no longer visible in source code (clear caches first)

== Changelog ==

= 1.0.4 =
* optimized plugin code
* updated recommended plugins
* added rate request

= 1.0.3 =
* minor code tweaks
* updated recommended plugins

= 1.0.2 =
* added recommended plugins

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
