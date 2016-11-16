<?php

function puro_premium_upgrade_content($content){
	$content['premium_title'] = __('Upgrade to Puro Premium', 'puro');
	$content['premium_summary'] = __("Hi, my name is Andrew Misplon, the developer of Puro. If you've enjoyed Puro Free then I know you're going to love Puro Premium. Below you'll find an outline of the premium features.", 'puro');

	$content['buy_url'] = 'http://puro.fetchapp.com/sell/tierohvu';
	$content['premium_video_poster'] = get_template_directory_uri().'/upgrade/poster.jpg';

	$content['features'] = array();

	$content['features'][] = array(
		'heading' => __('Premium Email Support', 'puro'),
		'content' => __("Puro Premium comes with quick and friendly email support. Let us know if you run into any challenges or simply need a hand getting setup. We're here to help.", 'puro'),
	);

	$content['features'][] = array(
		'heading' => __('Name the Price', 'puro'),
		'content' => __("You choose the price, so you can pay what Puro is worth to you. Choose from one our suggested options or specify your own custom price. Regardless of what you pay you'll receive the same upgrade file and be supporting the continued development of Puro.", 'puro'),
	);

	$content['features'][] = array(
		'heading' => __("Retina Logo", 'puro'),
		'content' => __("Puro Premium allows you to upload an additional, double-sized logo, to be displayed on high pixel density displays.", 'puro'),
	);

	$content['features'][] = array(
		'heading' => __('Enhanced Customizer Integration', 'puro'),
		'content' => __("Make Puro your own with enhanced Customizer integration. Change fonts, colors and more all using the live-updating WordPress Customizer.", 'puro'),
		'image' => get_template_directory_uri().'/upgrade/teasers/customizer.png',
	);

	$content['features'][] = array(
		'heading' => __("AJAX Comments", 'puro'),
		'content' => __("Remove page re-loads from your comment forms. This means that users can submit comments without losing their place in a gallery or interrupting a video.", 'puro'),
		'image' => get_template_directory_uri().'/upgrade/teasers/ajax-comments.png',
	);

	$content['features'][] = array(
		'heading' => __("Post and Page Sharing", 'puro'),
		'content' => __("Add sharing icons for Facebook, Twitter, Google Plus and LinkedIn to the bottom of your posts and pages.", 'puro'),
		'image' => get_template_directory_uri().'/upgrade/teasers/social-sharing.png',
	);

	$content['features'][] = array(
		'heading' => __('Remove Attribution Links', 'puro'),
		'content' => __('Puro Premium gives you the option to remove the "Puro WordPress Theme" text from your Footer without editing any code.', 'puro'),
		'image' => get_template_directory_uri().'/upgrade/teasers/attribution.png',
	);	

	$content['features'][] = array(
		'heading' => __("Continued Updates", 'puro'),
		'content' => __("Your premium upgrade is a valuable contribution to the future development of Puro, ensuring it's compatible with future versions of WordPress.", 'puro'),
		'image' => get_template_directory_uri().'/upgrade/teasers/updates.png',
	);

	$content['testimonials'] = array(
		array(
			'gravatar' => '69d81ec04f082b1c3437e8473d78e63b',
			'name' => 'Rob Hope',
			'title' => 'Clean, minimal, to the point',
			'content' => __("<p>Solid theme. Clean, minimal, to the point, zero clutter, fast, does what it says. Found video post types useful for a client project and works well.</p>", 'puro'),
		),
		array(
			'gravatar' => 'bbbd2d0fa2d500e1931265ada3d62382',
			'name' => 'Li-An',
			'title' => 'Impressive',
			'content' => __("<p>Very clean and well documented theme. I'm very curious to work with it. Thanks for sharing.</p>", 'puro'),
		),
		array(
			'gravatar' => 'a30fb6758139a02d700c273d79a0877d',
			'name' => 'Kerstie',
			'title' => 'Minimalist Theme Ideal for Portfolio.',
			'content' => __("<p>Great theme. Neat, simple, and modern. It suits my needs and preferences, and the small modification that I want was easily solved by Support. Highly recommended.</p> <p>My favorite feature was the option to move the logo to the center without adjusting the layout using CSS. I've been looking for minimalist portfolio-friendly themes with such feature and this is the only one that I've found so far.</p> <p>Thank you so much for sharing such a wonderful theme.</p>", 'puro'),
		),		
	);	

	return $content;
}
add_filter('siteorigin_premium_content', 'puro_premium_upgrade_content');