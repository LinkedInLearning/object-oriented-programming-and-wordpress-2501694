<?php
declare( strict_types=1 );


namespace SOLID_Fake_Users_MBL_AF;

class User_Map {

	private string $email;
	private string $first;
	private string $last;
	private string $country;

	/**
	 * @param string $first
	 *
	 * @return User_Map
	 */
	public function set_first( string $first ): User_Map {
		$this->first = $first;

		return $this;
	}

	/**
	 * @param string $last
	 *
	 * @return User_Map
	 */
	public function set_last( string $last ): User_Map {
		$this->last = $last;

		return $this;
	}

	/**
	 * @param string $country
	 *
	 * @return User_Map
	 */
	public function set_country( string $country ): User_Map {
		$this->country = $country;

		return $this;
	}

	/**
	 * @param string $email
	 *
	 * @return User_Map
	 */
	public function set_email( string $email ): User_Map {
		$this->email = $email;

		return $this;
	}

	public function as_wp_user(): \WP_User {
		$random_user = new Random_User();
		$random_user
			->set_user_email( $this->email )
			->set_user_login( $this->first . ' ' . $this->last )
			->set_first_name( $this->first )
			->set_last_name( $this->last )
			->generate_password()
			->set_locale( $this->country )
			->set_meta_input( 'random_user', true )
			->set_meta_input( 'created_by', defined( 'WP_CLI' ) && WP_CLI ? 'WP_CLI' : 'UI' );

		return $random_user;
	}

}