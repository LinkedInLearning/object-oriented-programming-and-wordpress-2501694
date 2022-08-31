<?php
declare( strict_types=1 );

/**
 * Plugin Name: Event Plugin
 * Description: Demonstrate event model in WP
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 */

use Event_Plugin\Event;
use Event_Plugin\Rest_Request_Filter;

require __DIR__ . '/vendor/autoload.php';

//$event = new Event();
//
//remove_action( 'init', [ $event, 'register_taxonomy' ] );

//$rest_request_filter = new Rest_Request_Filter();

//add_filter( 'rest_request_before_callbacks', [ $rest_request_filter, 'rest_request_before_callbacks' ] );
//add_filter( 'rest_request_before_callbacks', function ( \WP_REST_Request $request ) {
//	$rest_request_filter = new Rest_Request_Filter();
//
//	return $rest_request_filter->rest_request_before_callbacks( $request );
//} );

\Event_Plugin\Hooks_For_Objects::add_filter(
	'rest_request_before_callbacks',
	'Event_Plugin\Rest_Request_Filter',
	'rest_request_before_callbacks'
);


