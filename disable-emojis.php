<?php
/*
Plugin Name: Disable Emojis
Plugin URI: https://www.littlebizzy.com/plugins/disable-emojis
Description: Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.
Version: 1.1.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSBEMJ
*/

// Plugin namespace
namespace LittleBizzy\DisableEmojis;

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dsbemj';
const VERSION = '1.1.0';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Admin Notices
Admin_Notices::instance(__FILE__);

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');








// Admin Notices module
require_once dirname(__FILE__).'/admin-notices.php';
DSBEMJ_Admin_Notices::instance(__FILE__);


/**
 * Initialization
 */




/**
 * Plugin code
 */

/**
 * Define main plugin class
 */
class LB_Disable_Emojis {

	/**
	 * A reference to an instance of this class.
	 *
	 * @since 1.0.0
	 * @var   object
	 */
	private static $instance = null;

	/**
	 * Initalize plugin actions
	 *
	 * @return void
	 */
	public function init() {

		// Remove standard Emoji-related hooks
		remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
		remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
		remove_action( 'wp_print_styles', 'print_emoji_styles' );
		remove_action( 'admin_print_styles', 'print_emoji_styles' );
		remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
		remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
		remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

		add_filter( 'tiny_mce_plugins', array( $this, 'disable_emojis_tinymce' ) );
		add_filter( 'wp_resource_hints', array( $this, 'disable_emojis_remove_dns_prefetch' ), 10, 2 );
		add_filter( 'pre_option_use_smilies', '__return_zero' );

	}

	/**
	 * Returns plugin base file
	 * @return [type] [description]
	 */
	public static function file() {
		return __FILE__;
	}

	/**
	 * Remove 'wpemoji' from registered plugins for tinyMCE
	 *
	 * @param  array $plugins Plugins array.
	 * @return array
	 */
	public function disable_emojis_tinymce( $plugins ) {

		if ( is_array( $plugins ) ) {
			return array_diff( $plugins, array( 'wpemoji' ) );
		} else {
			return array();
		}

	}

	/**
	 * Remove emoji CDN hostname from DNS prefetching hints.
	 *
	 * @param  array  $urls          URLs to print for resource hints.
	 * @param  string $relation_type The relation type the URLs are printed for.
	 * @return array                 Difference betwen the two arrays.
	 */
	public function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {

		if ( 'dns-prefetch' == $relation_type ) {
			/** This filter is documented in wp-includes/formatting.php */
			$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2.2.1/svg/' );

			$urls = array_diff( $urls, array( $emoji_svg_url ) );
		}

		return $urls;
	}

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @return object
	 */
	public static function get_instance() {

		// If the single instance hasn't been set, set it now.
		if ( null == self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
}

/**
 * Returns instance of LB_Disable_Emojis class
 *
 * @return object
 */
function lb_disable_emojis() {
	return LB_Disable_Emojis::get_instance();
}

add_action( 'init', array( lb_disable_emojis(), 'init' ), 0 );
