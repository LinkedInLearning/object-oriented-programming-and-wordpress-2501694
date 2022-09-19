<?php
declare( strict_types=1 );

namespace Tool_Library\Contracts;

interface Tool_Collection_Interface {

	public function add_tool( Tool_Interface $tool );

	public function remove_tool( Tool_Interface $tool );

}