<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="<?php echo get_template_directory_uri();?>/style.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'puro' ); ?></a>

	<header id="masthead" class="site-header<?php if ( siteorigin_setting( 'header_center_logo' ) ) { echo ' center-logo'; } if ( ! siteorigin_setting( 'header_display_tagline' ) ) { echo ' no-tagline'; } if ( siteorigin_setting( 'navigation_responsive_menu' ) ) { echo ' responsive-menu'; } ?>" role="banner">
		<div class="site-header-inner">
			<div class="site-branding">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php puro_display_logo(); ?></a>
				<?php if ( siteorigin_setting( 'header_display_tagline' ) ) { ?>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				<?php } ?>				
			</div><!-- .site-branding-->			
			<?php do_action( 'puro_before_nav' ); ?>
			<?php if ( siteorigin_setting( 'navigation_header_menu' ) ) { ?>
				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php do_action( 'puro_before_nav_menu' ) ?>
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
				</nav><!-- #site-navigation -->
			<?php } ?>
		</div><!-- .site-header-inner -->
	</header><!-- #masthead -->
	
	<div id="content" class="site-content">

	<?php puro_render_slider(); ?>