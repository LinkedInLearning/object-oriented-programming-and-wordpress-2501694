<?php
declare( strict_types=1 );

/**
 * Plugin Name: Anatamy of A Class
 * Description: Demonstrate the anatomy of a class
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 */

use Anatomy_Of_A_Class\Example;

require __DIR__ . '/vendor/autoload.php';

add_action( 'admin_notices', function () {
	echo '<div class="notice">';
	$example_1 = new Example();
	$example_1->do_a_thing( true );
	echo '</div>';

	echo '<div class="notice">';
	$example_2 = new Example();
	$example_2->do_a_thing( true );
	echo '</div>';
} );

