<?php
declare( strict_types=1 );

namespace SOLI_Fake_Users;

class Random_User_API implements User_API {
	private string $url;
	private array  $inc;
	private int    $results;

	public function __construct(
		array $inc = [
			'name',
			'location',
			'email',
			'picture',
		],
		string $url = 'https://randomuser.me/api/'
	) {
		$this->inc = $inc;
		$this->url = $url;
	}

	/**
	 * @return User_Collection
	 */
	public function get_users( int $count = 5 ): User_Collection {
		$response      = wp_remote_get( $this->build_url( $count ) );
		$body          = wp_remote_retrieve_body( $response );
		$data          = json_decode( $body );
		$users         = array_map( [ $this, 'map_user' ], $data->results );

		$user_collection = new User_Collection();
		foreach ( $users as $user ) {
			$user_collection->add( $user );
		}

		return $user_collection;
	}

	private function build_url( int $results ) {
		return $this->url . '?inc=' . implode( ',', $this->inc ) . '&results=' . $results;
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