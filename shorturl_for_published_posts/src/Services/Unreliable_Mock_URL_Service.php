<?php
declare( strict_types=1 );


namespace Shorter_URL\Services;

class Unreliable_Mock_URL_Service implements Short_URL_Call {

	public function shorten_url( Short_URL_Request $request ): Short_URL_Response {
		$short_url = strrev( $request->get_long_url() );

		if ( rand(0,1)) {
			return new Short_URL_Response( $short_url );
		}

		throw new \Exception( 'Unreliable Mock Service strikes again' );
	}

}