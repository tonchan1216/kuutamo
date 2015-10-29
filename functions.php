<?php
add_action('wp_header', 'add_googleanalytics');
function add_googleanalytics() { ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-69273432-1', 'auto');
	ga('send', 'pageview');

</script>
<?php }

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'book_contents',
    array(
      'labels' => array(
        'name' => __( 'Books' ),
        'singular_name' => __( 'Book' )
      ),
      'public' => true,
      'exclude_from_search' => true,
      'show_in_nav_menus' => false,
      'menu_position' => 10,
      'has_archive' => false,
    )
  );
}