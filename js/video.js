// --------------------------- //
// ---- REGISTER CONTROLS ---- //
// --------------------------- //

var VidControl = (function(){

	// ------------------- //
 	// ---- VARIABLES ---- //
 	// ------------------- //

	var width = window.innerWidth,
		offScreen = false, down = false, moving = false,
		posX, perc, curPos, value,
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
		controls = document.getElementById("controls");

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
 		prev = document.getElementById("prev");

 	// ------------------- //
 	// ---- FUNCTIONS ---- //
 	// ------------------- //

 	return { 

 		// ---- PLAY + PAUSE ---- //

 		playPause: function(evt){
 			evt.preventDefault();
	 		if (video.paused == true) {
				video.play();
				playButton.children[0].setAttribute("class", "fa fa-pause");
				VidControl.slideOffscreen();
			} else {
				video.pause();
				playButton.children[0].setAttribute("class", "fa fa-play");
				VidControl.slideOnscreen();
			}
	 	},

	 	spaceDown: function(evt) {
		    if (evt.keyCode == 32) {
		    	evt.preventDefault();
		    	if(video.paused == true && video.ended == false) {
		    		video.play();
		    		playButton.children[0].setAttribute("class", "fa fa-pause");
		    		VidControl.slideOffscreen();
		    	} 
		    	else if(video.paused == true && video.ended == true){
		    		playButton.children[0].setAttribute("class", "");
		    	} else {
		    		video.pause();
		    		playButton.children[0].setAttribute("class", "fa fa-play");
		    		VidControl.slideOnscreen();
		    	}
		    }
		},

		// ---- VOLUME ---- //

		prevVol: volumeBar.value,

		muteUnmute: function() {
			VidControl.slideOnscreen();
			if (volumeBar.value != 0) {
				video.muted = true;
				VidControl.prevVol = video.volume;
				volumeBar.value = 0;
				//volumeButton.innerHTML = "Muted";
			} else {
				video.muted = false;
				video.volume = volumeBar.value = VidControl.prevVol;
				// volumeButton.innerHTML = "";
			}
		},

		volume: function() {
			video.volume = volumeBar.value;
			if(video.volume === 0){
				video.muted = true;
			} else {
				video.muted = false;
			}
		},

		volumeEnter: function() {
			volumeBar.style.display = "block";
			VidControl.slideOnscreen();
		},

		volumeLeave: function() {
			volumeBar.style.display = "none";
			VidControl.slideOffscreen();
		},

		volumeShow: function() {
			volumeBar.style.display = "block";
		},

		volumeHide: function() {
			volumeBar.style.display = "none";
		},

		// ---- FULLSCREEN ---- //

		enterFullscreen: function(){
			if (screenfull.enabled) {
				if(screenfull.isFullscreen){
					screenfull.exit();
					localStorage.setItem('fullscreen', 'false');
				} else {
					screenfull.request();
					localStorage.setItem('fullscreen', 'true');
				}
		    }
		},

		// ---- PROGRESS BAR ---- //

		trackProgress: function(){
			// console.log(video);
			if(video.buffered.length - 1 === 0){
				var bufferedEnd = video.buffered.end(video.buffered.length - 1);
				var duration =  video.duration;
				var bufferPerc = ((bufferedEnd / duration) * 100);
		  	}
		  	buffer.style.width = bufferPerc + "%";
		},

		updateTime: function() {
			if(video.duration > 0) { 
				// Calculate the slider value
				value = (100 / video.duration) * video.currentTime;
				curPos = (video.currentTime / video.duration) * 100;
				
				// Update the slider value
				progressBar.value = value;
				indicator.style.left = "calc(" + curPos + "% - 10px)";
			}
		},

		handleProgressMouseDown: function(evt){
			posX = evt.clientX;
			VidControl.progressDown(posX);
		},

		handleProgressMouseMove: function(evt){
			posX = evt.clientX;
			VidControl.progressMove(posX);
		},

		handleProgressTouchDown: function(evt){
			posX = evt.touches[0].clientX;
			VidControl.progressDown(posX);
		},

		handleProgressTouchMove: function(evt){
			posX = evt.touches[0].clientX;
			VidControl.progressMove(posX);
		},

		handleProgressTouchUp: function(){
			VidControl.progressUp();
			time.style.display = "none";
		},

		progressDown: function(posX){
			width = window.innerWidth;

			progressContainer.style.cursor = "-webkit-grabbing";
			progressContainer.style.cursor = "-moz-grabbing";

			video.pause();
			playButton.children[0].setAttribute("class", "fa fa-play");
			VidControl.slideOnscreen();

			down = true;

			perc = posX / width;
			video.currentTime = video.duration * perc;
			progressBar.value = (100 / video.duration) * video.currentTime;

			curPos = perc * width - 10;
			indicator.style.left = curPos + "px";
			time.style.left = posX + "px";
			time.style.display = "block";
		},

		progressMove: function(pos){
			width = window.innerWidth;
			perc = pos / width;

			timeFullSec = video.duration * perc;
			timeMin = Math.floor(timeFullSec / 60);
			timeSec = Math.round(timeFullSec % 60);

			if(timeSec < 10){ timeSec = "0" + timeSec; }

			time.innerHTML = timeMin + ":" + timeSec;
			time.style.left = posX + "px";
			time.style.display = "block";

			VidControl.slideOnscreen();

			if(down){
				moving = true;

				progressContainer.style.cursor = "-webkit-grabbing";
				progressContainer.style.cursor = "-moz-grabbing";
				
				perc = pos / width;
				progressBar.value = (100 / video.duration) * (video.duration * perc);
				curPos = perc * width - 10;

				indicator.style.left = curPos + "px";
			}
		},

		progressUp: function(){
			if(moving){		
				moving = false;

				video.currentTime = video.duration * perc;	
			}
			
			down = false;

			progressContainer.style.cursor = "default";
			progressContainer.style.cursor = "default";

			video.play();
			playButton.children[0].setAttribute("class", "fa fa-pause");
			VidControl.slideOffscreen();
		},

		progressLeave: function(){
			if(video.paused != true){
				VidControl.slideOffscreen();
			}
			time.style.display = "none";
		},

		// ---- SIDEBARS, CONTROLS + NAV TIMEOUT ---- //

		timeout: null,

		slideOffscreen: function(){
			clearTimeout(VidControl.timeout);
			VidControl.timeout = setTimeout(function(){
				nav.style.top = "calc(-5% - 50px)";
				if(prev) {prev.style.left = "calc(-3% - 50px)";}
				social.style.bottom = "calc(-5% - 50px)";

				map.style.left = "calc(-30% - 50px)";
				notebook.style.right = "calc(-30% - 50px)";

				playContainer.style.visibility = "hidden";
				playContainer.style.opacity = 0;
				controls.style.bottom = "calc(-3% - 50px)";
				progressContainer.style.bottom = "calc(-1% - 50px)";

				video.style.cursor = "none";
				offScreen = true;
			}, 2000);
		},

		slideOnscreen: function(){
			clearTimeout(VidControl.timeout);
			nav.style.top = "5%";
			if(prev) {prev.style.left = "3%";}
			social.style.bottom = "5%";

			map.style.left = "calc(-30% + 10px)";
			notebook.style.right = "calc(-30% + 10px)";

			playContainer.style.visibility = "visible";
			playContainer.style.opacity = 1;
			controls.style.bottom = "3%";
			progressContainer.style.bottom = "-2px";

			video.style.cursor = "default";
			offScreen = false;
		},

		handleMouseMove: function(evt){
			evt.preventDefault();
			if(video.paused === false && video.ended === false && offScreen === false ){
				VidControl.slideOffscreen();
			}
			if(video.paused === false && offScreen){
				VidControl.slideOnscreen();
			} 
			if(video.paused === true){
				VidControl.slideOnscreen();
			}
		},

		// ---- VIDEO INITIALIZERS ---- //

		// "canplaythrough" works perfectly on all browsers when combined with preload='auto'
		// (and it has the added benefit of being a very small amount of code),
		// but we cannot track the amount of video loaded using this method
		// it does, however, get around the issue within Safari where the browser 
		// will wait for the entire video to load before firing the 'progress' event

		// https://gist.github.com/millermedeiros/891886

		initVideo: function(){
			video.play();
			// if(video.readyState !== 4){ // HAVE_ENOUGH_DATA
				video.addEventListener('canplay', VidControl.onCanPlay, false);
				video.addEventListener('load', VidControl.onCanPlay, false); // add load event as well to avoid errors, sometimes 'canplaythrough' won't dispatch.
				video.pause();
			// }
		},

		onCanPlay: function(){
			video.removeEventListener('canplay', VidControl.onCanPlay, false);
			video.removeEventListener('load', VidControl.onCanPlay, false);
			main.removeChild(preloader);
		},

		initVideoThrough: function(){
			video.play();
			// if(video.readyState !== 4){ // HAVE_ENOUGH_DATA
				video.addEventListener('canplaythrough', VidControl.onCanPlayThrough, false);
				video.addEventListener('load', VidControl.onCanPlayThrough, false); // add load event as well to avoid errors, sometimes 'canplaythrough' won't dispatch.
				video.pause();
			// }
		},

		onCanPlayThrough: function(){
			video.removeEventListener('canplaythrough', VidControl.onCanPlayThrough, false);
			video.removeEventListener('load', VidControl.onCanPlayThrough, false);
			main.removeChild(preloader);
			VidControl.slideOffscreen();
			video.play();
			playButton.children[0].setAttribute("class", "fa fa-pause");
		}

	}

})();


