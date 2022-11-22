<?php

namespace Library_Post_Types\CPTs;

class Book implements Definition {

	public function name(): string {
		return 'Book';
	}

	public function slug(): string {
		return 'book';
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