<?php
/**
 * Custom template tags for this theme.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

if ( ! function_exists( 'puro_author_box' ) ) :
/**
 * Displays the author author biographical info on single posts.
 */
function puro_author_box() { ?>
	<div class="author-box">
		<div class="author-avatar">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
			</a>
		</div><!-- .author-avatar -->
		<div class="author-description">
			<h3><?php echo get_the_author(); ?></h3>
			<span class="author-posts">
				<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
					<?php esc_html_e( 'View posts by ', 'puro' );
					echo get_the_author(); ?>
				</a>
			</span>	
			<div><?php echo wp_kses( get_the_author_meta( 'description' ), null ); ?></div>
		</div><!-- .author-description -->
	</div>
<?php }
endif;

if ( ! function_exists( 'puro_pagination' ) ) :
/**
 * Display post pagination where applicable.
 */
function puro_pagination() {
	// Don't print empty markup if there's only one page.
	if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	}
	?>
		<nav class="navigation paging-navigation" role="navigation">
			<h1 class="screen-reader-text"><?php _e( 'Posts navigation', 'puro' ); ?></h1>
			<?php if ( function_exists( 'wp_pagenavi' ) ) : ?>
				<?php wp_pagenavi(); ?>
			<?php else : ?>			
			<div class="nav-links">
			<?php
			global $wp_query;

			$total = $wp_query->max_num_pages;

			echo paginate_links( array(
				'base' => str_replace( $total, '%#%', esc_url( get_pagenum_link( $total ) ) ),
				'format' => '?paged=%#%',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $total,
				'prev_text'    => __('Previous', 'puro'),
				'next_text'    => __('Next', 'puro'),
			) );
			?>
			</div><!-- .nav-links -->
			<?php endif; ?>
		</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'the_post_navigation' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @todo Remove this function when WordPress 4.3 is released.
 */
function the_post_navigation() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">
		<h1 class="screen-reader-text"><?php _e( 'Post navigation', 'puro' ); ?></h1>
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous">%link</div>', _x( '%title', 'Previous post link', 'puro' ) );
				next_post_link(     '<div class="nav-next">%link</div>',     _x( '%title', 'Next post link',     'puro' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

if ( ! function_exists( 'puro_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time, author, comment count and categories.
 */
function puro_posted_on() {

	if ( is_sticky() && is_home() && ! is_paged() ) {
		echo '<span class="featured-post">' . __( 'Sticky', 'puro' ) . '</span>';
	}

	if ( is_home() && siteorigin_setting('blog_post_date') || is_archive() && siteorigin_setting('blog_post_date') || is_search() && siteorigin_setting('blog_post_date') ) {
		echo '<span class="entry-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark"><time class="published" datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date( 'j F Y' ) ) . '</time><time class="updated" datetime="' . esc_attr( get_the_modified_date( 'c' ) ) . '">' . esc_html( get_the_modified_date() ) . '</time></span></a>';
	}

	if ( is_single() && siteorigin_setting('blog_post_date') ) {
		echo '<span class="entry-date"><time class="published" datetime="' . esc_attr( get_the_date( 'c' ) ) . '">' . esc_html( get_the_date( 'j F Y' ) ) . '</time><time class="updated" datetime="' . esc_attr( get_the_modified_date( 'c' ) ) . '">' . esc_html( get_the_modified_date() ) . '</time></span>';
	}

	if ( siteorigin_setting('blog_post_author') ) {
		echo '<span class="byline"><span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a></span></span>';
	}

	if ( has_category() && siteorigin_setting('blog_post_cats') ) {
		echo '<span class="cat-links">' . get_the_category_list( __( ', ', 'puro' ) ) . '</span>';
	}

	if ( has_tag() && siteorigin_setting('blog_post_tags') ) {
		echo '<span class="tags-links">' . get_the_tag_list( '', __( ', ', 'puro' ) ) . '</span>';
	}

	if ( comments_open() && siteorigin_setting('blog_post_comment_count') ) { 
		echo '<span class="comments-link">';
  		comments_popup_link( __( 'Leave a comment', 'puro' ), __( '1 Comment', 'puro' ), __( '% Comments', 'puro' ) );
  		echo '</span>';
	}

}
endif;

if(!function_exists('puro_display_logo')):
/**
 * Display the logo
 */
function puro_display_logo(){
	$logo = siteorigin_setting( 'header_image' );
	$logo = apply_filters('puro_logo_image_id', $logo);

	if( empty($logo) ) {
		if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {
			the_custom_logo();
			return;
		}

		// Just display the site title
		$logo_html = '<h1 class="site-title">'.get_bloginfo( 'name' ).'</h1>';
		$logo_html = apply_filters('puro_logo_text', $logo_html);
	}
	else {
		// Load the logo image
		if(is_array($logo)) {
			list ($src, $height, $width) = $logo;
		}
		else {
			$image = wp_get_attachment_image_src($logo, 'full');
			$src = $image[0];
			$height = $image[2];
			$width = $image[1];
		}

		// Add all the logo attributes
		$logo_attributes = apply_filters('puro_logo_image_attributes', array(
			'src' => $src,
			'width' => round($width),
			'height' => round($height),
			'alt' => sprintf( __('%s Logo', 'puro'), get_bloginfo('name') ),
		) );

		$logo_attributes_str = array();
		if( !empty( $logo_attributes ) ) {
			foreach($logo_attributes as $name => $val) {
				if( empty($val) ) continue;
				$logo_attributes_str[] = $name.'="'.esc_attr($val).'" ';
			}
		}

		$logo_html = apply_filters('puro_logo_image', '<img '.implode( ' ', $logo_attributes_str ).' />');
	}

	// Echo the image
	echo apply_filters('puro_logo_html', $logo_html);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function puro_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'puro_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,

			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'puro_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so puro_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so puro_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in puro_categorized_blog.
 */
function puro_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'puro_categories' );
}
add_action( 'edit_category', 'puro_category_transient_flusher' );
add_action( 'save_post',     'puro_category_transient_flusher' );
