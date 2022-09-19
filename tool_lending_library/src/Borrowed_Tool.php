<?php
declare( strict_types=1 );


namespace Tool_Library;

use Tool_Library\Contracts\Borrowed_Tool_Interface;
use Tool_Library\Contracts\Borrower_Interface;
use Tool_Library\Contracts\Tool_Interface;

class Borrowed_Tool implements Tool_Interface , Borrowed_Tool_Interface {

	public function borrower(): Borrower_Interface {
		// TODO: Implement borrower() method.
	}

	public function due_date() {
		// TODO: Implement due_date() method.
	}

	public function name(): string {
		// TODO: Implement name() method.
	}
}