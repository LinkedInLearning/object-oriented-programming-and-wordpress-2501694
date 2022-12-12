<?php
declare( strict_types=1 );


namespace Shorter_URL\Services;

interface Short_URL_Call {

	public function shorten_url( Short_URL_Request $request ) : Short_URL_Response;

}