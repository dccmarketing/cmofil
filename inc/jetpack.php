<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Children's Museum of Illinois
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 *
 * @uses 	add_theme_support()
 */
function cmofil_jetpack_setup() {

	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );

} // cmofil_jetpack_setup()
add_action( 'after_setup_theme', 'cmofil_jetpack_setup' );
