<?php

if ( ! function_exists( 'cookie_plugin_register_type_tax' ) ) {
	function cookie_plugin_register_type_tag() {
		register_taxonomy(
			'cookie_type',
			COOKIE_PLUGIN_CPT_SLUG,
			[
				'labels' => [
					'name' => __( 'Biscuit Type', 'cookie-plugin')
				]
			]
		);
	}

	add_action( 'init', 'cookie_plugin_register_type_tag' );
}