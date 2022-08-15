<?php

interface CPT_Definition {

	/**
	 * CPT Name.
	 * @return string
	 */
	public function name(): string;

	/**
	 * CPT Slug.
	 * @return string
	 */
	public function slug(): string;

	/**
	 * Optional: register_post_type $args
	 * @see https://developer.wordpress.org/reference/functions/register_post_type/
	 * @return array
	 */
	public function args(): array;

	/**
	 * Optional: register_post_type $args['labels']. If empty, will use name().
	 * @return array
	 */
	public function labels(): array;
}