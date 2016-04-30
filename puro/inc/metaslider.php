<?php
/**
 * Meta Slider integration.
 */
function siteorigin_metaslider_get_options(){
	$options = array( '' => __('None', 'puro') );

	if(class_exists('MetaSliderPlugin')){
		$sliders = get_posts(array(
			'post_type' => 'ml-slider',
			'numberposts' => 200,

		));

		foreach($sliders as $slider) {
			$options['meta:'.$slider->ID] = __('Slider: ', 'puro').$slider->post_title;
		}
	}

	return $options;
}

function siteorigin_metaslider_install_link(){
	if(function_exists('siteorigin_plugin_activation_install_url')) {
		return siteorigin_plugin_activation_install_url('ml-slider', 'MetaSlider');
	}
	else {
		return 'http://downloads.wordpress.org/plugin/ml-slider.zip';
	}
}

function siteorigin_metaslider_affiliate(){
	return 'http://bit.ly/meta-slider';
}
add_filter('metaslider_hoplink', 'siteorigin_metaslider_affiliate');