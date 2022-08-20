<?php
declare( strict_types=1 );

namespace Anatomy_Of_A_Class;

/**
 * Class Example
 *
 * @package Anatomy_Of_A_Class
 */
class Example {

	/**
	 * @var string
	 *
	 * When used outside of a class: define( 'EXAMPLE_CONSTANT', 'example' );
	 */
	const EXAMPLE_CONSTANT = 'example';

	/**
	 * @var string Example property
	 */
	public string $example_property;

	/**
	 * @return void
	 * @var string Example property
	 *
	 */
	public function __construct() {
		$this->example_property = self::EXAMPLE_CONSTANT;
	}

	/**
	 * @param bool $display
	 *
	 * @return string|null
	 */
	public function do_a_thing( bool $display = false ): ?string {
		if ( $display ) {
			echo $this->example_property;

			return null;
		}

		return $this->example_property;
	}

}