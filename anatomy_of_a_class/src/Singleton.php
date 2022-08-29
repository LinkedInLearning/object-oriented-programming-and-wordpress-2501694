<?php
declare( strict_types=1 );


namespace Anatomy_Of_A_Class;

class Singleton {

	private static Singleton $instance;

	private function __construct() {
	}

	public static function getInstance(): self {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

}