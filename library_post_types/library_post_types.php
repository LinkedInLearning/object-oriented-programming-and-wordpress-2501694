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

require 'includes/CPTs/CPT_Definition.php';
require 'includes/CPTs/CPT_Register.php';
require 'includes/CPTs/Definition_Book.php';
require 'includes/CPTs/Definition_Hardware.php';
require 'includes/CPTs/Definition_Music.php';
require 'includes/CPTs/Definition_Periodical.php';
require 'includes/CPTs/Definition_Video.php';

$cpt_register = new CPT_Register();
$cpt_register
	->add( new Definition_Book() )
	->add( new Definition_Hardware() )
	->add( new Definition_Music() )
	->add( new Definition_Periodical() )
	->add( new Definition_Video() );

add_action( 'init', [ $cpt_register, 'register' ] );