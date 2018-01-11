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



	// Initialization
	// ---------------------------------------------------------------------------------------------------



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



	// Util
	// ---------------------------------------------------------------------------------------------------



	/**
	 * Remove actions of filters
	 */
	protected function remove($type, $items) {

		// Enum all items
		foreach ($items as $func => $hooks) {

			// Allowed hooks
			foreach ($hooks as $hook) {

				// Actions
				if ('actions' == $type) {
					remove_action($hook[0], $func, $hook[1]);

				// Filters
				} elseif ('filters' == $type) {
					remove_filter($hook[0], $func, $hook[1]);
				}
			}
		}
	}



}