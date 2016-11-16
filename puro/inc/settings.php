<?php
/**
 * Configure theme settings.
 *
 * @package puro
 * @since puro 1.0
 * @license GPL 2.0
 */

/**
 * Setup theme options.
 * 
 * @since puro 1.0
 */
function puro_theme_settings(){
	$settings = SiteOrigin_Settings::single();

	$settings->add_section( 'header', __('Header', 'puro' ) );
	$settings->add_section( 'navigation', __('Navigation', 'puro' ) );
	$settings->add_section( 'layout', __('Layout', 'puro' ) );
	$settings->add_section( 'home', __('Home', 'puro' ) );
	$settings->add_section( 'pages', __('Pages', 'puro' ) );
	$settings->add_section( 'blog', __('Blog', 'puro' ) );
	$settings->add_section( 'comments', __('Comments', 'puro' ) );
	$settings->add_section( 'social', __('Social', 'puro' ) );	
	$settings->add_section( 'footer', __('Footer', 'puro' ) );

	// Header.
	$settings->add_field('header', 'image', 'media', __('Logo Image', 'puro'), array(
		'choose' => __('Choose Image', 'puro'),
		'update' => __('Set Logo', 'puro'),
		'description' => __('Your own custom logo.', 'puro')
	) );

	$settings->add_teaser('header', 'image_retina', 'media', __('Retina Logo', 'puro'), array(
		'choose' => __('Choose Image', 'puro'),
		'update' => __('Set Logo', 'puro'),
		'description' => __('A double sized version of your logo for use on high pixel density displays. Must be used in addition to standard logo.', 'puro'),
	) );

	$settings->add_field('header', 'center_logo', 'checkbox', __('Center Logo', 'puro'), array(
		'description' => __('Display a centered header logo.', 'puro')
	) );

	$settings->add_field('header', 'display_tagline', 'checkbox', __('Display Tagline', 'puro'), array(
		'description' => __('Display the website tagline.', 'puro')
	) );	

	// Navigation.
	$settings->add_field( 'navigation', 'post_nav', 'checkbox', __('Post Navigation', 'puro'), array(
		'description' => __('Display next/previous post navigation.', 'puro')
	) );		

	$settings->add_field('navigation', 'header_menu', 'checkbox', __('Header Menu', 'puro'), array(
		'description' => __('Display the header menu.', 'puro')
	));	

	$settings->add_field('navigation', 'responsive_menu', 'checkbox', __('Mobile Menu', 'puro'), array(
		'description' => __('Use a special responsive menu for small screen devices.', 'puro'),
	));

	$settings->add_field('navigation', 'responsive_menu_collapse', 'number', __('Mobile Menu Collapse', 'puro'), array(
		'description' => __('The pixel resolution when the primary menu changes to a mobile menu.', 'puro')
	) );	

	// Layout.
	$settings->add_field( 'layout', 'responsive', 'checkbox', __('Responsive Layout', 'puro'), array(
		'description' => __('Adapt the site layout for mobile devices.', 'puro')
	) );	

	$settings->add_field('layout', 'fitvids', 'checkbox', __('Enable FitVids.js', 'puro'), array(
		'description' => __('Include FitVids.js for fluid width video embeds.', 'puro')
	));			

	// Home.
	$settings->add_field('home', 'slider', 'select', __('Home Page Slider', 'puro'), array(
		'options' => siteorigin_metaslider_get_options(true),
		'description' => sprintf(
			__('This theme supports <a href="%s" target="_blank">Meta Slider</a>. <a href="%s">Install it</a> for free to easily build beautiful responsive sliders - <a href="%s" target="_blank">read more</a>.', 'puro'),
			'http://bit.ly/meta-slider',
			siteorigin_metaslider_install_link(),
			'http://purothemes.com/documentation/puro-theme/theme-settings/home/'
		)
	));

	// Pages.
	$settings->add_field('pages', 'page_featured_image', 'checkbox', __('Page Featured Image', 'puro'), array(
		'description' => __('Display the featured image on pages.', 'puro')
	) );		


	// Blog.
	$settings->add_field('blog', 'archive_layout', 'select', __('Blog Archive Layout', 'puro'), array(
		'options' => puro_blog_layout_options(),
		'description' => __('Choose the layout to be used on blog and archive pages.', 'puro')
	) );

    $settings->add_field('blog', 'archive_featured_image', 'checkbox', __('Archive Featured Image', 'puro'), array(
        'description' => __('Display the featured image on the blog archive pages.', 'puro')
    ) );   

    $settings->add_field('blog', 'archive_content', 'select', __('Archive Post Content', 'puro'), array(
        'options' => array(
            'full' => __('Full Post Content', 'puro'),
            'excerpt' => __('Post Excerpt', 'puro'),
        ),
        'description' => __('Choose how to display your post content on blog and archive pages. Select Full Post Content if using the "more" quicktag.', 'puro'),
    ));

    $settings->add_field('blog', 'read_more', 'text', __('Read More Text', 'puro'), array(
        'description' => __('The link text displayed when posts are split using the "more" quicktag.', 'puro'),
    ));
    
    $settings->add_field('blog', 'excerpt_length', 'number', __('Post Excerpt Length', 'puro'), array(
        'description' => __('If no manual post excerpt is added one will be generated. How many words should it be?', 'puro'),
    ));

    $settings->add_field('blog', 'excerpt_more', 'checkbox', __('Post Excerpt Read More Link', 'puro'), array(
        'description' => __('Display the Read More Text below the post excerpt. Only applicable if Post Excerpt has been selected from the Archive Post Content setting.', 'puro'),
    ));    

	$settings->add_field('blog', 'post_featured_image', 'checkbox', __('Post Featured Image', 'puro'), array(
		'description' => __('Display the featured image on the single post page.', 'puro')
	) );    

    $settings->add_field('blog', 'post_date', 'checkbox', __('Post Date', 'puro'), array(
		'description' => __('Display the post date.', 'puro')
	));	

	$settings->add_field('blog', 'post_author', 'checkbox', __('Post Author', 'puro'), array(
		'description' => __('Display the post author.', 'puro')
	));	

	$settings->add_field('blog', 'post_cats', 'checkbox', __('Post Categories', 'puro'), array(
		'description' => __('Display the post categories.', 'puro')
	));		

	$settings->add_field('blog', 'post_tags', 'checkbox', __('Post Tags', 'puro'), array(
		'description' => __('Display the post tags.', 'puro')
	));

	$settings->add_field('blog', 'post_comment_count', 'checkbox', __('Post Comment Count', 'puro'), array(
		'description' => __('Display the post comment count.', 'puro')
	));	

	$settings->add_field('blog', 'post_author_box', 'checkbox', __('Post Author Box', 'puro'), array(
		'description' => __('Display the post author biographical info.', 'puro')
	));		
    
	$settings->add_field( 'blog', 'edit_link', 'checkbox', __( 'Post Edit Link', 'puro' ), array(
		'description' => __( 'Display an Edit link below post content. Visible if a user is logged in and allowed to edit the content. Also applies to Pages.', 'puro' )
	) );	

	// Comments.
	$settings->add_field('comments', 'comment_form_tags', 'checkbox', __('Comment Form Allowed Tags', 'puro'), array(
		'description' => __('Display the explanatory text below the comment form that lets users know which HTML tags may be used.', 'puro')
	) );				

	$settings->add_teaser('comments', 'ajax_comments', 'checkbox', __('AJAX Comments', 'puro'), array(
		'description' => __('Allow users to submit comments without a page re-load on submit.', 'puro'),
	));	 		

	// Social.
	$settings->add_teaser('social', 'share_post', 'checkbox', __('Post and Page Sharing', 'puro'), array(
		'description' => __('Show icons to share your posts on Facebook, Twitter, Google+ and LinkedIn.', 'puro'),
	));

	// Footer.
	$settings->add_field( 'footer', 'copyright_text', 'text', __( 'Footer Copyright Text', 'puro' ), array(
		'description' => __( '{site-title}, {copyright} and {year} can be used to display your website title, a copyright symbol and the current year.', 'puro' ),
		'sanitize_callback' => 'wp_kses_post',
	) );

	$settings->add_teaser('footer', 'attribution', 'checkbox', __('Footer Attribution Link', 'puro'), array(
		'description' => __('Remove the theme attribution link from your footer without editing any code.', 'puro'),
	));	

	$settings->add_field('footer', 'js_enqueue', 'checkbox', __('Enqueue JavaScript in Footer', 'puro'), array(
		'description' => __('Enqueue theme JavaScript files in the footer. Doing so can improve site load time.', 'puro'),
	));	

}
add_action('siteorigin_settings_init', 'puro_theme_settings');

