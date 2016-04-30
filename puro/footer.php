<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<?php if ( dynamic_sidebar('sidebar-2') ) : else : endif; ?>
		
		<div class="clear"></div>
		
		<?php wp_nav_menu( array( 'theme_location' => 'social', 'container_class' => 'social-links-menu', 'depth' => 1, 'link_before' => '<span class="screen-reader-text">', 'link_after' => '</span>', 'fallback_cb' => '' ) ); ?>

		<?php $copyright_text = apply_filters( 'puro_copyright_text', siteorigin_setting( 'footer_copyright_text' ) ); ?>
		<div class="site-info">
			<?php 
				echo wp_kses_post( $copyright_text ); 
			?> 
			<?php
				if ( siteorigin_setting( 'footer_copyright_text' ) && siteorigin_setting( 'footer_attribution' ) ) { 
					echo ' - ';
				}
				if ( siteorigin_setting( 'footer_attribution' ) ) {
					printf( __( '<a href="%s" title="A Free WordPress Theme by Puro">Theme by Puro</a>', 'puro' ), 'http://purothemes.com' );
				}
			?>
		</div><!-- .site-info -->
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>