<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<?php get_template_part( 'loops/loop', siteorigin_setting( 'blog_archive_layout' ) ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>