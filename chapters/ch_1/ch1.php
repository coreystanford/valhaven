<?php require HEADER; ?>

	<div id="video-container" class="clearfix">
	
		<video muted poster="<?php echo IMAGE_PATH . $poster; ?>" id="ch_video" preload="metadata">
			<source  src="<?php echo VIDEO_PATH . $webm; ?>" type='video/webm; codecs="vp8, vorbis"'><!--LIST WEBM FIRST - Chrome bug-->	
			<source  src="<?php echo VIDEO_PATH . $mp4; ?>" type="video/mp4" >
			<source src="<?php echo VIDEO_PATH . $ogv; ?>">
			<!-- <track id="nav" src="videos/vtt/navigation.vtt" kind="chapters" srclang="en"></track> -->
			<!-- <track id="cc" src="videos/vtt/captions.vtt" kind="captions" label="captions" srclang="en" default></track> -->
			<p class="update_browser">Your browser is too old to support the features of this website.  Please update your browser.</p>
		</video>

	</div>

<?php require FOOTER; ?>