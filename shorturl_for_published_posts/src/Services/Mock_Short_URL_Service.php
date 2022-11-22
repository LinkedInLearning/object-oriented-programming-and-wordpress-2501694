<?php
declare( strict_types=1 );


namespace Shorter_URL\Services;

class Mock_Short_URL_Service implements Short_URL_Call {

	public function shorten_url( Short_URL_Request $request ): Short_URL_Response {
		$short_url = strrev( $request->get_long_url() );

		return new Short_URL_Response( $short_url );
	}
}