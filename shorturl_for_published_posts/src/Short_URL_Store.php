<?php
declare( strict_types=1 );


namespace Shorter_URL;

class Short_URL_Store {

	const META_KEY = 'short_url';

	public function save( int $post_id, Short_URL $short_url ) {
		update_post_meta( $post_id, self::META_KEY, $short_url );
	}

	public function get( int $post_id ): ?Short_URL {
		$short_url = get_post_meta( $post_id, self::META_KEY, true );

		if ( $short_url instanceof Short_URL) {
			return $short_url;
		}

		$short_url = new Short_URL();
		$short_url->set_post_id( $post_id );
		$short_url->set_long_url( get_permalink( $post_id ) );

		return $short_url;
	}

}