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

 <!doctype html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="">
     <meta name="author" content="">
 	<title>Master Html5 Template</title>
 	<link href="images/favicon.png" rel="icon"/>
     <link href="<?php bloginfo('template_directory'); ?>/libraries/bootstrap/bootstrap.min.css" rel="stylesheet"/>
     <linK href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.carousel.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS File  *	v1.3.3 -->
     <linK href="<?php bloginfo('template_directory'); ?>/libraries/owl-carousel/owl.theme.css" rel="stylesheet"/> <!-- Core Owl Carousel CSS Theme  File  *	v1.3.3 -->
 	<link href="<?php bloginfo('template_directory'); ?>/libraries/fonts/font-awesome.min.css" rel="stylesheet"/>
 	<link href="<?php bloginfo('template_directory'); ?>/libraries/fonts/elegant/elegant-icon.css" rel="stylesheet"/>
 	<link href="<?php bloginfo('template_directory'); ?>/libraries/animate/animate.min.css" rel="stylesheet"/>
 	<link href="<?php bloginfo('template_directory'); ?>/libraries/lightbox2/css/lightbox.css" rel="stylesheet"/>

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
<?php wp_head(); ?>
 </head>
 <body data-offset="200" data-spy="scroll" data-target=".primary-navigation">
 	<a id="top"></a>

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

 	<!-- Style Switcher -->
 	<!--div class="color-switcher" id="choose_color">
 		<a href="#" class="picker_close">
 			<i class="fa fa-gear fa-spin" ></i>
 		</a>
 		<div class="theme-colours">
 			<p>Choose Colour style</p>
 			<ul>
 				<li><a href="#." class="blue" id="default"></a></li>
 				<li><a href="#." class="green" id="green"></a></li>
 				<li><a href="#." class="red" id="red"></a></li>
 				<li><a href="#." class="yellow" id="yellow"></a></li>
 				<li><a href="#." class="light-green" id="light-green"></a></li>
 				<li><a href="#." class="orange" id="orange"></a></li>
 				<li><a href="#." class="pink" id="pink"></a></li>
 				<li><a href="#." class="black" id="black"></a></li>
 			</ul>
 		</div>
 	</div-->

 	<!-- Slider Section -->
 	<div id="photos-slider" class="slider-section">
 		<div class="slides-container">
 			<!-- slide item 1 -->
 			<div class="slide-item">
 				<img src="<?php bloginfo('template_directory'); ?>/images/slider/slide1.jpg" alt="Slide 1"/>
 				<h2 class="slide-title">
 					<span class="inner-circle">
 						<span>Hello!</span>
 						<span>We are</span>
 						<span>master</span>
 					</span>
 				</h2>
 				<div class="slider-content">
 					<div class="col-md-6 left">
 						<h3 class="slide-sub-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
 							<span>we</span>
 							<span>design</span>
 							<span>perfection</span>
 						</h3>
 					</div>
 					<div class="col-md-6 right">
 						<h3 class="slide-sub-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
 						<span>completly</span>
 						<span>costomisable</span>
 					</h3>
 					</div>
 				</div>
 			</div><!-- slide item 1 over -->
 			<!-- slide item 2 -->
 			<div class="slide-item">
 				<img src="<?php bloginfo('template_directory'); ?>/images/slider/slide2.jpg" alt="Slide 2"/>
 				<h2 class="slide-title">
 					<span class="inner-circle">
 						<span>Hello!</span>
 						<span>We are</span>
 						<span>master</span>
 					</span>
 				</h2>
 				<div class="slider-content">
 					<div class="col-md-6 left">
 						<h3 class="slide-sub-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
 							<span>we</span>
 							<span>design</span>
 							<span>perfection</span>
 						</h3>
 					</div>
 					<div class="col-md-6 right">
 						<h3 class="slide-sub-title wow fadeInDown" data-wow-duration="1s" data-wow-delay="0s">
 						<span>completely</span>
 						<span>customisable</span>
 					</h3>
 					</div>
 				</div>
 			</div><!-- slide item 2 over -->
 		</div>
 		<nav class="slides-navigation">
 			<a href="#" class="next"><i class="arrow_carrot-right"></i></a>
 			<a href="#" class="prev"><i class="arrow_carrot-left"></i></a>
 		</nav>
 		<p class="goto-next">Services<a class="arrow animated ci bounce" href="#service-section"><i class="fa fa-angle-down"></i></a></p>
 	</div>
 	<!-- Slider Section Over-->

 	<!-- Header Section -->
 	<header id="header-section" class="header-section">
 		<div class="col-md-2 col-sm-2 col-xs-6 logo-block">
 			<a href="#top"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="logo"/></a>
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
 						<li><a href="#top">Home</a></li>
 						<li><a href="#service-section">Services</a></li>
 						<li><a href="#our-work">Work</a></li>
 						<li><a href="#our-genius">Team</a></li>
 						<li><a href="<?php bloginfo('template_directory'); ?>/blog">Blog</a></li>
 						<li><a href="#project-section">Contact</a></li>
 					</ul>
 				</div><!--/.nav-collapse -->
 			</nav>
 		</div>
 	</header>
