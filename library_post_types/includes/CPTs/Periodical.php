<?php

namespace Library_Post_Types\CPTs;

class Periodical implements Definition {
	public function name(): string {
		return 'Periodical';
	}
	public function slug(): string {
		return 'periodical';
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