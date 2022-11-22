<?php
declare( strict_types=1 );


class Short_URL_Request_Test extends \PHPUnit\Framework\TestCase {

	public function test_getters_and_setters() {
		$short_url_request = new Shorter_URL\Services\Short_URL_Request( 'https://lil-wp.text/very-long-url' );

		$this->assertEquals( 'https://lil-wp.text/very-long-url', $short_url_request->get_long_url() );
	}

}