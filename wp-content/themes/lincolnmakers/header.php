<!DOCTYPE html>
<!--[if IE 7]> <html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="ie ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->
	<head prefix="og: http://ogp.me/ns/website#">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<title><?php
			if(is_front_page()) {
				echo bloginfo('name');
			} else {
				if( is_single() && in_category('gift') ) {
					echo 'Lincoln Makers Gift: ';
					echo the_title();
				} else {
					echo bloginfo('name') . ': ';
					echo the_title();
				}
			} ?></title>
		<meta name="robots" content="noindex, nofollow">
		<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/icon.jpg">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
		<meta name="description" content="<?
			if( get_post_meta($post->ID, 'meta-description', true) != null ) {
				echo get_post_meta($post->ID, 'meta-description', true);
			} else {
				echo $GLOBALS['metaDescription'];
			}
		?>">
		<meta property="og:type" content="website">
		<meta property="og:title" content="<?
			if( get_post_meta($post->ID, 'og-title', true) != null ) {
				echo get_post_meta($post->ID, 'og-title', true);
			} else if( ($GLOBALS['ogTitle'] != null) ) {
				echo $GLOBALS['ogTitle'];
			} else {
				if(is_front_page()) {
					echo bloginfo('name');
				} else {
					if( is_single() && in_category('gift') ) {
						echo 'Lincoln Makers Gift: ';
						echo the_title();
					} else {
						echo bloginfo('name') . ': ';
						echo the_title();
					}
				}
			}
		?>">
		<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		<meta property="og:description" content="<?
			if( get_post_meta($post->ID, 'og-description', true) != null ) {
				echo get_post_meta($post->ID, 'og-description', true);
			} else if( ($GLOBALS['ogDescription'] != null) ) {
				echo $GLOBALS['ogDescription'];
			} else {
				if( get_post_meta($post->ID, 'meta-description', true) != null ) {
					echo get_post_meta($post->ID, 'meta-description', true);
				} else {
					echo $GLOBALS['metaDescription'];
				}
			}
		?>">
		<meta property="og:image" content="<?
			if( get_post_meta($post->ID, 'og-image', true) != null ) {
				echo 'http://www-lincolnmakers-com.herokuapp.com/wp-content/uploads/';
				echo get_post_meta($post->ID, 'og-image', true);
			} else {
				echo bloginfo('template_directory') . '/img/logo.png';
			}
		?>">
		<meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-3.1.1.min.css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider-2.2.0.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,400,700|Crimson+Text">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<!--[if lt IE 9]>
		<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv-3.7.0.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/respond-1.4.2.min.js"></script>
<![endif]-->
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-6570849-1']);
			_gaq.push(['_trackPageview']);


			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	</head>





	<body <?php body_class(); ?>>
		<header id="header" class="navbar navbar-default">
			<div class="container">
				<nav id="top-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav pull-right hidden-xs">
						<li><a href="<?php bloginfo('url'); ?>/">Home</a></li>
						<li><a href="#">Locate a Dealer</a></li>
						<li><a href="#">Build &amp; Price</a></li>
						<li><a href="#">Download Brochure</a></li>
						<li><a href="#">Lincoln.com</a></li>
						<li><a href="#" class="concierge">Concierge</a></li>
					</ul><!--/.navbar-nav -->
					<ul class="nav navbar-nav visible-xs">
						<li><a href="<?php bloginfo('url'); ?>">Home</a></li>
						<li><a href="<?php bloginfo('url'); ?>/getaway/">The Getaway</a></li>
						<li><a href="<?php bloginfo('url'); ?>/vineyard/">The Vineyard</a></li>
						<li><a href="<?php bloginfo('url'); ?>/finish/">The Finish</a></li>
						<li><a href="<?php bloginfo('url'); ?>/look/">The Look</a></li>
						<li><a href="<?php bloginfo('url'); ?>/blend/">The Blend</a></li>
						<li><a href="<?php bloginfo('url'); ?>/icon/">The Icon</a></li>
					</ul><!--/.navbar-nav -->
				</nav>
<!--/#top-nav -->


				<div class="navbar-header">
					<a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="The Lincoln Motor Company" class="logo"></a>


					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>          
				</div>
			</div><!--/.container -->
		</header>
<!--/body > #header -->
















		<div id="content">
