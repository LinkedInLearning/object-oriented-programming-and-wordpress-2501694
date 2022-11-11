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

use Library_Post_Types\CPTs\{Book,Hardware,Music,Periodical,Video};

use Library_Post_Types\CPTs\Register as CPT_Register;


require 'vendor/autoload.php';

$cpt_register = new CPT_Register();
$cpt_register
	->add( new Book() )
	->add( new Hardware() )
	->add( new Music() )
	->add( new Periodical() )
	->add( new Video() );

add_action( 'init', [ $cpt_register, 'register' ] );

