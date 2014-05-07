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
		<link rel="apple-touch-icon" href="/wp-content/themes/lincolnmakers/img/icon.jpg">
		<link rel="shortcut icon" href="/wp-content/themes/lincolnmakers/img/favicon.ico">
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
				echo '/wp-content/themes/lincolnmakers/uploads/';
				echo get_post_meta($post->ID, 'og-image', true);
			} else {
				echo '/wp-content/themes/lincolnmakers/img/logo.png';
			}
		?>">
		<meta property="og:url" content="<?php echo 'http://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"] ?>">
		<link rel="stylesheet" href="/wp-content/themes/lincolnmakers/css/bootstrap-3.1.1.min.css">
		<link rel="stylesheet" href="/wp-content/themes/lincolnmakers/css/flexslider-2.2.0.css">
		<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:300,400,700|Crimson+Text">
		<link rel="stylesheet" href="/wp-content/themes/lincolnmakers/style.css">
<!--[if lt IE 9]>
		<script src="/wp-content/themes/lincolnmakers/js/html5shiv-3.7.0.js"></script>
		<script src="/wp-content/themes/lincolnmakers/js/respond-1.4.2.min.js"></script>
<![endif]-->
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');


			ga('create', 'UA-6570849-1', 'michaelmallari.com');
			ga('require', 'displayfeatures');
			ga('send', 'pageview');
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
						<li><a href="/">Home</a></li>
						<li><a href="/getaway/">The Getaway</a></li>
						<li><a href="/vineyard/">The Vineyard</a></li>
						<li><a href="/finish/">The Finish</a></li>
						<li><a href="/look/">The Look</a></li>
						<li><a href="/blend/">The Blend</a></li>
						<li><a href="/icon/">The Icon</a></li>
					</ul><!--/.navbar-nav -->
				</nav>
<!--/#top-nav -->


				<div class="navbar-header">
					<a href="/"><img src="/wp-content/themes/lincolnmakers/img/logo.png" alt="The Lincoln Motor Company" class="logo"></a>


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
