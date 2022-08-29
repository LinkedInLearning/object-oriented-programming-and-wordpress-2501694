<?php
declare( strict_types=1 );


namespace Anatomy_Of_A_Class;

final class Singleton {

	private static self $instance;

	private function __construct() {
	}

	public static function getInstance(): self {
		if ( ! isset( self::$instance ) ) {
			self::$instance = new self();
		}

		return self::$instance;
	}

}

$singleton = Singleton::getInstance();
$singleton2 = Singleton::getInstance();

var_dump( $singleton === $singleton2 ); // true