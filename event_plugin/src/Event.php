<?php
declare( strict_types=1 );

namespace Event_Plugin;


class Event {

	public function __construct() {
		add_action( 'init', [ $this, 'register_post_type' ] );
		add_action( 'init', [ $this, 'register_taxonomy' ] );
		add_filter( 'rest_request_before_callbacks', [ $this, 'rest_request_before_callbacks' ] );
	}

	public function register_post_type(): void {
		register_post_type(
			'event',
			[
				'labels'       => [
					'name' => 'Events',
				],
				'show_in_rest' => true,
				'public'       => true,
			]
		);
	}

	public function register_taxonomy(): void {
		register_taxonomy(
			'event_category',
			'event',
			[
				'labels'       => [
					'name' => 'Event Categories',
				],
				'show_in_rest' => true,
				'public'       => true,
			]
		);
	}

	public function rest_request_before_callbacks( \WP_REST_Request $request ): \WP_REST_Request {
		if (
			'GET' === $request->get_method()
			&& '/wp/v2/event' === $request->get_route()
		) {
			$request->set_param( 'context', 'view' );
		}

		return $request;
	}

}