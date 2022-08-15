<?php

/**
* Plugin Name: Cookie Plugin
* Description: Adds a cookie CPT, taxonomy and other sweeteners.
* Version: 1.0.0
* Requires PHP: 7.4
* Author: Gary Kovar
* License: GPLv2
* Text Domain: cookie-plugin
*/

if ( ! defined('COOKIE_PLUGIN_CPT_SLUG')) {
	define( 'COOKIE_PLUGIN_CPT_SLUG', 'biscuit' );
}

// Register CPT & Tax
require_once 'includes/cookie_cpt.php';
require_once 'includes/cookie_type_tag.php';

