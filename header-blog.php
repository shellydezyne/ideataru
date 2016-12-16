<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ideataru
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Master Html5 Template</title>

    <link href="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
    <linK href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
    <linK href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
	<link href="<?php bloginfo('template_directory'); ?>/libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
	<link href="<?php bloginfo('template_directory'); ?>/libraries/fonts/elegant/elegant-icon.css" rel="stylesheet"/>
	<link href="<?php bloginfo('template_directory'); ?>/libraries/animate/animate.min.css" rel="stylesheet"/>

	<link href="<?php bloginfo('template_directory'); ?>/libraries/video/YTPlayer.css" rel="stylesheet"/>

    <link href="<?php bloginfo('template_directory'); ?>/css/components.css" rel="stylesheet"/>
	<link href="<?php bloginfo('template_directory'); ?>/css/header.css" rel="stylesheet"/>
	<link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet"/>
	<!--link id="color" href="css/color-schemes/default.css" rel="stylesheet"/-->
    <link href="<?php bloginfo('template_directory'); ?>/css/media.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5/html5shiv.min.js"></script>
      <script src="js/html5/respond.min.js"></script>
    <![endif]-->

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

</head>
<body>
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="load-position">
			<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/images/loading-logo.png" alt="loading-logo"/></div>
			<h6>Please wait, loading...</h6>
			<div class="loading">
				<div class="loading-line"></div>
				<div class="loading-break loading-dot-1"></div>
				<div class="loading-break loading-dot-2"></div>
				<div class="loading-break loading-dot-3"></div>
			</div>
		</div>
	</div>

	<div class="header-top">
		<h1>welcome to our blog</h1>
	</div>

	<!-- Header Section -->
	<header id="header-section" class="header-section">
		<div class="col-md-2 col-sm-2 col-xs-6 logo-block">
			<a href="<?php bloginfo('template_directory'); ?>/home"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"/></a>
		</div>
		<div class="col-md-10 col-sm-12 col-xs-12 menu-block">
			<nav class="navbar navbar-default primary-navigation" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="<?php bloginfo('template_directory'); ?>/home">Home</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/home #service-section">Services</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/home #our-work">Work</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/home #our-genius">Team</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/blog">Blog</a></li>
						<li><a href="<?php bloginfo('template_directory'); ?>/home #project-section">Contact</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</nav>
		</div>
	</header>
