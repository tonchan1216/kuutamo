<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
	if ($post->post_type == 'book_contents') {
		include(TEMPLATEPATH .'/404.php');
	}