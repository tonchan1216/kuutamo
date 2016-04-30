<?php

/**
 * Get the video from the current post.
 *
 * @return mixed
 */
function puro_get_video(){
	global $puro_videos;
	$post_id = get_the_ID();

	if( empty( $puro_videos ) ) $puro_videos = array();
	if( isset($puro_videos[$post_id]) ) return $puro_videos[$post_id];

	$content = get_the_content();
	$content = apply_filters( 'the_content', $content );
	$content = str_replace( ']]>', ']]&gt;', $content );
	$content = trim($content);

	// Is the first line a video?
	list($line, $content) = explode("\n", $content, 2);

	if ( preg_match('/\<\s*(iframe|object|embed)/i', $line) ) {
		$puro_videos[$post_id] = strip_tags($line, '<iframe><object><embed>');
	}
	else {
		$puro_videos[$post_id] = false;
	}

	return $puro_videos[$post_id];
}

/**
 * Removes the video from the page
 *
 * @param $content
 *
 * @return mixed
 */
function puro_filter_video($content){
	list($line, $rest) = explode("\n", $content, 2);
	if ( preg_match('/\<\s*(iframe|object|embed)/i', $line) ) return $rest;
	else return $content;
}