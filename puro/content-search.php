<?php
/**
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
	<header class="entry-header">	
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php puro_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	
	<footer class="entry-footer">
		<?php if ( siteorigin_setting( 'blog_edit_link' ) ) { edit_post_link( __( 'Edit', 'puro' ), '<span class="edit-link">', '</span>' ); } ?>
	</footer><!-- .entry-footer -->	
</article><!-- #post-## -->