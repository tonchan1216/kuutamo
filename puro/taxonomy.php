<?php
/**
 * The template for displaying tax archive pages.
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
aaaaaaaaaaaaaa
			<header class="page-header">
				<h1 class="entry-title"><?php echo single_term_title( '', false );?></h1> 
				<?php 
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
					if ( is_author() ) { 
						echo '<div class="taxonomy-description"><p>';
						the_author_meta( 'description' );
						echo '</p></div>';
					}
				?>
			</header><!-- .page-header -->
			<?php get_template_part( 'loops/loop', siteorigin_setting( 'blog_archive_layout' ) ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>