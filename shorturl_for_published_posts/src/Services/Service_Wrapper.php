<?php
declare( strict_types=1 );


namespace Shorter_URL\Services;

class Service_Wrapper implements Short_URL_Call {

	private Short_URL_Call $service;

	public function __construct( Short_URL_Call $service ) {
		$this->service = $service;
	}

	public function shorten_url( Short_URL_Request $request ): Short_URL_Response {
		try {
			return $this->service->shorten_url( $request );
		} catch ( \Exception $e ) {
			return new Short_URL_Response( '' );
		}
	}
}