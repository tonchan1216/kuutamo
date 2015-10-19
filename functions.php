<?php
function chocolat_enqueue_styles() {
	$options = chocolat_get_option();
	if (is_front_page()) {
		wp_enqueue_style( 'chocolat_child_style', get_stylesheet_uri() );
		wp_enqueue_style( 'chocolat_style', get_template_directory_uri().'/style.css' );
	} else {
		wp_enqueue_style( 'chocolat_style', get_template_directory_uri().'/style.css' );
		wp_enqueue_style( 'chocolat_common', get_template_directory_uri().'/css/common.css' );

		if( mb_ereg( 'MSIE', getenv( 'HTTP_USER_AGENT' ) ) ) {
			wp_enqueue_style( 'chocolat_ie', get_template_directory_uri().'/css/ie.css' );
		}

		wp_enqueue_style( 'chocolat_quicksand', '//fonts.googleapis.com/css?family=Quicksand' );
		wp_enqueue_style( 'chocolat_font', get_template_directory_uri().'/css/font.css' );
		wp_enqueue_style( 'chocolat_boxer', get_template_directory_uri().'/plugin/boxer/jquery.fs.boxer.css' );

		if ( chocolat_is_mobile() ) {
			wp_enqueue_style( 'chocolat_smart', get_template_directory_uri().'/css/smart.css' );
		} else {
			wp_enqueue_style( 'chocolat_pc', get_template_directory_uri().'/css/pc.css' );
		}

		if ( strtoupper( get_locale() ) == 'JA' ) {
			wp_enqueue_style( 'chocolat_ja', get_template_directory_uri().'/css/ja.css' );
		}
	}
}

function chocolat_enqueue_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	if ( ! is_front_page()) {
		$options = chocolat_get_option();

		wp_enqueue_script( 'chocolat_watermark', get_template_directory_uri() . '/js/watermark.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'chocolat_navimenu', get_template_directory_uri().'/js/navimenu.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'chocolat_slidenav', get_template_directory_uri().'/js/slidenav.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'chocolat_rollover', get_template_directory_uri().'/js/rollover.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'chocolat_thumbnail_image', get_template_directory_uri().'/js/thumbnail-image.js', array( 'jquery' ), null, true );

		if ( ! empty( $options['show_lightbox'] ) || ! empty( $options['show_image_lightbox'] ) ) {
			wp_enqueue_script( 'chocolat_boxer_min', get_template_directory_uri().'/plugin/boxer/jquery.fs.boxer.min.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'chocolat_boxer', get_template_directory_uri().'/js/boxer.js', array( 'jquery', 'chocolat_boxer_min' ), null, true );
		}

		if ( ! empty( $options['show_slider'] ) && ! empty( $options['slider_image01_url'] ) && ! empty( $options['slider_image02_url'] ) ) {
			wp_enqueue_script( 'chocolat_flexslider_js', get_template_directory_uri().'/plugin/flexslider/jquery.flexslider-min.js', array( 'jquery' ), null, true );
			wp_enqueue_script( 'chocolat_slider_js', get_template_directory_uri().'/js/slider.js', array( 'jquery', 'chocolat_flexslider_js' ), null, true );
		}

		if ( ! chocolat_is_mobile() ) {
			wp_enqueue_script( 'chocolat_tooltips', get_template_directory_uri().'/js/tooltips.js', array( 'jquery', 'jquery-ui-tooltip' ), null, true );
			wp_enqueue_script( 'chocolat_linkpos', get_template_directory_uri().'/js/linkposition.js', array( 'jquery' ), null, true );

			if ( ! empty( $options['show_widget_masonry'] ) && ( chocolat_sidebar() || is_active_sidebar( 'footer_widget' ) ) ) {
				wp_enqueue_script( 'jquery-masonry' );
				wp_enqueue_script( 'chocolat_masonry_widget', get_template_directory_uri().'/js/masonry-widget.js', array( 'jquery', 'jquery-masonry' ), null, true );
			}
		}

		// script to be read after the masonry
		wp_enqueue_script( 'chocolat_footer_fixed', get_template_directory_uri().'/js/footer-fixed.js', array( 'jquery' ), null, true );
		wp_enqueue_script( 'chocolat_pagescroll', get_template_directory_uri().'/js/pagescroll.js', array( 'jquery' ), null, true );

		// Custom style
		if ( chocolat_featured_sneak_js() || chocolat_featured_sneak_home_js() ) {
			wp_enqueue_script( 'chocolat_css_js', get_template_directory_uri().'/js/custom-css.js', array( 'jquery' ), null, true );
			wp_localize_script( 'chocolat_css_js', 'chocolat_script', array(
			// Featured image
				'featured_sneak_js' => chocolat_featured_sneak_js(),
				'featured_size_w'   => $options['featured_size_w'],
				'featured_pos'      => $options['featured_position'],

			// Featured image of home page
				'featured_sneak_home_js' => chocolat_featured_sneak_home_js(),
				'featured_home_size_w'   => $options['featured_home_size_w'],
				'featured_home_pos'      => $options['featured_home_position'],
				) );
		}
	}
}