<?php
add_action('init', function() {
  remove_filter('the_title', 'wptexturize');
  remove_filter('the_content', 'wptexturize');
  remove_filter('the_excerpt', 'wptexturize');
  remove_filter('the_title', 'wpautop');
  remove_filter('the_content', 'wpautop');
  remove_filter('the_excerpt', 'wpautop');
  //remove_filter('the_editor_content', 'wp_richedit_pre');
});

add_filter('tiny_mce_before_init', function($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = ture;
  return $init;
});

function load_cdn() {
  if (!is_admin() ) {
    wp_deregister_script( 'jquery');
    wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', array(), '1.11.3', false);
    wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', false);
  }
}
add_action( 'wp_enqueue_scripts', 'load_cdn');
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

add_theme_support( 'post-thumbnails');

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
      'supports' => array('title','editor','thumbnail') 
      )
    );
  register_taxonomy(
    'book-cat', 
    'book_contents', 
    array(
      'hierarchical' => true, 
      'update_count_callback' => '_update_post_term_count',
      'label' => '絵本のカテゴリー',
      'singular_label' => '絵本のカテゴリー',
      'public' => true,
      'show_ui' => true
      )
    );
}

function is_mobile() {
  $useragents = array(
    'iPhone',          // iPhone
    'iPod',            // iPod touch
    'Android',         // 1.5+ Android
    'dream',           // Pre 1.5 Android
    'CUPCAKE',         // 1.5+ Android
    'blackberry9500',  // Storm
    'blackberry9530',  // Storm
    'blackberry9520',  // Storm v2
    'blackberry9550',  // Storm v2
    'blackberry9800',  // Torch
    'webOS',           // Palm Pre Experimental
    'incognito',       // Other iPhone browser
    'webmate'          // Other iPhone browser
    );
  $pattern1 = '/'.implode('|', $useragents).'/i';
  $except = array('Nexus 10');
  $pattern2 = '/'.implode('|', $except).'/i';
  $target = $_SERVER['HTTP_USER_AGENT'];
  return preg_match($pattern1, $target) xor preg_match($pattern2, $target);
}

function myplugin_tinymce_buttons($buttons) {
  array_unshift($buttons, 'fontsizeselect');
  return $buttons;
}
// ↓ フックを mce_buttons_2 にする
add_filter('mce_buttons_2','myplugin_tinymce_buttons');

function _tinyMCESettings($arr){
  $arr['block_formats'] = "pタグ=p;h1タグ=h1;h2タグ=h2;h3タグ=h3;h4タグ=h4;コード=pre";
  // リサイズ禁止
  $arr['object_resizing'] = false;
  // CSSの変更
  //$arr['content_css'] = src('css',true)."editor-style.css";
    // フォーマットの設定
  return $arr;
}
add_filter('tiny_mce_before_init','_tinyMCESettings',1000);