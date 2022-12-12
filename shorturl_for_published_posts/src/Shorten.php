<?php
declare( strict_types=1 );


namespace Shorter_URL;

use Shorter_URL\Services\Short_URL_Call;

class Shorten {

	private Short_URL_Call $short_URL_call;

	public function __construct( Short_URL_Call $short_URL_call ) {
		$this->short_URL_call = $short_URL_call;
	}

	public function shorten_url( int $post_id ) {
		$short_url_request = new \Shorter_URL\Services\Short_URL_Request( get_permalink( $post_id ) );

		$short_url_response = $this->short_URL_call->shorten_url( $short_url_request );

		$short_url = new \Shorter_URL\Short_URL();
		$short_url
			->set_post_id( $post_id )
			->set_long_url( $short_url_request->get_long_url() )
			->set_short_url( $short_url_response->get_short_url() );

		return $short_url;
	}

}