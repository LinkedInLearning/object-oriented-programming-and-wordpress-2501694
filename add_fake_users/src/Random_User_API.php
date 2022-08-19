<?php
declare( strict_types=1 );

namespace Fake_Users;

class Random_User_API {

	const URL = 'https://randomuser.me/api/?inc=name,location,email,picture&results=5';

	/**
	 * @return \WP_User[]
	 */
	public function get_users(): array {
		$response = wp_remote_get( self::URL );
		$body     = wp_remote_retrieve_body( $response );
		$data     = json_decode( $body );
		$users    = array_map( [ $this, 'map_user' ], $data->results );

		return $users;
	}

	private function map_user( \stdClass $user ) : \WP_User {
		$wp_user = new \WP_User();

		$wp_user->user_email = $user->email;
		$wp_user->user_login = $user->name->first . ' ' . $user->name->last;
		$wp_user->user_pass  = wp_generate_password( 12, false );
		$wp_user->first_name = $user->name->first;
		$wp_user->last_name  = $user->name->last;

		return $wp_user;
	}

}