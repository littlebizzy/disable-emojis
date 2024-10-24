<?php
/*
Plugin Name: Disable Emojis
Plugin URI: https://www.littlebizzy.com/plugins/disable-emojis
Description: Disables emoji scripts and styles
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

// disable emoji scripts in all relevant contexts
add_action( 'init', function() {
    // remove emoji actions from the front-end
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
    // remove emoji actions from the admin area
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );

    // remove emoji actions from embedded content
    remove_action( 'embed_head', 'print_emoji_detection_script' );
    remove_action( 'embed_head', 'print_emoji_styles' );
    
    // disable emojis in emails
    remove_action( 'wp_mail', 'wp_staticize_emoji_for_email' );

    // disable emojis in RSS feeds
    remove_action( 'the_content_feed', 'wp_staticize_emoji' );
    remove_action( 'comment_text_rss', 'wp_staticize_emoji' );

    // remove emoji support from TinyMCE (classic editor)
    add_filter( 'tiny_mce_plugins', function( $plugins ) {
        if ( is_array( $plugins ) ) {
            return array_diff( $plugins, [ 'wpemoji' ] );
        }
        return $plugins;
    });

    // disable DNS prefetch for emojis
    add_filter( 'emoji_svg_url', '__return_false' );

    // disable emoji scripts for XML-RPC requests (safety net)
    if ( defined( 'XMLRPC_REQUEST' ) && XMLRPC_REQUEST ) {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
    }

    // disable emoji scripts for REST API requests (safety net)
    if ( defined( 'REST_REQUEST' ) && REST_REQUEST ) {
        remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
        remove_action( 'wp_print_styles', 'print_emoji_styles' );
    }

    // remove emojis in post titles (including RSS feed titles)
    add_filter( 'the_title', function( $title ) {
        $emoji_regex = '/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F900}-\x{1F9FF}\x{1FA70}-\x{1FAFF}]/u';
        return preg_replace( $emoji_regex, '', $title );
    });

    // remove emojis in post content
    add_filter( 'the_content', function( $content ) {
        $emoji_regex = '/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F900}-\x{1F9FF}\x{1FA70}-\x{1FAFF}]/u';
        return preg_replace( $emoji_regex, '', $content );
    });

    // remove emojis in post excerpts
    add_filter( 'the_excerpt', function( $excerpt ) {
        $emoji_regex = '/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F900}-\x{1F9FF}\x{1FA70}-\x{1FAFF}]/u';
        return preg_replace( $emoji_regex, '', $excerpt );
    });

    // remove emojis in comment content
    add_filter( 'comment_text', function( $comment_text ) {
        $emoji_regex = '/[\x{1F600}-\x{1F64F}\x{1F300}-\x{1F5FF}\x{1F680}-\x{1F6FF}\x{2600}-\x{26FF}\x{2700}-\x{27BF}\x{1F1E6}-\x{1F1FF}\x{1F900}-\x{1F9FF}\x{1FA70}-\x{1FAFF}]/u';
        return preg_replace( $emoji_regex, '', $comment_text );
    });
});

// disable emoji scripts in block editor (Gutenberg)
add_action( 'enqueue_block_editor_assets', function() {
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
});

// Ref: ChatGPT
