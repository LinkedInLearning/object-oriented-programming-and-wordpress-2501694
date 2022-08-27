<?php

namespace Library_Post_Types\CPTs;

class Hardware implements Definition {

	public function name(): string {
		return 'Hardware';
	}

	public function slug(): string {
		return 'hardware';
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