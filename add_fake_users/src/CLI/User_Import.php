<?php
declare( strict_types=1 );

namespace Fake_Users\CLI;

use Fake_Users\Random_User_API;

class User_Import {

	private Random_User_API $random_user_api;

	public function __construct() {
		$this->random_user_api = new Random_User_API();
	}

	public function save() {
		var_dump( $this->random_user_api->get_users() );
	}

}