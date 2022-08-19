<?php
declare( strict_types=1 );

namespace Fake_Users;

class Random_User_API {

	const URL = 'https://randomuser.me/api/?inc=name,location,email,picture&results=5';

	public function get_users() {
		$response = wp_remote_get( self::URL );
		$body     = wp_remote_retrieve_body( $response );
		$data     = json_decode( $body );

		return $data->results;
	}

}