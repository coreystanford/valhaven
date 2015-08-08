<?php require HEADER; ?>

	<!-- Preloader -->
	<div id='preloader' class="preloader">
		<div id="inner-preload-icon">
			<h1 id="preloader-icon"></h1>
		</div>
	</div>

	<div id="video-container" class="clearfix">

		<!-- Video Source/Data -->
		<video poster="<?php echo IMAGE_PATH . $poster; ?>" id="ch_video" preload="auto" ref="<?php echo MODAL_PATH . $modal; ?>">
			<source  src="<?php echo VIDEO_PATH . $mp4; ?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' ><!-- List MP4 First - Server issue -->	
			<source  src="<?php echo VIDEO_PATH . $webm; ?>" type='video/webm; codecs="vp8, vorbis"'>
			<source src="<?php echo VIDEO_PATH . $ogv; ?>" type='video/ogg; codecs="theora, vorbis"'>
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
		</div>

		<!-- Progress Bar -->
		<div id="progress-container">
			<span id="time"></span>
			<span id="indicator"></span>
			<progress id="progress-bar" value="0" max="100"></progress>
			<span id="buffered-amount"></span>
		</div>

		<!-- Navigation Arrows -->
		<a href="<?php echo ROOT_HREF; ?>" id="prev"><img src="<?php echo IMAGE_PATH; ?>icons/prev.png"></a>

	</div>

	<audio controls class="hide" id="newNote">
		<source src="<?php echo AUDIO_PATH; ?>newNote2.mp3" type="audio/mpeg">
		<source src="<?php echo AUDIO_PATH; ?>newNote2.wav" type="audio/wav">
		Your browser does not support the audio element.
	</audio>

<?php require FOOTER; ?>