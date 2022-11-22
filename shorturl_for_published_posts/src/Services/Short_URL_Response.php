<?php
declare( strict_types=1 );


namespace Shorter_URL\Services;

class Short_URL_Response {

	private string $short_url;

	public function __construct( string $short_url ) {
		$this->short_url = $short_url;
	}

	/**
	 * @return string
	 */
	public function get_short_url(): string {
		return $this->short_url;
	}

}