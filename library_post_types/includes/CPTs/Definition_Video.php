<?php

class Definition_Video implements CPT_Definition {
	public function name(): string {
		return 'Video';
	}

	public function slug(): string {
		return 'video';
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