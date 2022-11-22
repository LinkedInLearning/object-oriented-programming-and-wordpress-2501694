<?php
declare( strict_types=1 );

namespace Shorter_URL;

class Short_URL {

	private string $short_url = '';
	private string $long_url;
	private int $post_id;

	/**
	 * @return string
	 */
	public function get_short_url(): string {
		return $this->short_url;
	}

	/**
	 * @param string $short_url
	 *
	 * @return Short_URL
	 */
	public function set_short_url( string $short_url ): Short_URL {
		$this->short_url = $short_url;

		return $this;
	}

	/**
	 * @return string
	 */
	public function get_long_url(): string {
		return $this->long_url;
	}

	/**
	 * @param string $long_url
	 *
	 * @return Short_URL
	 */
	public function set_long_url( string $long_url ): Short_URL {
		$this->long_url = $long_url;

		return $this;
	}

	/**
	 * @return int
	 */
	public function get_post_id(): int {
		return $this->post_id;
	}

	/**
	 * @param int $post_id
	 *
	 * @return Short_URL
	 */
	public function set_post_id( int $post_id ): Short_URL {
		$this->post_id = $post_id;

		return $this;
	}



}