<?php
/**
 * Loop Name: Left Aligned Thumbnail
 */
?>			
<?php if ( have_posts() ) : ?>
<div class="puro-left-thumb-loop">
<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	if ( has_post_thumbnail() && siteorigin_setting( 'blog_archive_featured_image' ) ) {
		$classes = array(
			'featured-image',
		);
	}
	else {
		$classes = array();
	}
?>		
	<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
		<?php if ( ! is_single() && has_post_thumbnail() && siteorigin_setting('blog_archive_featured_image') ) : ?>
			<div class="entry-thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); ?>
				</a>	
			</div>	
		<?php elseif ( is_single() && has_post_thumbnail() && siteorigin_setting('blog_archive_featured_image') ) : ?>
			<div class="entry-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>				
		<?php endif; ?>
		<header class="entry-header">
			<?php if( is_single() ) : ?>	
				<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php else : ?>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>	
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php puro_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php if ( siteorigin_setting( 'blog_archive_content' ) == 'excerpt' ) the_excerpt(); else the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'puro' ) . '</span>',
					'after'  => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				) );
			?>
		</div><!-- .entry-content -->

		<div class="clear"></div>
		
		<footer class="entry-footer">
			<?php do_action('puro_entry_main_bottom') ?>
			<?php if ( siteorigin_setting( 'blog_edit_link' ) ) { edit_post_link( __( 'Edit', 'puro' ), '<span class="edit-link">', '</span>' ); } ?>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

	<?php endwhile; ?>

	</div><!-- .puro-left-thumb-loop -->

	<?php the_posts_pagination(); ?>

<?php else : ?>

	<?php get_template_part( 'content', 'none' ); ?>

<?php endif; ?>