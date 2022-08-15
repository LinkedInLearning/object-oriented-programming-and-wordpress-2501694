<?php

class CPT_Register {

	/**
	 * @var CPT_Definition[] $cpts
	 */
	private $cpts = [];

	public function add( CPT_Definition $cpt ) {
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

	private function prep_args( CPT_Definition $cpt ): array {
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