<?php

// Subpackage namespace
namespace LittleBizzy\DisableEmojis\Emojis;

/**
 * Actions class
 *
 * @package Disable Emojis
 * @subpackage Emojis
 */
class Actions extends Emojis {



	// Properties
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Involved actions
	 */
	private $actions = [
		'print_emoji_detection_script' => [
			['wp_head', 7],
			['admin_print_scripts', 10],
			['embed_head', 10], // Unsupported by the original plugin
		],
		'print_emoji_styles' => [
			['wp_print_styles', 10],
			['admin_print_styles', 10],
		],
	];



	// WP hooks
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Handle the WP init hook
	 */
	public function init() {
		$this->remove('actions', $this->actions);
	}



}