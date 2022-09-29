<?php
declare( strict_types=1 );

namespace SOLID_Fake_Users_MBL_AF\Cron;

use SOLID_Fake_Users_MBL_AF\User_API;

class User_Import {

	private User_API $user_api;

	public function __construct( User_API $user_api ) {
		$this->user_api = $user_api;
	}

	public function import(): void {
		foreach ( $this->user_api->get_users() as $user ) {
			wp_insert_user( $user );
		}
	}

}