<?php
/**
 * Add theme support for Woocommerce.
 *
 * @package puro
 * @since puro 1.0.8.2
 * @license GPL 2.0
 */

// Add WooCommerce theme support.
add_theme_support( 'woocommerce' );

// Remove the default WooCommerce containers.
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper' );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end' );

if ( ! function_exists( 'puro_woocommerce_wrapper_before' ) ) :
/**
 * Markup to be outputted before WooCommerce content.
 */
function puro_woocommerce_wrapper_before() {
	echo '<div id="primary" class="content-area"><main id="main" class="site-main" role="main">';
}
add_action( 'woocommerce_before_main_content', 'puro_woocommerce_wrapper_before' );
endif;

if ( ! function_exists( 'puro_woocommerce_wrapper_after' ) ) :
/**
 * Markup to be outputted after WooCommerce content.
 */
function puro_woocommerce_wrapper_after() {
	echo '</main><!-- #main --></div><!-- #primary -->';
}
add_action( 'woocommerce_after_main_content', 'puro_woocommerce_wrapper_after' );
endif;

if ( ! function_exists( 'puro_woocommerce_enqueue_styles' ) ) :
/**
 * Enqueue WooCommerce styles.
 */
function puro_woocommerce_enqueue_styles() {
	wp_enqueue_style( 'puro-woocommerce-style', get_template_directory_uri() . '/woocommerce/woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'puro_woocommerce_enqueue_styles' );
endif;