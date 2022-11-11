<?php
declare( strict_types=1 );

namespace API_Thing;

class Options {

	private string $option_name;

	private array $options = [];

	public function __construct( string $option_name ) {
		$this->option_name = $option_name;
		$this->options = get_option( $this->option_name );
	}

	public function save_options() {
		update_option( $this->option_name, $this->options );
	}

	public function set_value( string $key, $value ) {
		$this->options[ $key ] = $value;
	}

	public function get_value( string $key ) {
		if ( array_key_exists( $key, $this->options ) ) {
			return $this->options[ $key ];
		}

		return '';
	}
}