<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function puro_body_classes( $classes ) {

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class which will be removed if a touch device is in use.
	$classes[] = 'no-touch';

	// Add a class if the sidebar isn't active.
	if ( ! is_active_sidebar( 'sidebar-1') ) {
		$classes[] = 'one-column';
	}	
	
	// Add a class if responsive layout is enabled.
	if ( siteorigin_setting( 'layout_responsive' ) ) {
		$classes[] = 'resp';
	}
	
	// Add a class if the sidebar is active.
	if ( is_active_sidebar( 'sidebar-1') ) {
		 $classes[] = 'sidebar';
	}
	
	return $classes;
}
add_filter( 'body_class', 'puro_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function puro_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'puro_pingback_header' );