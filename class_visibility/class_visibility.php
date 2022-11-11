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

	echo $property_visibility->public_property;

	echo '</pre></div>';
} );

