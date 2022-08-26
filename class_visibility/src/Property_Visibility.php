<?php
declare( strict_types=1 );

namespace Visibility;

class Property_Visibility {

	private string $private_property;

	public string $public_property;

	public function __construct( string $private_property, string $public_property ) {
		$this->private_property = $private_property;
		$this->public_property  = $public_property;
	}

}