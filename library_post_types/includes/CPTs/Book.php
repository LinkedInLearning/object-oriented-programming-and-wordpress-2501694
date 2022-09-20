<?php

namespace Library_Post_Types\CPTs;

class Book extends Abstract_Simple_CPT {

	public function name(): string {
		$this->example;

		return 'Book';
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