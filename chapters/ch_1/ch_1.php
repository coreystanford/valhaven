<?php require HEADER; ?>

	<div id="video-container" class="clearfix">
	
		<div id='preloader' class="preloader">
			<div id="inner-preload">
				<span class="preloader-icon">Loading...</span>
				<h4 id="percent-loaded">0%</h4>
				<progress id="preloader-bar" value="0" max="10"></progress>
			</div>
		</div>

		<!-- Video Source/Data -->
		<video autoplay poster="<?php echo IMAGE_PATH . $poster; ?>" id="ch_video" preload="metadata" ref="<?php echo MODAL_PATH . $modal; ?>">
			<source  src="<?php echo VIDEO_PATH . $mp4; ?>" type="video/mp4" ><!--LIST MP4 FIRST - Server issue-->	
			<source  src="<?php echo VIDEO_PATH . $webm; ?>" type='video/webm; codecs="vp8, vorbis"'>
			<source src="<?php echo VIDEO_PATH . $ogv; ?>">
			<!-- <track id="nav" src="videos/vtt/navigation.vtt" kind="chapters" srclang="en"></track> -->
			<!-- <track id="cc" src="videos/vtt/captions.vtt" kind="captions" label="captions" srclang="en" default></track> -->
			<p class="update_browser">Your browser is too old to support the features of this website.  Please update your browser.</p>
		</video>

		<!-- Play/Pause Button -->
		<div id="play-pause-container">
			<button type="button" id="play-pause">Play</button>
		</div>

		<!-- Video Controls -->
		<div id="controls">
			<input type="range" id="volume-bar" min="0" max="1" step="0.1" value="1" title="Volume Range">
			<button type="button" id="volume-icon" title="Volume Control"><img src="<?php echo IMAGE_PATH; ?>icons/volume.png"></button>
			<button type="button" id="full-screen" title="Full Screen"><img src="<?php echo IMAGE_PATH; ?>icons/fullscreen.png"></button>
			<button type="button" id="info" title="Information"><img src="<?php echo IMAGE_PATH; ?>icons/info.png"></button>
		</div>

		<!-- Progress Bar -->
		<div id="progress-container">
			<span id="time"></span>
			<span id="indicator"></span>
			<progress id="progress-bar" value="0" max="100"></progress>
			<span id="buffered-amount"></span>
		</div>

		<a href="<?php echo CH_PATH . $next; ?>" id="next"><img src="<?php echo IMAGE_PATH; ?>icons/next.png"></a>

	</div>

<?php require FOOTER; ?>