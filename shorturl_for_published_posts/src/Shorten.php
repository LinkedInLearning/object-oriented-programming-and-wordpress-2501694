<?php
declare( strict_types=1 );


namespace Shorter_URL;

use Shorter_URL\Services\Short_URL_Call;

class Shorten {

	private Short_URL_Call $short_url_call;

	public function __construct( Short_URL_Call $short_url_call ) {
		$this->short_url_call = $short_url_call;
	}

	public function shorten_url( int $post_id, string $long_url ): Short_URL {
		$request  = new Services\Short_URL_Request( $long_url );
		$response = $this->short_url_call->shorten_url( $request );

		$short_url = new Short_URL();
		$short_url->set_post_id( $post_id )
				  ->set_long_url( $long_url )
				  ->set_short_url( $response->get_short_url() );

		return $short_url;
	}

}