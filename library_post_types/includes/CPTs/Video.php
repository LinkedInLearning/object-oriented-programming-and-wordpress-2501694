<?php

namespace Library_Post_Types\CPTs;

class Video implements Definition {
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