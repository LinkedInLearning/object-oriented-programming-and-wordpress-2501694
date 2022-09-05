<?php
declare( strict_types=1 );


namespace Stats\Endpoints;

use Stats\Stats\Users_By_Name;

class User_Count extends Abstract_Endpoint {

	private Users_By_Name $users_by_name;
	private string        $name;

	public function __construct(
		Users_By_Name $users_by_name,
		string $name
	) {
		$this->users_by_name = $users_by_name;
		$this->name          = $name;
	}

	public function route(): string {
		return 'users-named-' . strtolower( $this->name );
	}

	public function callback( \WP_REST_Request $request ): \WP_REST_Response {
		$stat = $this->users_by_name->get_users( $this->name );

		return new \WP_REST_Response( [
			$stat->get_stat_key() => $stat->get_count(),
		] );
	}
}