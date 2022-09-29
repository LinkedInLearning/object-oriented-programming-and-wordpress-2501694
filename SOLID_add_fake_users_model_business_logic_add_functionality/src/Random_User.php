<?php
declare( strict_types=1 );


namespace SOLID_Fake_Users_MBL_AF;

class Random_User extends \WP_User {

	private array $random_meta = [];

	public function set_meta_input( $key, $value ): Random_User {
		$this->random_meta[ $key ] = $value;

		return $this;
	}

	public function to_array() {
		$array_user               = parent::to_array();
		$array_user['meta_input'] = array_merge( $this->random_meta, $array_user['meta_input'] ?? [] );

		return $array_user;
	}

	public function set_user_email( string $email ): Random_User {
		$this->user_email = $email;

		return $this;
	}

	public function set_user_login( string $login ): Random_User {
		$this->user_login = $login;

		return $this;
	}

	public function set_first_name( string $first_name ): Random_User {
		$this->first_name = $first_name;

		return $this;
	}

	public function set_last_name( string $last_name ): Random_User {
		$this->last_name = $last_name;

		return $this;
	}

	public function set_locale( string $locale ): Random_User {
		$this->locale = $locale;

		return $this;
	}

	public function generate_password(): Random_User {
		$this->user_pass = wp_generate_password();

		return $this;
	}

}