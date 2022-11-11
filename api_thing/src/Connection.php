<?php
declare( strict_types=1 );

namespace API_Thing;


class Connection {

	private string $url;

	private string $username;

	private string $password;

	public function __construct( string $url, string $username, string $password ) {
		$this->url      = $url;
		$this->username = $username;
		$this->password = $password;
	}
}