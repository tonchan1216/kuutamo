<?php
/**
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() && siteorigin_setting('blog_post_featured_image') ) : ?>
		<div class="entry-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>			
	<?php endif; ?>		
	<header class="entry-header">	
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php puro_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'puro' ) . '</span>',
				'after'  => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-footer">
		<?php do_action('puro_entry_main_bottom') ?>
		<?php if ( siteorigin_setting( 'blog_edit_link' ) ) { edit_post_link( __( 'Edit', 'puro' ), '<span class="edit-link">', '</span>' ); } ?>
	</footer><!-- .entry-footer -->		
</article><!-- #post-## -->