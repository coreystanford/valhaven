<!DOCTYPE html>
<html>
<head>
	<title>Valhaven Island | <?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="<?php echo $keywords; ?>">
	<meta name="description" content="<?php echo $title; ?>">
	<meta property="og:title" content="Valhaven Island: <?php echo $title; ?>"/>
	<meta property="og:site_name" content="Valhaven Island"/>
	<meta property="og:description" content="<?php echo $description; ?>">
	<!-- <link rel="icon" type="image/png" href="favicon.ico"> -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>main.css">
	<script src="<?php echo JS_PATH; ?>jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="<?php echo JS_PATH; ?>modernizr.js" type="text/javascript"></script>
	<script src="<?php echo JS_PATH; ?>app.js" type="text/javascript" charset="utf-8" async></script>
</head><!-- /head -->
<body>

	<header id="header" class="" role="banner">
		
		<nav role="navigation" id="navigation">
			
			<ul>
				<li><a href="<?php echo ROOT_HREF; ?>">HOME</a></li>
				<li><a href="<?php echo ROOT_HREF; ?>about">ABOUT</a></li>
			</ul>
			
		</nav><!-- /navigation -->

		<div id="map" role="complementary">
			
			<span role="button" id="map-btn"><img src="<?php echo IMAGE_PATH; ?>icons/map.png"></span>

			

		</div><!-- /map -->

		<div id="notebook" role="complementary">
			
			<span role="button" id="notebook-btn"><img src="<?php echo IMAGE_PATH; ?>icons/notebook.png"></span>

			

		</div><!-- /notebook -->

		<div id="social">

			<ul>
				<li><a id="facebook" href="#"><img src="<?php echo IMAGE_PATH; ?>icons/facebook.png"></a></li>
				<li><a id="twitter" href="#"><img src="<?php echo IMAGE_PATH; ?>icons/twitter.png"></a></li>
			</ul>

		</div><!-- /social -->

	</header><!-- /header -->

	<main id="main" role="main" class="clearfix">