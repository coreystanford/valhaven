<!DOCTYPE html>
<html>
<head>
	<title>Valhaven Island | <?php echo $title; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="<?php echo IMAGE_PATH; ?>favicon.ico">
	<meta property="og:title" content="Mysterious Illness Claims 13 Lives in Valhaven"/>
	<meta property="og:site_name" content="Valhaven Island"/>
	<meta property="og:description" content="An interactive transmedia project.">
	<meta property="og:url" content="<?php echo ROOT_HREF; ?>"/>
	<meta property="og:image" content="<?php echo IMAGE_PATH; ?>valhaven-sharable.jpg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@hctransmedia">
	<meta name="twitter:title" content="Mysterious Illness Claims 13 Lives in Valhaven" />
	<meta name="twitter:description" content="An interactive transmedia project." />
	<meta name="twitter:url" content="<?php echo ROOT_HREF; ?>"/>
	<meta name="twitter:image" content="<?php echo IMAGE_PATH; ?>valhaven-sharable.jpg" />
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,300italic,400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Loved+by+the+King' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH; ?>main.css">
	<?php foreach ($headScripts as $script): ?>

		<script src="<?php echo RSC_PATH . $script; ?>" type="text/javascript" charset="utf-8"></script>

	<?php endforeach ?>
</head><!-- /head -->
<body id="body">

	<header id="header" class="" role="banner">
		
		<nav role="navigation" id="navigation">
			
			<ul>
				<li><a id="homepage" href="<?php echo ROOT_HREF; ?>">HOME</a></li>
				<li><a id="aboutpage" href="<?php echo ROOT_HREF; ?>about">ABOUT</a></li>
			</ul>
			
		</nav><!-- /navigation -->

		<div id="map" role="complementary">
			
			<span role="button" id="map-btn"><img src="<?php echo IMAGE_PATH; ?>icons/map.png"></span>

			<div id="map-container">
				
				<img id="press" src="<?php echo IMAGE_PATH; ?>map/press.png">
				<img id="hospital" src="<?php echo IMAGE_PATH; ?>map/hospital.png">
				<img id="cdc" src="<?php echo IMAGE_PATH; ?>map/cdc.png">
				<img id="apartment" src="<?php echo IMAGE_PATH; ?>map/apartment.png">
				<img id="botanical" src="<?php echo IMAGE_PATH; ?>map/botanical.png">
				<img id="office" src="<?php echo IMAGE_PATH; ?>map/office.png">
				<img id="home" src="<?php echo IMAGE_PATH; ?>map/home.png">

				<img id="mapBackground" src="<?php echo IMAGE_PATH; ?>map/map-bg.png">

			</div>

		</div><!-- /map -->

		<div id="notebook" role="complementary">
			
			<span role="button" id="notebook-btn"><img src="<?php echo IMAGE_PATH; ?>icons/notebook.png"></span>

			<div id="notes">
				
				<h2 id="noteTitle">Notes</h2>	

				<ul id="note">
					
				</ul>

				<div id="lines">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>

			</div>

		</div><!-- /notebook -->

		<div id="social">

			<ul>
				<!-- <div class="fb-share-button" data-href="http://www.seanwaynedoyle.com/txm2015/valhaven/" data-layout="button_count"><img src="<?php echo IMAGE_PATH; ?>icons/facebook.png"></div> -->
				<li><a id="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fmediastudies.humber.ca%2Ftransmedia%2F2015%2F" target="_blank"><img src="<?php echo IMAGE_PATH; ?>icons/facebook.png"></a></li>
				<li><a id="twitter" href="https://twitter.com/intent/tweet?url=http:%2F%2Fmediastudies.humber.ca%2Ftransmedia%2F2015%2F" target="_blank"><img src="<?php echo IMAGE_PATH; ?>icons/twitter.png"></a></li>
			</ul>

		</div><!-- /social -->

	</header><!-- /header -->

	<main id="main" role="main" class="clearfix">