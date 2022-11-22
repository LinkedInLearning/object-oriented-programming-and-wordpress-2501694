<?php
declare( strict_types=1 );


class Short_URL_Response_Test extends \PHPUnit\Framework\TestCase {

	public function test_getters_and_setters() {
		$short_url_response = new Shorter_URL\Services\Short_URL_Response( 'https://lil-wp.text/very-short-url' );

		$this->assertEquals( 'https://lil-wp.text/very-short-url', $short_url_response->get_short_url() );
	}

}