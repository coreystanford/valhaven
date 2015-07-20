(function(){

	var width = window.innerWidth,
		loading = true, offScreen = false, down = false, moving = false, first = true,
		timeout, posX, perc, curPos, value,
		timeFullSec, timeMin, timeSec; 

	// Container, Preloader + Video
	var main = document.getElementById('main');
		container = document.getElementById('video-container'),
		preloader = document.getElementById("preloader"), 
		preloadBar = document.getElementById('preloader-bar'),
		percentLoaded = document.getElementById('percent-loaded');
		video = document.getElementById("ch_video");	

	// Play/Pause + Controls
	var playContainer = document.getElementById("play-pause-container"),
		playButton = document.getElementById("play-pause"),
		controls = document.getElementById("controls"),
		fullScreenButton = document.getElementById("full-screen"),
		information = document.getElementById("information");

	// Progress Bar
	var progressContainer = document.getElementById("progress-container"),
		progressBar = document.getElementById("progress-bar"),
		indicator = document.getElementById("indicator"),
		time = document.getElementById('time'),
		buffer = document.getElementById('buffered-amount');

	// Volume
	var volumeButton = document.getElementById("volume-icon"),
 		volumeBar = document.getElementById("volume-bar");

 	// Navigation
 	var nav = document.getElementById("navigation"),
 		social = document.getElementById("social"),
 		map = document.getElementById("map"),
 		notebook = document.getElementById("notebook"),
 		next = document.getElementById("next"),
 		prev = document.getElementById("prev");

 	// ------------------- //
 	// ---- FUNCTIONS ---- //
 	// ------------------- //

 	function playPause(){
 		if (video.paused == true) {
			video.play();
		} else {
			video.pause();
		}
 	}

	function trackProgress(){
		var bufferedEnd = video.buffered.end(video.buffered.length - 1);
		var duration =  video.duration;
		var bufferPerc = ((bufferedEnd / duration) * 100);
	  	buffer.style.width = bufferPerc + "%";
	}

	function updateTime() {
		if(video.duration > 0) { 
			// Calculate the slider value
			value = (100 / video.duration) * video.currentTime;
			curPos = (video.currentTime / video.duration) * 100;
			// Update the slider value
			progressBar.value = value;

			indicator.style.left = "calc(" + curPos + "% - 10px)";
		}
	}

	function progressDown(posX){
		width = window.innerWidth;
		video.pause();
		down = true;
		perc = posX / width;
		video.currentTime = video.duration * perc;
		progressBar.value = (100 / video.duration) * video.currentTime;
		curPos = perc * width - 10;
		indicator.style.left = curPos + "px";
		time.style.left = posX + "px";
		time.style.display = "block";
	}

	function progressMove(pos){
		posX = pos;
		perc = posX / width;

		timeFullSec = video.duration * perc;
		timeMin = Math.floor(timeFullSec / 60);
		timeSec = Math.round(timeFullSec % 60);

		if(timeSec < 10){ timeSec = "0" + timeSec; }

		time.innerHTML = timeMin + ":" + timeSec;
		time.style.left = posX + "px";
		time.style.display = "block";

		if(down){
			moving = true;
			posX = pos;
			perc = posX / width;
			progressBar.value = (100 / video.duration) * (video.duration * perc);
			curPos = perc * width - 10;
			indicator.style.left = curPos + "px";
		}
	}

	function progressUp(){
		if(moving){		
			moving = false;
			video.currentTime = video.duration * perc;	
		}

		down = false;
		video.play();
	}

	function slideOffscreen(){
		clearTimeout(timeout);
		timeout = setTimeout(function(){
			nav.style.top = "calc(-5% - 50px)";
			map.style.left = "calc(-30% - 50px)";
			notebook.style.right = "calc(-30% - 50px)";
			controls.style.bottom = "calc(-3% - 50px)";
			social.style.bottom = "calc(-5% - 50px)";
			next.style.right = "calc(-3% - 50px)";
			if(prev) {prev.style.left = "calc(-3% - 50px)";}
			playContainer.style.visibility = "hidden";
			playContainer.style.opacity = 0;
			progressContainer.style.bottom = "calc(-1% - 50px)";
			video.style.cursor = "none";
			offScreen = true;
		}, 2000);
	}

	function slideOnscreen(){
		clearTimeout(timeout);
		nav.style.top = "5%";
		map.style.left = "calc(-30% + 10px)";
		notebook.style.right = "calc(-30% + 10px)";
		controls.style.bottom = "3%";
		social.style.bottom = "5%";
		next.style.right = "3%";
		if(prev) {prev.style.left = "3%";}
		playContainer.style.visibility = "visible";
		playContainer.style.opacity = 1;
		progressContainer.style.bottom = "-2px";
		video.style.cursor = "default";
		offScreen = false;
	}
	
	// ---------------------- //
 	// ---- PLAY + PAUSE ---- //
 	// ---------------------- //

 	video.addEventListener("click", function(evt) {
		evt.preventDefault();
		playPause();
	});

	playButton.addEventListener("click", function(evt) {
		evt.preventDefault();
		playPause();
	});

	video.addEventListener("touchstart", function(evt) {
		evt.preventDefault();
		playPause();
	});

	playButton.addEventListener("touchstart", function(evt) {
		evt.preventDefault();
		playPause();
	});

	video.onplay = (function(){
		slideOffscreen();
		playButton.innerHTML = "Pause";
	});

	video.onpause = (function(){
		slideOnscreen();
		playButton.innerHTML = "Play";
	});

	// Spacebar control for play/pause
	document.addEventListener('keydown', function(evt) {
	    if (evt.keyCode == 32) {
	    	evt.preventDefault();
	    	if(video.paused == true && video.ended == false) {
	    		video.play();
	    	} 
	    	else if(video.paused == true && video.ended == true){
	    		playButton.innerHTML = "";
	    	} else {
	    		video.pause();
	    	}
	    }
	  }, false);

	// ----------------------- //
 	// ---- MUTE + VOLUME ---- //
 	// ----------------------- //

	volumeBar.style.display = "none";

	// Event listener for the mute button
	volumeButton.addEventListener("click", function() {
		if (video.muted == false) {
			video.muted = true;
			volumeBar.value = 0;
			//volumeButton.innerHTML = "Muted";
		} else {
			video.muted = false;
			video.volume = volumeBar.value;
			// volumeButton.innerHTML = "";
		}
	});

	// Event listener for the mute button
	volumeButton.addEventListener("touchstart", function() {
		if (video.muted == false) {
			video.muted = true;
			volumeBar.value = 0;
			//volumeButton.innerHTML = "Muted";
		} else {
			video.muted = false;
			video.volume = volumeBar.value;
			// volumeButton.innerHTML = "";
		}
	});

	volumeBar.addEventListener("change", function() {
		video.volume = volumeBar.value;
		// if(video.volume === 0){
		// 	video.muted = true;
		// } else {
		// 	video.muted = false;
		// }
	});

	volumeButton.addEventListener("mouseenter", function() {
		volumeBar.style.display = "block";
	});

	volumeButton.addEventListener("mouseleave", function() {
		volumeBar.style.display = "none";
	});

	volumeBar.addEventListener("mouseenter", function() {
		volumeBar.style.display = "block";
	});

	volumeBar.addEventListener("mouseleave", function() {
		volumeBar.style.display = "none";
	});

	// -------------------- //
 	// ---- FULLSCREEN ---- //
 	// -------------------- //

	// Event listener for the full-screen button
	fullScreenButton.addEventListener("click", function(evt) {
		if (video.requestFullscreen) {
			video.requestFullscreen();
		} else if (video.mozRequestFullScreen) {
			video.mozRequestFullScreen(); // Firefox
		} else if (video.webkitRequestFullscreen) {
			video.webkitRequestFullscreen(); // Chrome and Safari
		}
	});

	// Event listener for the full-screen button
	fullScreenButton.addEventListener("touchstart", function(evt) {
		if (video.requestFullscreen) {
			video.requestFullscreen();
		} else if (video.mozRequestFullScreen) {
			video.mozRequestFullScreen(); // Firefox
		} else if (video.webkitRequestFullscreen) {
			video.webkitRequestFullscreen(); // Chrome and Safari
		}
	});

	// ---------------------- //
 	// ---- PROGRESS BAR ---- //
 	// ---------------------- //

 	// using 'progress' would be optimal, as we can track the amount loaded.
 	// However, Safari does not play nice, and only fires this event after 
 	// the whole video has loaded when using preload='auto', and doesn't load 
 	// enough of the video otherwise!
 	// Thus, we cannot use this in the preloader, only for the in-video buffered-indicator
 	
 	// preload attribute tests:
 	// http://www.stevesouders.com/blog/2013/04/12/html5-video-preload/

 	// track the progress of the video + buffer
 	video.addEventListener('progress', trackProgress);

	// Update the progress bar as the video plays
	video.addEventListener("timeupdate", updateTime);

	// ---- CLICK EVENTS ---- //

	// Change progress bar position on mouse down + pause video
	progressContainer.addEventListener("mousedown", function(evt) {
		posX = evt.clientX;
		progressDown(posX);
	});

	// Change progress bar position as mouse moves
	progressContainer.addEventListener("mousemove", function(evt){
		posX = evt.clientX;
		progressMove(posX);
	});

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("mouseup", progressUp);

	// Hide the time tooltip when mouse leave container
	progressContainer.addEventListener("mouseleave", function(){
		time.style.display = "none";
	});

	// ---- TOUCH EVENTS ---- //

	// Change progress bar position on mouse down + pause video
	progressContainer.addEventListener("touchstart", function(evt) {
		posX = evt.touches[0].clientX;
		progressDown(posX);
	});

	// Change progress bar position as mouse moves
	progressContainer.addEventListener("touchmove", function(evt){
		posX = evt.touches[0].clientX;
		progressMove(posX);
	});

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("touchend", function(){
		progressUp();
		time.style.display = "none";
	});
	
	// ---------------------------------- //
 	// ---- SHOW/HIDE NAV + CONTROLS ---- //
 	// ---------------------------------- //

	video.addEventListener('mousemove', function(evt){
		evt.preventDefault();
		if(video.paused === false && video.ended === false && offScreen === false ){
			slideOffscreen();
		}
		if(video.paused === false && offScreen){
			slideOnscreen();
		} 
		if(video.paused === true){
			slideOnscreen();
		}
	});

	video.addEventListener('touchstart', function(evt){
		evt.preventDefault();
		if(video.paused === false && video.ended === false && offScreen === false ){
			slideOffscreen();
		}
		if(video.paused === false && offScreen){
			slideOnscreen();
		} 
		if(video.paused === true){
			slideOnscreen();
		}
	});

	video.addEventListener('ended', function(){
		slideOnscreen();

		playButton.innerHTML = "";

		next.style.right = "3%";
		if(prev) {prev.style.left = "3%";}
	});

})();