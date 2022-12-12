<?php
declare( strict_types=1 );


class Mock_Short_URL_Service_Test extends \PHPUnit\Framework\TestCase {

	public function test_service() {
		$mock_short_url_service = new \Shorter_URL\Services\Mock_Short_URL_Service();

		$short_url_request = new \Shorter_URL\Services\Short_URL_Request( 'https://lil-wp.test/very-long-url');
		$short_url_response = $mock_short_url_service->shorten_url( $short_url_request );

		$this->assertEquals( strrev('https://lil-wp.test/very-long-url'), $short_url_response->get_short_url() );
	}

}