<?php
declare( strict_types=1 );


namespace Event_Plugin;

class Rest_Request_Filter {

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