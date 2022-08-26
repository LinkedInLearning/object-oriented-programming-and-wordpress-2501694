<?php
declare( strict_types=1 );


namespace Visibility;

class Method_Visibility {

	private string $display_string;

	public function __construct( string $display_string ) {
		$this->display_string = $display_string;
	}

	public function display_string(): void {
		echo $this->display_string;
	}

	private function display_string_fail(): void {
		echo $this->display_string;
	}

}