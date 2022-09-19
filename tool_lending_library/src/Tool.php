<?php
declare( strict_types=1 );

namespace Tool_Library;

use Tool_Library\Contracts\Tool_Interface;

class Tool implements Tool_Interface {

	private string $name;

	public function set_name( $name ) : Tool {
		$this->name = $name;

		return $this;
	}

	public function name(): string {
		return $this->name;
	}
}