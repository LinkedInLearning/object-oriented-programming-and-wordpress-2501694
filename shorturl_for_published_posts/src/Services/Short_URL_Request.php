<?php
declare( strict_types=1 );

namespace Shorter_URL\Services;


class Short_URL_Request {

	private string $long_url;

	public function __construct( string $long_url ) {
		$this->long_url = $long_url;
	}

	/**
	 * @return string
	 */
	public function get_long_url(): string {
		return $this->long_url;
	}

	/**
	 * @param string $long_url
	 */
	public function set_long_url( string $long_url ): void {
		$this->long_url = $long_url;
	}

}