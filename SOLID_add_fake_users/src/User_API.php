<?php
declare( strict_types=1 );

namespace SOLID_Fake_Users;

interface User_API {
	/**
	 * @return User_Collection
	 */
	public function get_users( int $count = 5 ): User_Collection;
}