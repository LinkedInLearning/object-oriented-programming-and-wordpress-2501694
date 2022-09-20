<?php
declare( strict_types=1 );


namespace Library_Post_Types\CPTs;

abstract class Abstract_Simple_CPT implements Definition {

	protected string $example = '';

	public function slug(): string {
		return strtolower( $this->name() );
	}

//	abstract public function some_required_method(): string;

}