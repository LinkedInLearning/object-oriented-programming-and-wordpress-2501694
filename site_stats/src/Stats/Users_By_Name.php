<?php
declare( strict_types=1 );

namespace Stats\Stats;

class Users_By_Name {

	public function get_users( string $name ): Stat {
		$users = get_users( [
			'search' => $name,
		] );

		$stat = new Stat();

		return $stat
			->set_name( 'Count of ' . $name . ' users' )
			->set_stat_key( 'users-named-' . strtolower( $name ) )
			->set_count( count( $users ) );
	}

}