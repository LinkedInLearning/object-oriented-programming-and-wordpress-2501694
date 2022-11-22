<?php
declare( strict_types=1 );


class Short_URL_Test extends \PHPUnit\Framework\TestCase {

	public function test_getters_and_setters() {
		$short_url = new Shorter_URL\Short_URL();

		$short_url
			->set_long_url( 'https://lil-wp.text/very-long-url')
			->set_post_id( 1 )
			->set_short_url( 'https://lil-wp.text/very-short-url' );

		$this->assertEquals( 'https://lil-wp.text/very-long-url', $short_url->get_long_url() );
		$this->assertEquals( 1, $short_url->get_post_id() );
		$this->assertEquals( 'https://lil-wp.text/very-short-url', $short_url->get_short_url() );
	}

}