<?php
/**
 * Puro functions and definitions.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

define( 'SITEORIGIN_THEME_VERSION' , '1.1.3.1' );
define( 'SITEORIGIN_THEME_ENDPOINT' , 'http://updates.purothemes.com' );
define( 'SITEORIGIN_THEME_JS_PREFIX', defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min' );

if( file_exists( get_template_directory() . '/premium/functions.php' ) ){
	include get_template_directory() . '/premium/functions.php';
}
else {
	include get_template_directory() . '/upgrade/upgrade.php';
}

// Load the new settings framework.
include get_template_directory() . '/inc/customizer/customizer.php';
include get_template_directory() . '/inc/premium/premium.php';
include get_template_directory() . '/inc/settings/settings.php';
include get_template_directory() . '/inc/update/update.php';

// Load the theme specific files.
include get_template_directory() . '/inc/extras.php';
include get_template_directory() . '/inc/jetpack.php';
include get_template_directory() . '/inc/metaslider.php';
include get_template_directory() . '/inc/plugin-activation/plugin-activation.php';
include get_template_directory() . '/inc/settings.php';
include get_template_directory() . '/inc/template-tags.php';
include get_template_directory() . '/inc/formats.php';

// Include WooCommerce.
if ( class_exists( 'woocommerce' ) ) {
	require get_template_directory() . '/woocommerce/functions.php';
}

if ( ! function_exists( 'puro_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function puro_setup() {

	/**
	 * Set the content width based on the theme's design and page template in use.
	 */
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 771; /* pixels */
	}			 
	function puro_adjust_content_width() {	 
		global $content_width;

	    if ( is_page_template( 'page-templates/full-width-unconstrained-content.php' ) || is_page_template( 'page-templates/full-width-unconstrained-content-no-title.php' ) ) {
	        $content_width = 1080; /* pixels */
	    }
	}
	add_action( 'template_redirect', 'puro_adjust_content_width' );  	

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'puro', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );	

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'puro' ),
		'social' => __( 'Social Network Icon Menu', 'puro' )
	) );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/*
	 * Enable support for the custom logo.
	 */
	add_theme_support( 'custom-logo' );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
		'caption',
	) );

	/**
	 * Support the Page Builder plugin.
	 */
	add_theme_support( 'siteorigin-panels', array(
		'margin-sides' => 41,
		'margin-bottom' => 41,
		'home-page' => true,
		'home-page-default' => false,
		'home-template' => 'page-templates/full-width-unconstrained-content-no-title.php',
	) );

	define( 'SITEORIGIN_THEME_PREMIUM_URL', admin_url( 'themes.php?page=premium_upgrade' ) );

}
endif; // puro_setup
add_action( 'after_setup_theme', 'puro_setup' );

