<?php

class Definition_Periodical implements CPT_Definition {
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