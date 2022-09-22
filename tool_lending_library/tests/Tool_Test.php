<?php
declare( strict_types=1 );


class Tool_Test extends \PHPUnit\Framework\TestCase {

	public function test_tool_set_name() {
		$tool = new \Tool_Library\Tool();

		$return = $tool->set_name( 'test' );
		$this->assertInstanceOf( \Tool_Library\Tool::class, $return );
	}

}