/**
 * Setup theme default settings.
 * 
 * @param $defaults
 * @return mixed
 * @since puro 1.0
 */
function puro_theme_setting_defaults($defaults){
	$defaults['header_image'] = false;
	$defaults['header_image_retina'] = false;
	$defaults['header_center_logo'] = false;
	$defaults['header_display_tagline'] = false;

	$defaults['navigation_post_nav'] = true;
	$defaults['navigation_header_menu'] = true;
	$defaults['navigation_responsive_menu'] = true;
	$defaults['navigation_responsive_menu_collapse'] = 768;

	$defaults['layout_responsive'] = true;
	$defaults['layout_fitvids'] = true;

	$defaults['home_slider'] = '';

	$defaults['pages_page_featured_image'] = true;		

	$defaults['blog_archive_layout'] = 'blog';
	$defaults['blog_archive_featured_image'] = true;
	$defaults['blog_archive_content'] = 'full';
	$defaults['blog_read_more'] = __('Continue reading', 'puro');
	$defaults['blog_excerpt_length'] = 55;
	$defaults['blog_excerpt_more'] = false;
	$defaults['blog_post_featured_image'] = true;
	$defaults['blog_post_date'] = true;
	$defaults['blog_post_author'] = true;
	$defaults['blog_post_cats'] = true;
	$defaults['blog_post_tags'] = true;	
	$defaults['blog_post_comment_count'] = true;
	$defaults['blog_post_author_box'] = false;			
	$defaults['blog_edit_link'] = true;

	$defaults['comments_comment_form_tags'] = true;		
	$defaults['comments_ajax_comments'] = true;	

	$defaults['social_share_post'] = true;
	$defaults['social_share_page'] = false;
	$defaults['social_twitter'] = '';

	$defaults['footer_copyright_text'] = __('Copyright {year}', 'puro');
	$defaults['footer_attribution'] = true;
	$defaults['footer_js_enqueue'] = false;

	return $defaults;
}
add_filter('siteorigin_settings_defaults', 'puro_theme_setting_defaults');

function puro_blog_layout_options() {
	$layouts = array();
	foreach ( glob( get_template_directory().'/loops/loop-*.php') as $template ) {
		$headers = get_file_data( $template, array(
			'loop_name' => 'Loop Name',
		) );

		preg_match( '/loop\-(.*?)\.php/', basename( $template ), $matches );
		if ( ! empty( $matches[1] ) ) {
			$layouts[$matches[1]] = $headers['loop_name'];
		}
	}
	return $layouts;
}