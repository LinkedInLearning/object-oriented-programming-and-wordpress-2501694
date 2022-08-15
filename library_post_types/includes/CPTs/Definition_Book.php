<?php

error_log( 'we have required the Definition_Book.php file' );

class Definition_Book implements CPT_Definition {

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