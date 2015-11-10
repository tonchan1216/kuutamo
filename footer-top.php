	<script src="<?php echo get_stylesheet_directory_uri();?>/js/script.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquerypp.custom.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.bookblock.js"></script>
	<?php if(is_mobile()):?>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.jscrollpane.min.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.mousewheel.js"></script>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/page_sp.js"></script>
	<?php else: ?>
		<script src="<?php echo get_stylesheet_directory_uri();?>/js/page_pc.js"></script>
	<?php endif;?>
	<script>
		Page.init();
	</script>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=993298327401418";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<?php wp_footer();?>
</body>
</html>