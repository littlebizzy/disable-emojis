<?php
/*
Plugin Name: Disable Emojis
Plugin URI: https://www.littlebizzy.com/plugins/disable-emojis
Description: Completely disables both the old and new versions of WordPress emojis, removes the corresponding javascript calls, and improves page loading times.
Version: 1.2.0
Author: LittleBizzy
Author URI: https://www.littlebizzy.com
License: GPLv3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Prefix: DSBEMJ
*/

// Plugin namespace
namespace LittleBizzy\DisableEmojis;

/**
 * Admin Notices Multisite check
 * Uncomment //return to disable this plugin on Multisite installs
 */
require_once dirname(__FILE__).'/admin-notices-ms.php';
if (false !== \LittleBizzy\DisableEmojis\Admin_Notices_MS::instance(__FILE__)) {
	//return;
}

// Block direct calls
if (!function_exists('add_action'))
	die;

// Plugin constants
const FILE = __FILE__;
const PREFIX = 'dsbemj';
const VERSION = '1.2.0';

// Loader
require_once dirname(FILE).'/helpers/loader.php';

// Admin Notices
Admin_Notices::instance(__FILE__);

// Run the main class
Helpers\Runner::start('Core\Core', 'instance');
