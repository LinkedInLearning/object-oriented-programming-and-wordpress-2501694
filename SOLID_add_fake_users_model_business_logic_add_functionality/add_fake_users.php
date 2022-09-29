<?php

/**
 * Plugin Name: SOLID Add Fake Users and model business logic and add functionality
 * Description: Add fake users from the randomuser.me API
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 */

require __DIR__ . '/vendor/autoload.php';

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	$random_user_api = new \SOLID_Fake_Users_MBL_AF\Random_User_API();

	WP_CLI::add_command( 'get-fake-users', function ( $args, $assoc_args ) use ( $random_user_api ) {
		$user_import = new \SOLID_Fake_Users_MBL_AF\CLI\User_Import( $random_user_api );
		$user_import->save( $args, $assoc_args );
	} );
}