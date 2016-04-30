<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */
?>
	
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
<?php endif; ?>