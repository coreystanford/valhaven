<?php require './views/header.php'; ?>

	<div id="video-container" class="clearfix">
	
		<video muted poster="images/<?php echo $poster; ?>" id="ch_video" preload="metadata">
			<source  src="videos/<?php echo $webm; ?>" type='video/webm; codecs="vp8, vorbis"'><!--LIST WEBM FIRST - Chrome bug-->	
			<source  src="videos/<?php echo $mp4; ?>" type="video/mp4" >
			<source src="videos/<?php echo $ogv; ?>">
			<!-- <track id="nav" src="videos/vtt/navigation.vtt" kind="chapters" srclang="en"></track> -->
			<!-- <track id="cc" src="videos/vtt/captions.vtt" kind="captions" label="captions" srclang="en" default></track> -->
			<p class="update_browser">Your browser is too old to support the features of this website.  Please update your browser.</p>
		</video>

	</div>

<?php require './views/footer.php'; ?>