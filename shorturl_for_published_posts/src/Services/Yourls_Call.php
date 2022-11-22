<?php
declare( strict_types=1 );


namespace Shorter_URL\Services;

class Yourls_Call implements Short_URL_Call {

	public function shorten_url( Short_URL_Request $request ): Short_URL_Response {
		return new Short_URL_Response(
			$this->post_to_yourls( $request->get_long_url() )
		);
	}

	private function post_to_yourls( string $long_url ): string {
		$response = wp_remote_post(
			YOURLS_ENDPOINT,
			[
				'body' => [
					'action'   => 'shorturl',
					'url'      => $long_url,
					'format'   => 'json',
					'signature' => YOURLS_SECRET,
				],
			]
		);

		if ( is_wp_error( $response ) ) {
			throw new \Exception( 'Yourls_Call failed' );
		}

		$response_body = json_decode( $response['body'] );

		if ( ! property_exists( $response_body, 'shorturl' ) ) {
			throw new \Exception( 'Yourls_Call failed' );
		}

		return $response_body->shorturl;
	}

}