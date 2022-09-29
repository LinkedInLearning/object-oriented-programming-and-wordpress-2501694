<?php
declare( strict_types=1 );

namespace SOLID_Fake_Users_MBL\CLI;

use SOLID_Fake_Users_MBL\Random_User_API;
use SOLID_Fake_Users_MBL\User_API;

class User_Import {

	private User_API $user_api;

	public function __construct( User_API $user_api ) {
		$this->user_api = $user_api;
	}

	public function save( $args, $assoc_args ) {
		$count = array_key_exists( 'count', $assoc_args )
			? (int) $assoc_args['count']
			: 5;

		$users = $this->user_api->get_users( $count );

		$progress = \WP_CLI\Utils\make_progress_bar( 'Creating users', count( $users ), $interval = 100 );
		foreach ( $users as $user ) {
			$progress->tick();
			wp_insert_user( $user );
		}
		$progress->finish();
	}

}