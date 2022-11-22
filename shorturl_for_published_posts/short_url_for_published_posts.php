<?php
declare( strict_types=1 );

/**
 * Plugin Name: Short URL for published posts
 * Description: get a short URL for published posts
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 */

require_once __DIR__ . '/vendor/autoload.php';

//$shorten = new \Shorter_URL\Shorten( new \Shorter_URL\Services\Mock_Short_URL_Service() );
$shorten = new \Shorter_URL\Shorten(
	new \Shorter_URL\Services\Service_Wrapper(
		new \Shorter_URL\Services\Yourls_Call()
	)
);

add_action( 'transition_post_status', function ( $new_status, $old_status, $post ) use ( $shorten ) {
	if ( 'publish' === $new_status && 'publish' !== $old_status ) {
		$short_url_store = new Shorter_URL\Short_URL_Store();
		if ( $short_url_store->get( $post->ID )->get_short_url() ) {
			return;
		}

		$short_url = $shorten->shorten_url( $post->ID, get_permalink( $post ) );


		$short_url_store->save( $post->ID, $short_url );
	}
}, 10, 3 );

add_action( 'add_meta_boxes', function () use ( $shorten ) {
	$short_url_store = new Shorter_URL\Short_URL_Store();
	$short_url       = $short_url_store->get( get_the_ID() );
	if ( ! $short_url->get_short_url() ) {
		$short_url = $shorten->shorten_url( get_the_ID(), get_permalink() );
	}

	$display = new \Shorter_URL\Display\Metabox_Display( $short_url );
	$display->display();
} );