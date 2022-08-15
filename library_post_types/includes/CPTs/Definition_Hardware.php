<?php

class Definition_Hardware implements CPT_Definition {

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