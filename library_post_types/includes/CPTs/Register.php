<?php

namespace Library_Post_Types\CPTs;

class Register {

	/**
	 * @var Definition[] $cpts
	 */
	private $cpts = [];

	public function add( Definition $cpt ) {
		$this->cpts[] = $cpt;

		return $this;
	}

	public function register() {
		foreach ( $this->cpts as $cpt ) {
			register_post_type(
				$cpt->slug(),
				$this->prep_args( $cpt )
			);
		}
	}

	private function prep_args( Definition $cpt ): array {
		$args = $cpt->args();

		if ( ! empty( $cpt->labels() ) ) {
			$args['labels'] = $cpt->labels();

			return $args;
		}

		$args['labels'] = [
			'name' => $cpt->name(),
		];

		return $args;
	}

}