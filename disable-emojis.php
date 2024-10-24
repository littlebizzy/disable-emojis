<?php
/*
Plugin Name: Disable Emojis
Plugin URI: https://www.littlebizzy.com/plugins/disable-emojis
Description: Disables the emoji scripts and styles in WordPress.
Version: 2.0.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
GitHub Plugin URI: littlebizzy/disable-emojis
Primary Branch: master
*/

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// disable wordpress.org updates for this plugin
add_filter( 'gu_override_dot_org', function( $overrides ) {
    $overrides[] = 'disable-emojis/disable-emojis.php';
    return $overrides;
}, 999 );

// hook to disable emoji scripts
add_action('init', function() {
    // remove emoji actions from the front-end
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_action('wp_mail', 'wp_staticize_emoji_for_email');
    remove_action('the_content_feed', 'wp_staticize_emoji');
    remove_action('comment_text_rss', 'wp_staticize_emoji');

    // filter to remove tinymce emojis
    add_filter('tiny_mce_plugins', function($plugins) {
        if (is_array($plugins)) {
            return array_diff($plugins, ['wpemoji']);
        }
        return [];
    });

    // disable dns prefetch for emojis
    add_filter('emoji_svg_url', '__return_false');
});

// Ref: ChatGPT
