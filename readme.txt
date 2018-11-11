=== Disable Emojis ===

Contributors: littlebizzy
Donate link: https://www.patreon.com/littlebizzy
Tags: disable, remove, emojis, emoticons, smileys
Requires at least: 4.4
Tested up to: 5.0
Requires PHP: 7.0
Multisite support: No
Stable tag: 1.2.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSBEMJ

Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.

== Description ==

Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.

* [**Join our FREE Facebook group for support**](https://www.facebook.com/groups/littlebizzy/)
* [**Worth a 5-star review? Thank you!**](https://wordpress.org/support/plugin/disable-emojis-littlebizzy/reviews/?rate=5#new-post)
* [Plugin Homepage](https://www.littlebizzy.com/plugins/disable-emojis)
* [Plugin GitHub](https://github.com/littlebizzy/disable-emojis)

#### Current Features ####

Unlike some other similar plugins, this plugin forces the "convert emoticons" option in WordPress settings to be unregistered directly using a hook. If users deactivate this plugin, that setting will return to previous value (whatever it was set to prior to activating this plugin) so it's very conflict free.

ALL types of emojis and emoticons (smileys) are disabled with this plugin, including the old version and new versions, along with the javascript calls. This creates lighter source code for your site, helps with loading speed, and can also make pages render faster since they don't need to load emojis too.

#### Compatibility ####

This plugin has been designed for use on [SlickStack](https://slickstack.io) web servers with PHP 7.2 and MySQL 5.7 to achieve best performance. All of our plugins are meant for single site WordPress installations only; for both performance and usability reasons, we highly recommend avoiding WordPress Multisite for the vast majority of projects.

Any of our WordPress plugins may also be loaded as "Must-Use" plugins by using our free [Autoloader](https://github.com/littlebizzy/autoloader) script in the `mu-plugins` directory.

#### Defined Constants ####

    /* Plugin Meta */
    define('DISABLE_NAG_NOTICES', true);

#### Plugin Features ####

* Prefix: DSBEMJ
* Parent Plugin: [**Speed Demon**](https://wordpress.org/plugins/speed-demon-littlebizzy/)
* Disable Nag Notices: [Yes](https://codex.wordpress.org/Plugin_API/Action_Reference/admin_notices#Disable_Nag_Notices)
* Settings Page: No
* PHP Namespaces: Yes
* Object-Oriented Code: Yes
* Includes Media (images, icons, etc): No
* Includes CSS: No
* Database Storage: Yes
  * Transients: No
  * WP Options Table: Yes
  * Other Tables: No
  * Creates New Tables: No
  * Creates New WP Cron Jobs: No
* Database Queries: Backend Only (Options API)
* Must-Use Support: [Yes](https://github.com/littlebizzy/autoloader)
* Multisite Support: No
* Uninstalls Data: Yes

#### Special Thanks ####

[Alex Georgiou](https://www.alexgeorgiou.gr), [Automattic](https://automattic.com), [Brad Touesnard](https://bradt.ca), [Daniel Auener](http://www.danielauener.com), [Delicious Brains](https://deliciousbrains.com), [Greg Rickaby](https://gregrickaby.com), [Matt Mullenweg](https://ma.tt), [Mika Epstein](https://halfelf.org), [Mike Garrett](https://mikengarrett.com), [Samuel Wood](http://ottopress.com), [Scott Reilly](http://coffee2code.com), [Jan Dembowski](https://profiles.wordpress.org/jdembowski), [Jeff Starr](https://perishablepress.com), [Jeff Chandler](https://jeffc.me), [Jeff Matson](https://jeffmatson.net), [Jeremy Wagner](https://jeremywagner.me), [John James Jacoby](https://jjj.blog), [Leland Fiegel](https://leland.me), [Luke Cavanagh](https://github.com/lukecav), [Mike Jolley](https://mikejolley.com), [Pau Iglesias](https://pauiglesias.com), [Paul Irish](https://www.paulirish.com), [Rahul Bansal](https://profiles.wordpress.org/rahul286), [Roots](https://roots.io), [rtCamp](https://rtcamp.com), [Ryan Hellyer](https://geek.hellyer.kiwi), [WP Chat](https://wpchat.com), [WP Tavern](https://wptavern.com)

#### Disclaimer ####

We released this plugin in response to our managed hosting clients asking for better access to their server, and our primary goal will remain supporting that purpose. Although we are 100% open to fielding requests from the WordPress community, we kindly ask that you keep these conditions in mind, and refrain from slandering, threatening, or harassing our team members in order to get a feature added, or to otherwise get "free" support. The only place you should be contacting us is in our free [**Facebook group**](https://www.facebook.com/groups/littlebizzy/) which has been setup for this purpose, or via GitHub if you are an experienced developer. Thank you!

#### Our Philosophy ####

> "Decisions, not options." -- WordPress.org

> "Everything should be made as simple as possible, but not simpler." -- Albert Einstein, et al

> "Write programs that do one thing and do it well... write programs to work together." -- Doug McIlroy

> "The innovation that this industry talks about so much is bullshit. Anybody can innovate... 99% of it is 'Get the work done.' The real work is in the details." -- Linus Torvalds

#### Search Keywords ####

disable, disable emojis, disable emoticons, disable smileys, remove, remove emojis, remove emoticons, remove smileys

== Installation ==

1. Upload to `/wp-content/plugins/disable-emojis-littlebizzy`
2. Activate via WP Admin > Plugins
3. Test plugin is working:

After plugin activation, purge all caches. Then, check the source code of your website to verify all related emojis javascript and CSS files are no longer loading, and text symbols such as `:)` are no longer being converted to emoji images in your posts.

== Frequently Asked Questions ==

= How can I change this plugin's settings? =

There is no settings page to maintain to speed and stability.

= I have a suggestion, how can I let you know? =

Please avoid leaving negative reviews in order to get a feature implemented. Instead, join our free Facebook group.

== Changelog ==

= 1.2.0 =
* tested with WP 5.0

= 1.1.2 =
* updated plugin meta

= 1.1.1 =
* added warning for Multisite installations
* updated recommended plugins

= 1.1.0 =
* plugin entirely re-written with PHP namespaces
* plugin uses object-oriented code
* added more "disable" filters
* support for `DISABLE_NAG_NOTICES`
* removed improperly credited Ryan Hellyer code snippet
* (apologies to Ryan Hellyer)
* updated plugin meta

= 1.0.5 =
* tested with WP 4.9
* optimized plugin code
* updated recommended plugins
* updated plugin meta

= 1.0.4 =
* optimized plugin code
* added rating request notice
* updated recommended plugins

= 1.0.3 =
* optimized plugin code
* updated recommended plugins

= 1.0.2 =
* added recommended plugins notice

= 1.0.1 =
* updated plugin meta

= 1.0.0 =
* initial release
