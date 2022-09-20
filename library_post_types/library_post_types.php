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

use Library_Post_Types\CPTs\Register as CPT_Register;
use Library_Post_Types\CPTs\{Book, Hardware, Music, Periodical, Simple_CPT, Video};

require __DIR__ . '/vendor/autoload.php';

$video = new Simple_CPT( 'Video' );

$cpt_register = new CPT_Register();
$cpt_register
	->add( new Book() )
	->add( new Hardware() )
	->add( new Music() )
	->add( new Periodical() )
	->add( $video );

add_action( 'init', [ $cpt_register, 'register' ] );