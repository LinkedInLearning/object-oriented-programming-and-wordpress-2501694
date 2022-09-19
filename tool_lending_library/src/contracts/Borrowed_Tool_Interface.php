<?php
declare( strict_types=1 );

namespace Tool_Library\Contracts;

interface Borrowed_Tool_Interface {

	public function borrower(): Borrower_Interface;

	public function due_date();

}