<?php

function puro_settings_tour($tour){
	$tour = array();

	$tour[] = array(
		'title' => __( 'Welcome to Puro', 'puro' ),
		'content' => __( 'Clean, crisp and lightweight. Puro is a theme for bloggers, creatives and small businesses. This quick tour will guide you through some of the basic setup and features.', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/introduction.png',
	);

	$tour[] = array(
		'title' => __( 'Upload Your Logo', 'puro' ),
		'content' => __( 'Uploading a custom logo is a great place to start your customization. Click "Choose Image" below to set your logo image. The image will replace the text site title. If you don\'t have a logo, not to worry, the regular site title looks great on its own.', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/upload-logo.png',
		'setting' => 'header_image',
	);

	$tour[] = array(
		'title' => __( 'Upload Your Retina Logo', 'puro' ),
		'content' => __( 'Upload a double sized version of your logo. Puro will automatically display this logo to users on high pixel density displays. Apple devices with Retina displays are an example of this.', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/upload-retina-logo.png',
		'setting' => 'header_image_retina',
	);

	$tour[] = array(
		'title' => __( 'Add a Home Page Slider', 'puro' ),
		'content' => __( 'A home page slider can be used to show off your latest photos, feature pages or display a brand message. Add a home page Slider by installing the plugin, Meta Slider. Once you\'ve created a slideshow in Meta Slider, it will appear in this drop down list.', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/home-page-slider.jpg',
		'setting' => 'home_slider',
	);	

	$tour[] = array(
		'title' => __( 'Enable Post Sharing', 'puro' ),
		'content' => __( 'Toggle this setting to quickly add Facebook, Twitter and Google Plus sharing buttons below your single post content. ', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/social-sharing.png',
		'setting' => 'social_share_post',
	);

	$tour[] = array(
		'title' => __( 'Enter Your Footer Copyright Text', 'puro' ),
		'content' => __( 'Use this field to set the text found at the bottom left of your footer.', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/footer-copyright-text.png',
		'setting' => 'footer_copyright_text',
	);

	$tour[] = array(
		'title' => __( 'Additional Settings', 'puro' ),
		'content' => __( 'Puro has many additional settings not covered in this brief tour. Head to Appearance > Theme Settings to check them out.', 'puro' ),
		'image' => get_template_directory_uri() . '/tour/steps/more-settings.png',
	);	

	if( !defined('SITEORIGIN_IS_PREMIUM') ) {
		// Only show this step if the user isn't already using premium
		$tour[] = array(
			'title' => __( 'Take a Look at Puro Premium', 'puro' ),
			'content' => __( "Puro Premium offers a series of bonus features at a price of your choosing. A once off upgrade that never expires and includes priority support. Check out our premium upgrade page for more information.", 'puro' ),
			'image' => get_template_directory_uri() . '/tour/steps/puro-premium.jpg',
			'action' => array(
				'text' => __( 'More About Puro Premium', 'puro' ),
				'href' => admin_url('themes.php?page=premium_upgrade'),
			),
		);
	}			

	return $tour;
}
add_filter('siteorigin_settings_tour_content', 'puro_settings_tour');