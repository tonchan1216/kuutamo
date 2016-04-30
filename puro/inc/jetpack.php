<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function puro_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'puro_jetpack_setup' );