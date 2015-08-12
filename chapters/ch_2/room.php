<?php require HEADER; ?>

	<div class="hide">
		<div id="video-container" class="clearfix">

			<!-- Video Source/Data -->
			<video id="ch_video"></video>

			<!-- Play/Pause Button -->
			<div id="play-pause-container">
				<button type="button" id="play-pause"><i class="fa fa-play"></i></button>
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
		</div>
	</div>

	<div id="room-container">
	
		<div id="room-inner-container">
			
			<div id="paint1" class="flash"><img class="hidden" src="<?php echo IMAGE_PATH; ?>paint_1.png"></div>
			<div id="paint2" class="flash"><img class="hidden" src="<?php echo IMAGE_PATH; ?>paint_2.png"></div>
			
			<div id="gardiner-id" class="flash">
				
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>id.jpg">
					<div id="idText">
						<div>
							<p>Great Work!</p>
							<p>You found the ID card.</p>
							<p>Now you can go visit the Botanical Research Facility to continue the story.</p>
						</div>
						<button type="button" class="btn" id="goToBot">Continue</button>
					</div>
				</div>

			</div>

			<div id="radio" class="flash">
				<audio controls class="hide" id="playRadio">
					<source src="<?php echo AUDIO_PATH; ?>radio.mp3" type="audio/mpeg">
					<source src="<?php echo AUDIO_PATH; ?>radio.wav" type="audio/wav">
					Your browser does not support the audio element.
				</audio>
			</div>

			<img id="room-bg" src="<?php echo IMAGE_PATH; ?>room.jpg">

		</div>

		<!-- Navigation Arrows -->
		<a href="<?php echo ROOT_HREF; ?>" id="prev"><img src="<?php echo IMAGE_PATH; ?>icons/prev.png"></a>

	</div>

	<audio controls class="hide" id="newNote">
		<source src="<?php echo AUDIO_PATH; ?>newNote1.mp3" type="audio/mpeg">
		<source src="<?php echo AUDIO_PATH; ?>newNote1.wav" type="audio/wav">
		Your browser does not support the audio element.
	</audio>

<?php require FOOTER; ?>