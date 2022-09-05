<?php
declare( strict_types=1 );

namespace Stats\Endpoints;

abstract class Abstract_Endpoint {

	public function register() {
		register_rest_route(
			$this->namespace(),
			$this->route(),
			$this->args(),
		);
	}

	protected function args(): array {
		return [
			'methods'  => 'GET',
			'callback' => [ $this, 'callback' ],
		];
	}

	protected function namespace(): string {
		return 'stats/v1';
	}

	abstract public function route(): string;

	abstract public function callback( \WP_REST_Request $request ): \WP_REST_Response;

}