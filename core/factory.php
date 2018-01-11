<?php

// Subpackage namespace
namespace LittleBizzy\DisableEmojis\Core;

// Aliased namespaces
use \LittleBizzy\DisableEmojis\Emojis;
use \LittleBizzy\DisableEmojis\Helpers;

/**
 * Object Factory class
 *
 * @package Disable Emojis
 * @subpackage Core
 */
class Factory extends Helpers\Factory {



	/**
	 * Actions object
	 */
	protected function createActions() {
		return new Emojis\Actions;
	}


	/**
	 * Filters object
	 */
	protected function createFilters() {
		return new Emojis\Filters;
	}



}