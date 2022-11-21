<?php
declare( strict_types=1 );

namespace SOLI_Fake_Users;

interface User_API {
	/**
	 * @return User_Collection
	 */
	public function get_users(): User_Collection;
}