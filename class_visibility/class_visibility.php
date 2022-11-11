<?php
declare( strict_types=1 );


/**
 * Plugin Name: Class Visibility Example
 * Description: Shows how visibility works in PHP.
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 * Text Domain: cookie-plugin
 */

use Visibility\Method_Visibility;
use Visibility\Property_Visibility;

require __DIR__ . '/vendor/autoload.php';

add_action( 'admin_notices', function () {
	echo '<div class="notice"><pre>';

	// Property Visibility.
	$property_visibility = new Property_Visibility(
		'you cannot see me',
		'you can see me'
	);

	$method_visibility = new Method_Visibility( 'display me!' );

	$method_visibility->display_string();
	$method_visibility->display_string_fail();

	echo '</pre></div>';
} );