/**
 * Register widget area.
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function puro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'puro' ),
		'id'            => 'sidebar-1',
		'description'	=> esc_html__( 'Visible on posts and pages that use the default template.', 'puro' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'puro' ),
		'id'            => 'sidebar-2',
		'description'	=> esc_html__( 'A column will be automatically assigned to each widget inserted.', 'puro' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );	
}
add_action( 'widgets_init', 'puro_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function puro_scripts() {
	$in_footer = siteorigin_setting( 'footer_js_enqueue' );

	// Theme stylesheet.
	wp_enqueue_style( 'puro-style', get_stylesheet_uri(), array(), SITEORIGIN_THEME_VERSION );

	// Font Awesome.
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css', array(), '4.3.0' );

	// Theme JavaScript.
	wp_enqueue_script( 'puro-main' , get_template_directory_uri().'/js/jquery.theme-main' . SITEORIGIN_THEME_JS_PREFIX . '.js', array('jquery'), SITEORIGIN_THEME_VERSION, $in_footer );		

	// Skip link focus fix.
	wp_enqueue_script( 'puro-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), SITEORIGIN_THEME_VERSION, $in_footer );

	// Responsive menu.
	if ( siteorigin_setting( 'navigation_responsive_menu' ) && siteorigin_setting( 'layout_responsive' ) ) {
		wp_enqueue_script( 'puro-responsive-menu', get_template_directory_uri() . '/js/responsive-menu' . SITEORIGIN_THEME_JS_PREFIX . '.js', array(), SITEORIGIN_THEME_VERSION, true );
	}

	// Mobile Menu Collapse Localisation.
	wp_localize_script( 'puro-responsive-menu', 'puro_resp_menu_params', array( 'collapse' => siteorigin_setting( 'navigation_responsive_menu_collapse' ) ) );	

	// FitVids.js.
	if( siteorigin_setting( 'layout_fitvids' ) ) {
		wp_enqueue_script( 'jquery-fitvids' , get_template_directory_uri().'/js/jquery.fitvids' . SITEORIGIN_THEME_JS_PREFIX . '.js', array('jquery'), '1.1', $in_footer );
	}	

	// Comment reply.
	if( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	// Flexie.
	wp_enqueue_script( 'puro-flexie', get_template_directory_uri() . '/js/flexie.js', array(), '1.0.3' );
	wp_script_add_data( 'puro-flexie', 'conditional', 'lt IE 9' );

	// HTML5Shiv.
	wp_enqueue_script( 'puro-html5', get_template_directory_uri() . '/js/html5shiv-printshiv.js', array(), '3.7.3' );
	wp_script_add_data( 'puro-html5', 'conditional', 'lt IE 9' );

	// Selectivizr.
	wp_enqueue_script( 'puro-selectivizr', get_template_directory_uri() . '/js/selectivizr' . SITEORIGIN_THEME_JS_PREFIX . '.js', array(), '1.0.2' );
	wp_script_add_data( 'puro-selectivizr', 'conditional', '(gte IE 6)&(lte IE 8)' );	
}
add_action( 'wp_enqueue_scripts', 'puro_scripts' );

/**
 * Filter the comment form.
 * Remove comment form allowed tags if theme option is de-activated. 
 *
 * @param $defaults
 * @return mixed
 */
function puro_comment_form_defaults( $defaults ) {
	if ( siteorigin_setting( 'comments_comment_form_tags' ) ) {
		$defaults['comment_notes_after'] = '<p class="form-allowed-tags">' . sprintf( __( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'puro' ), ' <code>' . allowed_tags() . '</code>' ) . '</p>';	
	}
	
	return $defaults;
}
add_filter( 'comment_form_defaults', 'puro_comment_form_defaults', 5 );

/**
 * Filter the excerpt length.
 */
function puro_custom_excerpt_length( $length ) {
    return absint( siteorigin_setting( 'blog_excerpt_length' ) );
}
add_filter( 'excerpt_length', 'puro_custom_excerpt_length', 999 );

if ( ! function_exists( 'puro_excerpt_more' ) ) :
/**
 * Add a more link to the excerpt.
 */
function puro_excerpt_more( $more ) {
	if ( is_search() ) return;
	if ( siteorigin_setting( 'blog_archive_content' ) == 'excerpt' && siteorigin_setting( 'blog_excerpt_more' ) ) {
		$read_more_text = siteorigin_setting( 'blog_read_more' ) ? esc_html( siteorigin_setting( 'blog_read_more' ) ) : __( 'Continue reading', 'puro' );
		return '<p><a class="more-link" href="' . get_permalink() . '">' . $read_more_text . '</a></p>';
	}
}
endif;
add_filter( 'excerpt_more', 'puro_excerpt_more' );

/**
 * Count the footer widgets and add the count to the widget class.
 */
function puro_footer_widgets_params( $params ) {

    $sidebar_id = $params[0]['id'];

    if ( $sidebar_id == 'sidebar-2' ) {

        $total_widgets = wp_get_sidebars_widgets();
        $sidebar_widgets = count( $total_widgets[$sidebar_id] );

        $params[0]['before_widget'] = str_replace( 'class="', 'class="widget-count-' . floor($sidebar_widgets) . ' ', $params[0]['before_widget'] );
    }

    return $params;
}
add_filter( 'dynamic_sidebar_params','puro_footer_widgets_params' );

