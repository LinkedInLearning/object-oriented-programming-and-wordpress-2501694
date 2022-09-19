<?php
declare( strict_types=1 );

/**
 * Plugin Name: Tool lending library
 * Description: Example plugin to help us think about isolated logic
 * Version: 1.0.0
 * Requires PHP: 7.4
 * Author: Gary Kovar
 * License: GPLv2
 */

/**
 * Tools (post?)
 * - status (post_status)
 * - when due back (post_meta)
 * - who has it (!!post_meta)
 * - who is next in line (post_meta)
 * Borrower (wp_user?)
 * - what tool(s) they have (!!user_meta)
 * - what tool(s) they requested (user_meta)
 */