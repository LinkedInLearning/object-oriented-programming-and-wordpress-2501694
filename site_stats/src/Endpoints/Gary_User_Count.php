<?php
declare( strict_types=1 );


namespace Stats\Endpoints;

class Gary_User_Count extends Abstract_Endpoint {

	public function route(): string {
		return 'users-named-gary';
	}

	public function callback( \WP_REST_Request $request ): \WP_REST_Response {
		$users = get_users( [
			'search' => 'Gary',
		] );

		return new \WP_REST_Response( [
			'users-named-gary' => count( $users ),
		] );
	}
}