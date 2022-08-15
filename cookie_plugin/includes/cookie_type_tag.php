<?php

if ( ! function_exists( 'cookie_plugin_register_type_tag' ) ) {
	function cookie_plugin_register_type_tag() {
		register_taxonomy(
			'cookie_type',
			'cookie',
			[
				'labels' => [
					'name' => __( 'Cookie Type', 'cookie-plugin')
				]
			]
		);
	}

	add_action( 'init', 'cookie_plugin_register_type_tag' );
}