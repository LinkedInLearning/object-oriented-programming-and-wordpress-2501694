<?php

namespace Library_Post_Types\CPTs;

class Music implements Definition {
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