<?php
declare( strict_types=1 );

namespace Tool_Library\Contracts;

interface Borrower_Interface {

	public function borrowed_tools(): Tool_Collection_Interface;

	public function requested_tools(): Tool_Collection_Interface;

}