<?php
/**
 * Plugin Name: Library Post Types
 * Description: Adds books, periodicals, videos, music, and hardware CPTs
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 * Text Domain: library-post-types
 */

spl_autoload_register( function( $class ) {
	if ( file_exists( __DIR__ . '/includes/CPTs/' . $class . '.php' ) ) {
		require 'includes/CPTs/' . $class . '.php';
	}
} );

$cpt_register = new CPT_Register();
$cpt_register
	->add( new Definition_Book() )
	->add( new Definition_Hardware() )
	->add( new Definition_Music() )
	->add( new Definition_Periodical() )
	->add( new Definition_Video() );

add_action( 'init', [ $cpt_register, 'register' ] );