<?php

// Subpackage namespace
namespace LittleBizzy\DisableEmojis\Emojis;

/**
 * Emojis class
 *
 * @package Disable Emojis
 * @subpackage Emojis
 */
class Emojis {



	/**
	 * Constructor
	 */
	public function __construct() {
		add_action('init', [&$this, 'init']);
	}



	/**
	 * Declared for overwriting
	 */
	public function init() {}



}