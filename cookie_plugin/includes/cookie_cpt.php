<?php

if ( ! function_exists( 'cookie_plugin_register_cpt' ) ) {
	function cookie_plugin_register_cpt() {
		register_post_type(
			COOKIE_PLUGIN_CPT_SLUG,
			[
				'public' => true,
				'labels' => [
					'name' => __( 'Biscuits', 'cookie-plugin' ),
				],
			]
		);
	}

	add_action( 'init', 'cookie_plugin_register_cpt' );
}
