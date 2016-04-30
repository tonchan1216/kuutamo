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

	siteorigin_settings_add_section( 'header', __('Header', 'puro' ) );
	siteorigin_settings_add_section( 'navigation', __('Navigation', 'puro' ) );
	siteorigin_settings_add_section( 'layout', __('Layout', 'puro' ) );
	siteorigin_settings_add_section( 'home', __('Home', 'puro' ) );
	siteorigin_settings_add_section( 'pages', __('Pages', 'puro' ) );
	siteorigin_settings_add_section( 'blog', __('Blog', 'puro' ) );
	siteorigin_settings_add_section( 'comments', __('Comments', 'puro' ) );
	siteorigin_settings_add_section( 'social', __('Social', 'puro' ) );	
	siteorigin_settings_add_section( 'footer', __('Footer', 'puro' ) );

	// Header
	siteorigin_settings_add_field('header', 'image', 'media', __('Logo Image', 'puro'), array(
		'choose' => __('Choose Image', 'puro'),
		'update' => __('Set Logo', 'puro'),
		'description' => __('Your own custom logo.', 'puro')
	) );

	siteorigin_settings_add_teaser('header', 'image_retina', __('Retina Logo', 'puro'), array(
		'choose' => __('Choose Image', 'puro'),
		'update' => __('Set Logo', 'puro'),
		'description' => __('A double sized version of your logo for use on high pixel density displays. Must be used in addition to standard logo.', 'puro'),
	) );

	siteorigin_settings_add_field('header', 'center_logo', 'checkbox', __('Center Logo', 'puro'), array(
		'description' => __('Display a centered header logo.', 'puro')
	) );

	siteorigin_settings_add_field('header', 'display_tagline', 'checkbox', __('Display Tagline', 'puro'), array(
		'description' => __('Display the website tagline.', 'puro')
	) );	

	// Navigation
	siteorigin_settings_add_field( 'navigation', 'post_nav', 'checkbox', __('Post Navigation', 'puro'), array(
		'description' => __('Display next/previous post navigation.', 'puro')
	) );		

	siteorigin_settings_add_field('navigation', 'header_menu', 'checkbox', __('Header Menu', 'puro'), array(
		'description' => __('Display the header menu.', 'puro')
	));	

	siteorigin_settings_add_teaser('navigation', 'responsive_menu', __('Responsive Menu', 'puro'), array(
		'description' => __('Use a special responsive menu for small screen devices.', 'puro'),
		'teaser-image' => get_template_directory_uri().'/upgrade/teasers/responsive-menu.png',
	));			

	// Layout
	siteorigin_settings_add_field( 'layout', 'responsive', 'checkbox', __('Responsive Layout', 'puro'), array(
		'description' => __('Adapt the site layout for mobile devices.', 'puro')
	) );	

	siteorigin_settings_add_field('layout', 'fitvids', 'checkbox', __('Enable FitVids.js', 'puro'), array(
		'description' => __('Include FitVids.js for fluid width video embeds.', 'puro')
	));			

	// Home
	siteorigin_settings_add_field('home', 'slider', 'select', __('Home Page Slider', 'puro'), array(
		'options' => siteorigin_metaslider_get_options(true),
		'description' => sprintf(
			__('This theme supports <a href="%s" target="_blank">Meta Slider</a>. <a href="%s">Install it</a> for free to easily build beautiful responsive sliders - <a href="%s" target="_blank">read more</a>.', 'puro'),
			'http://bit.ly/meta-slider',
			siteorigin_metaslider_install_link(),
			'http://purothemes.com/documentation/puro-theme/theme-settings/home/'
		)
	));

	// Pages
	siteorigin_settings_add_field('pages', 'page_featured_image', 'checkbox', __('Page Featured Image', 'puro'), array(
		'description' => __('Display the featured image on pages.', 'puro')
	) );		


	// Blog
	siteorigin_settings_add_field('blog', 'archive_layout', 'select', __('Blog Archive Layout', 'puro'), array(
		'options' => puro_blog_layout_options(),
		'description' => __('Choose the layout to be used on blog and archive pages.', 'puro')
	) );

    siteorigin_settings_add_field('blog', 'archive_featured_image', 'checkbox', __('Archive Featured Image', 'puro'), array(
        'description' => __('Display the featured image on the blog archive pages.', 'puro')
    ) );   

    siteorigin_settings_add_field('blog', 'archive_content', 'select', __('Archive Post Content', 'puro'), array(
        'options' => array(
            'full' => __('Full Post Content', 'puro'),
            'excerpt' => __('Post Excerpt', 'puro'),
        ),
        'description' => __('Choose how to display your post content on blog and archive pages. Select Full Post Content if using the "more" quicktag.', 'puro'),
    ));

    siteorigin_settings_add_field('blog', 'read_more', 'text', __('Read More Text', 'puro'), array(
        'description' => __('The link text displayed when posts are split using the "more" quicktag.', 'puro'),
        'conditional' => array(
            'show' => array(
                'blog_archive_content' => 'full',
            ),
            'hide' => 'else'
        )
    ));
    
    siteorigin_settings_add_field('blog', 'excerpt_length', 'number', __('Post Excerpt Length', 'puro'), array(
        'description' => __('If no manual post excerpt is added one will be generated. How many words should it be?', 'puro'),
        'conditional' => array(
            'show' => array(
                'blog_archive_content' => 'excerpt',
            ),
            'hide' => 'else'
        )
    ));

	siteorigin_settings_add_field('blog', 'post_featured_image', 'checkbox', __('Post Featured Image', 'puro'), array(
		'description' => __('Display the featured image on the single post page.', 'puro')
	) );    

    siteorigin_settings_add_field('blog', 'post_date', 'checkbox', __('Post Date', 'puro'), array(
		'description' => __('Display the post date.', 'puro')
	));	

	siteorigin_settings_add_field('blog', 'post_author', 'checkbox', __('Post Author', 'puro'), array(
		'description' => __('Display the post author.', 'puro')
	));	

	siteorigin_settings_add_field('blog', 'post_cats', 'checkbox', __('Post Categories', 'puro'), array(
		'description' => __('Display the post categories.', 'puro')
	));		

	siteorigin_settings_add_field('blog', 'post_tags', 'checkbox', __('Post Tags', 'puro'), array(
		'description' => __('Display the post tags.', 'puro')
	));

	siteorigin_settings_add_field('blog', 'post_comment_count', 'checkbox', __('Post Comment Count', 'puro'), array(
		'description' => __('Display the post comment count.', 'puro')
	));	
    
	siteorigin_settings_add_field( 'blog', 'edit_link', 'checkbox', __( 'Post Edit Link', 'puro' ), array(
		'description' => __( 'Display an Edit link below post content. Visible if a user is logged in and allowed to edit the content. Also applies to Pages.', 'puro' )
	) );	

	// Comments
	siteorigin_settings_add_field('comments', 'comment_form_tags', 'checkbox', __('Comment Form Allowed Tags', 'puro'), array(
		'description' => __('Display the explanatory text below the comment form that lets users know which HTML tags may be used.', 'puro')
	) );				

	siteorigin_settings_add_teaser('comments', 'ajax_comments', __('Ajax Comments', 'puro'), array(
		'description' => __('Allow users to submit comments without a page re-load on submit.', 'puro'),
		'teaser-image' => get_template_directory_uri().'/upgrade/teasers/ajax-comments.png',
	));			 		

	// Social 
	siteorigin_settings_add_teaser('social', 'share_post', __('Post Sharing', 'puro'), array(
		'description' => __('Show icons to share your posts on Facebook, Twitter, Google+ and LinkedIn.', 'puro'),
		'teaser-image' => get_template_directory_uri().'/upgrade/teasers/social-sharing.png',
	));

	siteorigin_settings_add_teaser('social', 'twitter', __('Twitter Handle', 'puro'), array(
		'description' => __('This handle will be recommended after a user shares one of your posts.', 'puro'),
		'teaser-image' => get_template_directory_uri().'/upgrade/teasers/twitter-share-handle.png',
	));	

	// Footer
	siteorigin_settings_add_field( 'footer', 'copyright_text', 'text', __( 'Footer Copyright Text', 'puro' ), array(
		'description' => __( '{site-title}, {copyright} and {year} can be used to display your website title, a copyright symbol and the current year.', 'puro' )
	) );

	siteorigin_settings_add_teaser('footer', 'attribution', __('Footer Attribution Link', 'puro'), array(
		'description' => __('Remove the theme attribution link from your footer without editing any code.', 'puro'),
		'teaser-image' => get_template_directory_uri().'/upgrade/teasers/attribution.png',
	));	

	siteorigin_settings_add_field('footer', 'js_enqueue', 'checkbox', __('Enqueue JavaScript in Footer', 'puro'), array(
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

	$defaults['layout_responsive'] = true;
	$defaults['layout_fitvids'] = true;

	$defaults['home_slider'] = '';

	$defaults['pages_page_featured_image'] = true;		

	$defaults['blog_archive_layout'] = 'blog';
	$defaults['blog_archive_featured_image'] = true;
	$defaults['blog_archive_content'] = 'full';
	$defaults['blog_read_more'] = __('Continue reading', 'puro');
	$defaults['blog_excerpt_length'] = 55;
	$defaults['blog_post_featured_image'] = true;
	$defaults['blog_post_date'] = true;
	$defaults['blog_post_author'] = true;
	$defaults['blog_post_cats'] = true;
	$defaults['blog_post_tags'] = true;	
	$defaults['blog_post_comment_count'] = true;			
	$defaults['blog_edit_link'] = true;

	$defaults['comments_comment_form_tags'] = true;		
	$defaults['comments_ajax_comments'] = true;	

	$defaults['social_share_post'] = true;
	$defaults['social_twitter'] = '';		

	$defaults['footer_copyright_text'] = __('Copyright {year}', 'puro');
	$defaults['footer_attribution'] = true;
	$defaults['footer_js_enqueue'] = false;

	return $defaults;
}
add_filter('siteorigin_theme_default_settings', 'puro_theme_setting_defaults');

function puro_siteorigin_settings_page_icon($icon){
	return get_template_directory_uri().'/images/settings-icon.png';
}
add_filter('siteorigin_settings_page_icon', 'puro_siteorigin_settings_page_icon');

function puro_blog_layout_options(){
	$layouts = array();
	foreach( glob(get_template_directory().'/loops/loop-*.php') as $template ) {
		$headers = get_file_data( $template, array(
			'loop_name' => 'Loop Name',
		) );

		preg_match('/loop\-(.*?)\.php/', basename($template), $matches);
		if(!empty($matches[1])) {
			$layouts[$matches[1]] = $headers['loop_name'];
		}
	}
	return $layouts;
}