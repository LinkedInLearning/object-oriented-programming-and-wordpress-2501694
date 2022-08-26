<?php
declare( strict_types=1 );


namespace Visibility;

class Property_That_Can_Be_Changed_Externally {

	public string $post_title;

	public function get_post_title(): string {
		return $this->post_title;
	}

}