<?php

// Subpackage namespace
namespace LittleBizzy\DisableEmojis\Emojis;

/**
 * Filters class
 *
 * @package Disable Emojis
 * @subpackage Emojis
 */
class Filters extends Emojis {



	/**
	 * Involved filters
	 */
	private $filters = [
		'wp_staticize_emoji' => [
			['the_content_feed', 10],
			['comment_text_rss', 10],
		],
		'wp_staticize_emoji_for_email' => [
			['wp_mail', 10],
		],
	];



	/**
	 * Handle the WP init hook
	 */
	public function init() {

		// Filters removed
		remove_filter('the_content_feed', 	'wp_staticize_emoji');
		remove_filter('comment_text_rss', 	'wp_staticize_emoji');
		remove_filter('wp_mail', 			'wp_staticize_emoji_for_email');

		// Modifications

	}



}