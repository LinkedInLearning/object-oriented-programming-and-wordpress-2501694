<?php
declare( strict_types=1 );


namespace Event_Plugin;

class Hooks_For_Objects {

	private static $class_instances = [];

	public static function add_filter( $hook, $class, $method, $priority = 10, $accepted_args = 1 ) {
		add_filter(
			$hook,
			[ self::get_class_instance( $class ), $method ],
			$priority,
			$accepted_args
		);
	}

	public static function remove_filter( $hook, $class, $method, $priority = 10 ) {
		remove_filter(
			$hook,
			[ self::get_class_instance( $class ), $method ],
			$priority
		);
	}

	private static function get_class_instance( $class ): object {
		if ( array_key_exists( $class, self::$class_instances ) ) {
			return self::$class_instances[ $class ];
		}

		self::$class_instances[ $class ] = new $class();

		return self::$class_instances[ $class ];
	}

}