<?php
declare( strict_types=1 );


namespace Tool_Library;

use Tool_Library\Contracts\Tool_Interface;

class WP_Post_Tool {

	private \WP_Post $post;

	public function __construct( \WP_Post $post ) {
		$this->post = $post;
	}

	public function get_tool() : Tool_Interface {
		if ( 'borrowed' === $this->post->post_status ) {
			$borrowed_toole = new Borrowed_Tool();
			// do stuff and return.
		}

		$tool = new Tool();
		// do stuff and return.
	}
}