<?php

/**
 * Plugin Name: SO Add Fake Users
 * Description: Add fake users from the randomuser.me API
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 */

require __DIR__ . '/vendor/autoload.php';

if ( defined( 'WP_CLI' ) && WP_CLI ) {
	WP_CLI::add_command( 'get-fake-users', 'SO_Fake_Users\CLI\User_Import' );
}