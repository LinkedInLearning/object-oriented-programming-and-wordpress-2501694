<?php

if ( ! function_exists( 'cookie_plugin_register_cpt' ) ) {
	function cookie_plugin_register_cpt() {
		register_post_type(
			'cookie',
			[
				'public' => true,
				'labels' => [
					'name' => __( 'Cookies', 'cookie-plugin' ),
				],
			]
		);
	}

	add_action( 'init', 'cookie_plugin_register_cpt' );
}
