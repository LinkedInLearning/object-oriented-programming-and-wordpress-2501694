<?php
declare( strict_types=1 );


namespace S_Fake_Users;

class User_Map {

	private string $email;
	private string $first;
	private string $last;
	private string $country;

	/**
	 * @param string $email
	 *
	 * @return User_Map
	 */
	public function set_email( string $email ): User_Map {
		$this->email = $email;

		return $this;
	}

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

	public function as_wp_user() : \WP_User {
		$wp_user = new \WP_User();

		$wp_user->user_email = $this->email;
		$wp_user->user_login = $this->first . ' ' . $this->last;
		$wp_user->user_pass = wp_generate_password();
		$wp_user->first_name = $this->first;
		$wp_user->last_name = $this->last;
		$wp_user->locale = $this->country;

		return $wp_user;
	}

}