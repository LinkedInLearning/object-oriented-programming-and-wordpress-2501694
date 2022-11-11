<?php
declare( strict_types=1 );

namespace API_Thing;

class Opinionated_Options {

	const KEY        = 'api_thing_options';
	const VALID_KEYS = [
		'url',
		'username',
		'password',
	];

	private array $options_array = [];

	public function __construct() {
		$this->options_array = get_option( self::KEY, [] );
	}

	public function save_options() {
		update_option( self::KEY, $this->options_array );
	}

	public function set_value( string $key, string $value ) {
		if ( ! $this->validate_key( $key ) ) {
			return;
		}

		$this->options_array[ $key ] = $value;
		$this->save_options();
	}

	public function get_value( string $key ) {
		if ( array_key_exists( $key, $this->options_array ) ) {
			return $this->options_array[ $key ];
		}

		return '';
	}

	private function validate_key( string $key ) {
		return in_array( $key, self::VALID_KEYS, true );
	}

}