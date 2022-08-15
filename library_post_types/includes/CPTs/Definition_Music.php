<?php

class Definition_Music implements CPT_Definition {
	public function name(): string {
		return 'Music';
	}
	public function slug(): string {
		return 'music';
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