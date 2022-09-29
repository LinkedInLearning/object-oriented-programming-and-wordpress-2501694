<?php
declare( strict_types=1 );


namespace SOLID_Fake_Users_MBL_AF;

class Imported_User {

	public function is_imported( \WP_User $user ): bool {
		if ( ! is_user_logged_in() ) {
			throw new \Exception( 'User must be logged in to check if user is imported' );
		}

		return (bool) get_user_meta( $user->ID, 'random_user', true );
	}

}