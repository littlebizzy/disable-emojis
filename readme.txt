=== Disable Emojis ===

Contributors: littlebizzy
Tags: disable, remove, emojis, emoticons, smileys
Requires at least: 4.4
Tested up to: 4.8
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.0.5
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSBEMJ

Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.

== Description ==

Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.

* [Plugin Homepage](https://www.littlebizzy.com/plugins/disable-emojis)
* [Plugin GitHub](https://github.com/littlebizzy/disable-emojis)
* [SlickStack](https://slickstack.io)

#### The Long Version ####

Unlike some other similar plugins, this plugin forces the "convert emoticons" option in WordPress settings to be unregistered directly using a hook. If users deactivate this plugin, that setting will return to previous value (whatever it was set to prior to activating this plugin) so it's very conflict free.

ALL types of emojis and emoticons (smileys) are disabled with this plugin, including the old version and new versions, along with the javascript calls. This creates lighter source code for your site, helps with loading speed, and can also make pages render faster since they don't need to load emojis too.

#### Compatibility ####

This plugin has been designed for use on LEMP (Nginx) web servers with PHP 7.0 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and security reasons, we highly recommend against using WordPress Multisite for the vast majority of projects.

#### Plugin Features ####

* Settings Page: No
* Premium Version Available: Yes ([Speed Demon](https://www.littlebizzy.com/plugins/speed-demon))
* Includes Media (Images, Icons, Etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * Options: Yes
  * Creates New Tables: No
* Database Queries: Backend Only (Options API Cache)
* Must-Use Support: Yes (Use With [Autoloader](https://github.com/littlebizzy/autoloader))
* Multisite Support: No
* Uninstalls Data: Yes

#### WP Admin Notices ####

This plugin generates multiple [Admin Notices](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices) in the WP Admin dashboard. The first is a notice that fires during plugin activation which recommends several related free plugins that we believe will enhance this plugin's features; this notice will re-appear approximately once every 5 months as our code and recommendations evolve. The second is a notice that fires a few days after plugin activation which asks for a 5-star rating of this plugin on its WordPress.org profile page. This notice will re-appear approximately once every 8 months. These notices can be dismissed by clicking the **(x)** symbol in the upper right of the notice box. These notices may confuse certain users, but are appreciated by the majority of our userbase, who understand that these notices support our free contributions to the WordPress community. If you feel that these notices are too "annoying" than we encourage you to consider one or more of our upcoming premium plugins that combine several free plugin features into a single control panel. Another alternative would be to develop your own plugins for WordPress, if you feel that supporting free plugin authors is not something that interests you.

#### Code Inspiration ####

This plugin was partially inspired either in "code or concept" by the open-source software and discussions mentioned below:

* [Disable Emojis](https://wordpress.org/plugins/disable-emojis/)

#### Recommended Plugins ####

We invite you to check out a few other related free plugins that our team has also produced that you may find especially useful:

* [404 To Homepage](https://wordpress.org/plugins/404-to-homepage-littlebizzy/)
* [CloudFlare](https://wordpress.org/plugins/cf-littlebizzy/)
* [Disable Author Pages](https://wordpress.org/plugins/disable-author-pages-littlebizzy/)
* [Disable Cart Fragments](https://wordpress.org/plugins/disable-cart-fragments-littlebizzy/)
* [Disable Embeds](https://wordpress.org/plugins/disable-embeds-littlebizzy/)
* [Disable Emojis](https://wordpress.org/plugins/disable-emojis-littlebizzy/)
* [Disable Empty Trash](https://wordpress.org/plugins/disable-empty-trash-littlebizzy/)
* [Disable Image Compression](https://wordpress.org/plugins/disable-image-compression-littlebizzy/)
* [Disable Search](https://wordpress.org/plugins/disable-search-littlebizzy/)
* [Disable WooCommerce Status](https://wordpress.org/plugins/disable-wc-status-littlebizzy/)
* [Disable WooCommerce Styles](https://wordpress.org/plugins/diable-wc-styles-littlebizzy/)
* [Disable XML-RPC](https://wordpress.org/plugins/disable-xml-rpc-littlebizzy/)
* [Download Media](https://wordpress.org/plugins/download-media-littlebizzy/)
* [Download Plugin](https://wordpress.org/plugins/download-plugin-littlebizzy/)
* [Download Theme](https://wordpress.org/plugins/download-theme-littlebizzy/)
* [Duplicate Post](https://wordpress.org/plugins/duplicate-post-littlebizzy/)
* [Export Database](https://wordpress.org/plugins/export-database-littlebizzy/)
* [Force HTTPS](https://wordpress.org/plugins/force-https-littlebizzy/)
* [Force Strong Hashing](https://wordpress.org/plugins/force-strong-hashing-littlebizzy/)
* [Google Analytics](https://wordpress.org/plugins/ga-littlebizzy/)
* [Index Autoload](https://wordpress.org/plugins/index-autoload-littlebizzy/)
* [Maintenance Mode](https://wordpress.org/plugins/maintenance-mode-littlebizzy/)
* [Profile Change Alerts](https://wordpress.org/plugins/profile-change-alerts-littlebizzy/)
* [Remove Category Base](https://wordpress.org/plugins/remove-category-base-littlebizzy/)
* [Remove Query Strings](https://wordpress.org/plugins/remove-query-strings-littlebizzy/)
* [Server Status](https://wordpress.org/plugins/server-status-littlebizzy/)
* [StatCounter](https://wordpress.org/plugins/sc-littlebizzy/)
* [View Defined Constants](https://wordpress.org/plugins/view-defined-constants-littlebizzy/)
* [Virtual Robots.txt](https://wordpress.org/plugins/virtual-robotstxt-littlebizzy/)

#### Special Thanks ####

We thank the following groups for their generous contributions to the WordPress community which have particularly benefited us in developing our own free plugins and paid services:

* Matt Mullenweg, Mika Epstein, Samuel Wood, Scott Reilly, Pippin Williamson, Jeff Starr, Jeff Chandler, Leland Fiegel
* [Automattic](https://automattic.com)
* [Delicious Brains](https://deliciousbrains.com)
* [Roots](https://roots.io)
* [rtCamp](https://rtcamp.com)
* [WP Tavern](https://wptavern.com)

== Installation ==

1. Upload to `/wp-content/plugins/disable-emojis-littlebizzy` directory
2. Activate via WP Admin > Plugins
3. Verify that emojis javascript is no longer visible in source code (clear caches first)

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is no settings page to maintain to speed and stability.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, we kindly ask that you post your feedback on the wordpress.org support forums by tagging this plugin in your post. If needed, you may also contact our homepage.

== Changelog ==

= 1.0.5 =
* tested with WP 4.9
* optimized plugin code
* updated recommended plugins
* updated plugin meta

= 1.0.4 =
* optimized plugin code
* updated recommended plugins
* added rating request

= 1.0.3 =
* minor code tweaks
* updated recommended plugins

= 1.0.2 =
* added recommended plugins

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
