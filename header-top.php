<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>kuutamo</title>
	<meta content="Tohn F" name="author">
	<link href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" rel="shortcut icon" />
	<link href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css" rel="stylesheet" type="text/css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo get_stylesheet_directory_uri();?>/css/bookblock.css" rel="stylesheet" type="text/css" />
	<!-- custom style -->
	<link href='https://fonts.googleapis.com/css?family=Italianno' rel='stylesheet' type='text/css'>
	<link href="<?php echo get_stylesheet_directory_uri();?>/style.css" rel="stylesheet" type="text/css" />
	<?php if(!is_mobile()):?>
		<link href="<?php echo get_stylesheet_directory_uri();?>/css/pc.css" rel="stylesheet" type="text/css" />
	<?php else: ?>
		<link href="<?php echo get_stylesheet_directory_uri();?>/css/sp.css" rel="stylesheet" type="text/css" />
		<link href="<?php echo get_stylesheet_directory_uri();?>/css/jquery.jscrollpane.custom.css" rel="stylesheet" type="text/css" />
	<?php endif;?>
	<script src="<?php echo get_stylesheet_directory_uri();?>/js/modernizr.custom.js"></script>

	<!--[if lt IE 9]>
  <script src="<?php echo get_stylesheet_directory_uri();?>/js/html5shiv.js" type="text/javascript"></script>
  <![endif]-->
 	<!--[if (gte IE 6)&(lte IE 8)]>
  <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri();?>/js/selectivizr-min.js"></script>
  <![endif]-->
  <?php wp_head();?>
</head>

<body>