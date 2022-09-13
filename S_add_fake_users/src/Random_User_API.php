<?php
declare( strict_types=1 );

namespace S_Fake_Users;

class Random_User_API {

	/**
	 * Reasons to change.
	 * - add_user method
	 */

	private string $url;
	private array  $inc;
	private int    $results;

	public function __construct(
		int $results = 5,
		array $inc = [
			'name',
			'location',
			'email',
			'picture',
		],
		string $url = 'https://randomuser.me/api/'
	) {
		$this->results = $results;
		$this->inc     = $inc;
		$this->url     = $url;
	}

	/**
	 * @return \WP_User[]
	 */
	public function get_users(): array {
		$response = wp_remote_get( $this->build_url() );
		$body     = wp_remote_retrieve_body( $response );
		$data     = json_decode( $body );
		$users    = array_map( [ $this, 'map_user' ], $data->results );

		return $users;
	}

	private function build_url() {
		return $this->url . '?inc=' . implode( ',', $this->inc ) . '&results=' . $this->results;
	}

	private function map_user( \stdClass $user ): \WP_User {
		$user_map = new User_Map();

		$user_map->set_email( $user->email )
			->set_first( $user->name->first )
			->set_last( $user->name->last )
			->set_country( $user->location->country );

		return $user_map->as_wp_user();
	}

}