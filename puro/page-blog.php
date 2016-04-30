<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php $the_query = new WP_Query( array('post_type' => array('post','event') ) );?>
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();?>

			<header class="entry-header">	
				<h1 class="entry-title">
					<a href="<?php echo get_the_permalink();?>" title="<?php echo get_the_title();?>"><?php the_title(); ?></a>
				</h1>
				<?php if ( 'post' == get_post_type() ) : ?>
					<div class="entry-meta">
						<?php puro_posted_on(); ?>
					</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() && siteorigin_setting('blog_post_featured_image') ) : ?>
					<div class="entry-thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>			
				<?php endif; ?>		

<!-- 				<div class="entry-content">
					<?php the_content(); ?>
					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'puro' ) . '</span>',
						'after'  => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						) );
						?>
					</div>-->

					<footer class="entry-footer">
						<?php do_action('puro_entry_main_bottom') ?>
						<?php if ( siteorigin_setting( 'blog_edit_link' ) ) { edit_post_link( __( 'Edit', 'puro' ), '<span class="edit-link">', '</span>' ); } ?>
					</footer><!-- .entry-footer -->		
				</article><!-- #post-## -->

			<?php endwhile; // end of the loop. ?>
		<?php endif;?>
		<?php wp_reset_postdata();?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>