// ------------------------- //
// ---- REGISTER EVENTS ---- //
// ------------------------- //

(function(){

	// Video
	var video = document.getElementById("ch_video");	

	// Play/Pause + Controls
	var playButton = document.getElementById("play-pause"),
		controls = document.getElementById('controls'),
		fullScreenButton = document.getElementById("full-screen"),
		volumeButton = document.getElementById("volume-icon"),
 		volumeBar = document.getElementById("volume-bar");

	// Progress Bar
	var progressContainer = document.getElementById("progress-container"),
		progressBar = document.getElementById("progress-bar"),
		indicator = document.getElementById("indicator"),
		time = document.getElementById('time'),
		buffer = document.getElementById('buffered-amount');

 	// Nav
 	var prev = document.getElementById("prev"),
 		social = document.getElementById('social');
	
	// ---------------------- //
 	// ---- PLAY + PAUSE ---- //
 	// ---------------------- //

 	// ---- MOUSE EVENTS ---- //

 	video.addEventListener("click", VidControl.playPause);

	playButton.addEventListener("click", VidControl.playPause);

	// ---- TOUCH EVENTS ---- //

	video.addEventListener("touchstart", VidControl.playPause);

	playButton.addEventListener("touchstart", VidControl.playPause);

	// ---- KEYBOARD EVENTS ---- //

	document.addEventListener('keydown', VidControl.spaceDown, false);

	// ------------------ //
	// ---- CONTROLS ---- //
	// ------------------ //

	controls.addEventListener("mouseenter",	VidControl.slideOnscreen);
	controls.addEventListener("mouseleave",	VidControl.slideOffscreen);

	// ----------------------- //
 	// ---- MUTE + VOLUME ---- //
 	// ----------------------- //

 	// ---- MOUSE EVENTS ---- //

	volumeBar.style.display = "none";

	// Event listener for the mute button
	volumeButton.addEventListener("click", VidControl.muteUnmute);
	volumeButton.addEventListener("mouseenter", VidControl.volumeShow);
	volumeButton.addEventListener("mouseleave", VidControl.volumeHide);
	volumeBar.addEventListener("mouseenter", VidControl.volumeEnter);
	volumeBar.addEventListener("mouseleave", VidControl.volumeLeave);

	// ---- TOUCH EVENTS ---- //

	// Event listener for a click on the volume button (to mute/unmute)
	volumeButton.addEventListener("touchstart", VidControl.muteUnmute);

	// ---- AUDIO EVENTS ---- //

	volumeBar.addEventListener("change", VidControl.volume);

	// -------------------- //
 	// ---- FULLSCREEN ---- //
 	// -------------------- //

 	// ---- MOUSE EVENTS ---- //

	fullScreenButton.addEventListener('click', VidControl.enterFullscreen);

	// ---- TOUCH EVENTS ---- //

	//fullScreenButton.addEventListener("touchstart", VidControl.enterFullscreen);

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

 	// ---- VIDEO EVENTS ---- //

 	// track the progress of the video + buffer
 	video.addEventListener('progress', VidControl.trackProgress);

	// Update the progress bar as the video plays
	video.addEventListener("timeupdate", VidControl.updateTime);

	// ---- MOUSE EVENTS ---- //

	// Change progress bar position on mouse down + pause video
	progressContainer.addEventListener("mousedown", VidControl.handleProgressMouseDown);

	// Change progress bar position as mouse moves
	progressContainer.addEventListener("mousemove", VidControl.handleProgressMouseMove);

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("mouseup", VidControl.progressUp);

	// Hide the time tooltip when mouse leave container
	progressContainer.addEventListener("mouseleave", VidControl.progressLeave);

	// ---- TOUCH EVENTS ---- //

	// Change progress bar position on mouse down + pause video
	progressContainer.addEventListener("touchstart", VidControl.handleProgressTouchDown);

	// Change progress bar position as mouse moves
	progressContainer.addEventListener("touchmove", VidControl.handleProgressTouchMove);

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("touchend", VidControl.handleProgressTouchUp);
	
	// ---------------------------------- //
 	// ---- SHOW/HIDE NAV + CONTROLS ---- //
 	// ---------------------------------- //

 	// ---- MOUSE EVENTS ---- //

	video.addEventListener('mousemove', VidControl.handleMouseMove);

	// ---- TOUCH EVENTS ---- //

	video.addEventListener('touchstart', VidControl.handleMouseMove);

	// ---- VIDEO EVENTS ---- //

	video.addEventListener('ended', function(){
		VidControl.slideOnscreen();
		playButton.children[0].setAttribute("class", "");
		if(prev) {prev.style.left = "3%";}
	});

})();