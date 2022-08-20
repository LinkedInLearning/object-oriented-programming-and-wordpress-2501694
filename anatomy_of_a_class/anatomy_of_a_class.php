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
	$example_1 = new Example();
	$example_2 = $example_1;

	$example_2->example_property = 'anything else';

	echo '<div class="notice">';
	var_dump( $example_1 );
	echo '</div>';

	echo '<div class="notice">';
	var_dump( $example_2 );
	echo '</div>';

	echo '<div class="notice">';

	echo '<h4>Equal Comparison</h4>';
	echo $example_1 == $example_2 ? 'true' : 'false';

	echo '<h4>Identical Comparison</h4>';
	echo $example_1 === $example_2 ? 'true' : 'false';

	echo '</div>';

	$example_3 = new Example();
} );

