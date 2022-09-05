<?php
declare( strict_types=1 );

/**
 * Plugin Name: Site Stats
 * Description: Expose arbitrary stats via REST API
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 * Text Domain: cookie-plugin
 */

require_once __DIR__ . '/vendor/autoload.php';

//$user_count = new Stats\Endpoints\Gary_User_Count();

$user_count = new \Stats\Endpoints\User_Count(
	new \Stats\Stats\Users_By_Name(),
	'Gary'
);

add_action( 'rest_api_init', [ $user_count, 'register' ] );