/**
* Handles the site title, copyright symbol and year string replace for the Footer Copyright theme option.
*/
function puro_footer_copyright_text_sub( $copyright ) {
	$site_title = '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo( 'name' ) . '</a>';
	return str_replace(
		array('{site-title}', '{copyright}', '{year}'),
		array($site_title, '&copy;', date('Y')),
		$copyright
	);
}
add_filter( 'puro_copyright_text', 'puro_footer_copyright_text_sub' );

/**
 * Render the home page slider.
 */
function puro_render_slider() {
	if( is_front_page() && $GLOBALS['wp_query']->get('paged') == 0 ) {

		if(substr(siteorigin_setting('home_slider'), 0, 5) == 'meta:' && class_exists('MetaSliderPlugin')){
			$slider_id = intval(substr(siteorigin_setting('home_slider'), 5));
			echo do_shortcode("[metaslider id='".$slider_id."']");
		}
	}
}

if ( ! function_exists( 'puro_read_more_link' ) ) :
/**
 * Filter the read more link.
 */
function puro_read_more_link() {
	$read_more_text = siteorigin_setting( 'blog_read_more' ) ? esc_html( siteorigin_setting( 'blog_read_more' ) ) : __( 'Continue reading', 'puro' );
	return '<a class="more-link"href="' . get_permalink() . '">' . $read_more_text . '</a>';
}
add_filter( 'the_content_more_link', 'puro_read_more_link' );
endif;

if ( ! function_exists( 'puro_responsive_menu' ) ) :
/**
 * Add the responsive menu button.
 */
function puro_responsive_menu() {
	if ( siteorigin_setting( 'navigation_responsive_menu' ) && siteorigin_setting( 'layout_responsive' ) ) {
		echo '<button class="menu-toggle"></button>';
	}
}
add_action( 'puro_before_nav_menu', 'puro_responsive_menu' );
endif;

/**
 * Filter the responsive menu collapse.
 */
function puro_filter_responsive_menu_collapse( $collpase ) {
	return siteorigin_setting( 'navigation_responsive_menu_collapse' );
}
add_filter( 'puro_responsive_menu_resolution', 'puro_filter_responsive_menu_collapse' );

if ( ! function_exists( 'puro_responsive_menu_css' ) ):
/**
 * Output the responsive menu collpase point.
 */
function puro_responsive_menu_css() {
	if ( ! siteorigin_setting( 'navigation_responsive_menu' ) || ! siteorigin_setting( 'layout_responsive' ) ) return;
	$mobile_resolution = apply_filters( 'puro_responsive_menu_resolution', 768 );
	?>
	<style type="text/css" id="puro-menu-css"> 
		@media (max-width: <?php echo intval( $mobile_resolution ) ?>px) {
			.site-branding { float: left }
			.rtl .site-branding { float: right; padding-right: 0 }
			.responsive-menu .main-navigation ul { display: none } 
			.responsive-menu .menu-toggle { display: block }
			.main-navigation { float: right }
		}			
	</style>
	<?php
}
add_action( 'wp_head', 'puro_responsive_menu_css' );
endif;

/**
 * Add the viewport meta tag.
 */
function puro_responsive_header() {
	if( siteorigin_setting( 'layout_responsive' ) ) {
		?><meta name="viewport" content="width=device-width, initial-scale=1" /><?php
	}
	else {
		?><meta name="viewport" content="width=1280" /><?php
	}
}
add_action( 'wp_head', 'puro_responsive_header' );

if ( ! function_exists( 'puro_is_woocommerce_active' ) ) :
/**
 * Check that WooCommerce is active.
 *
 * @return bool
 */
function puro_is_woocommerce_active() {
	return in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) );
}
endif;

