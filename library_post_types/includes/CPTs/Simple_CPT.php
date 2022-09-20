<?php
declare( strict_types=1 );


namespace Library_Post_Types\CPTs;

class Simple_CPT implements Definition {

	private string $name;

	public function __construct( string $name ) {
		$this->name = $name;
	}

	public function name(): string {
		return $this->name;
	}

	public function slug(): string {
		return strtolower( $this->name() );
	}

	public function args(): array {
		return [
			'public' => true,
		];
	}

	public function labels(): array {
		return [];
	}
}