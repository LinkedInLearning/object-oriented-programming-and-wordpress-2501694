<?php
declare( strict_types=1 );

namespace S_Fake_Users\CLI;

use S_Fake_Users\Random_User_API;

class User_Import {

	private Random_User_API $random_user_api;

	public function __construct() {
		$this->random_user_api = new Random_User_API();
	}

	public function save() {
		$users = $this->random_user_api->get_users();

		$progress = \WP_CLI\Utils\make_progress_bar( 'Creating users', count( $users ), $interval = 100 );
		foreach ( $users as $user ) {
			$progress->tick();
			wp_insert_user( $user );
		}
		$progress->finish();
	}

}