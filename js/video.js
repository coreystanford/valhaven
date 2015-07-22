var vidControl = (function(){

	var width = window.innerWidth,
		offScreen = false, down = false, moving = false,
		posX, perc, curPos, value,
		timeFullSec, timeMin, timeSec;

	this.timeout;

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

 		playPause: function(){
	 		if (video.paused == true) {
	 			vidControl.slideOffscreen();
	 			playButton.innerHTML = "Pause";
				video.play();
			} else {
				vidControl.slideOnscreen();
				playButton.innerHTML = "Play";
				video.pause();
			}
	 	},

		trackProgress: function(){
			var bufferedEnd = video.buffered.end(video.buffered.length - 1);
			var duration =  video.duration;
			var bufferPerc = ((bufferedEnd / duration) * 100);
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

		progressDown: function(posX){
			width = window.innerWidth;
			video.pause();
			playButton.innerHTML = "Play";
			down = true;
			perc = posX / width;
			video.currentTime = video.duration * perc;
			progressBar.value = (100 / video.duration) * video.currentTime;
			curPos = perc * width - 10;
			indicator.style.left = curPos + "px";
			time.style.left = posX + "px";
			time.style.display = "block";
			vidControl.slideOnscreen();
		},

		progressMove: function(pos){
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
		},

		progressUp: function(){
			if(moving){		
				moving = false;
				video.currentTime = video.duration * perc;	
			}
			down = false;
			video.play();
			playButton.innerHTML = "Pause";
			vidControl.slideOffscreen();
		},

		slideOffscreen: function(){
			clearTimeout(this.timeout);
			this.timeout = setTimeout(function(){
				nav.style.top = "calc(-5% - 50px)";
				map.style.left = "calc(-30% - 50px)";
				notebook.style.right = "calc(-30% - 50px)";
				controls.style.bottom = "calc(-3% - 50px)";
				social.style.bottom = "calc(-5% - 50px)";
				if(prev) {prev.style.left = "calc(-3% - 50px)";}
				playContainer.style.visibility = "hidden";
				playContainer.style.opacity = 0;
				progressContainer.style.bottom = "calc(-1% - 50px)";
				video.style.cursor = "none";
				offScreen = true;
			}, 2000);
		},

		slideOnscreen: function(){
			clearTimeout(this.timeout);
			nav.style.top = "5%";
			map.style.left = "calc(-30% + 10px)";
			notebook.style.right = "calc(-30% + 10px)";
			controls.style.bottom = "3%";
			social.style.bottom = "5%";
			if(prev) {prev.style.left = "3%";}
			playContainer.style.visibility = "visible";
			playContainer.style.opacity = 1;
			progressContainer.style.bottom = "-2px";
			video.style.cursor = "default";
			offScreen = false;
		},

		handleMouseMove: function(evt){
			evt.preventDefault();
			if(video.paused === false && video.ended === false && offScreen === false ){
				vidControl.slideOffscreen();
			}
			if(video.paused === false && offScreen){
				vidControl.slideOnscreen();
			} 
			if(video.paused === true){
				vidControl.slideOnscreen();
			}
		},

		// "canplaythrough" works perfectly on all browsers when combibned with preload='auto'
		// (and it has the added benefit of being a very small amount of code),
		// but we cannot track the amount of video loaded using this method
		// it does, however, get around the issue within Safari where the browser 
		// will wait for the entire video to load before firing the 'progress' event

		// https://gist.github.com/millermedeiros/891886

		initVideo: function(){
			video.play();
			if(video.readyState !== 4){ // HAVE_ENOUGH_DATA
				video.addEventListener('canplay', vidControl.onCanPlay, false);
				video.addEventListener('load', vidControl.onCanPlay, false); // add load event as well to avoid errors, sometimes 'canplaythrough' won't dispatch.
				video.pause();
			}
		},

		onCanPlay: function(){
			video.removeEventListener('canplay', vidControl.onCanPlay, false);
			video.removeEventListener('load', vidControl.onCanPlay, false);
			main.removeChild(preloader);
		},

		initVideoThrough: function(){
			video.play();
			if(video.readyState !== 4){ // HAVE_ENOUGH_DATA
				video.addEventListener('canplaythrough', vidControl.onCanPlayThrough, false);
				video.addEventListener('load', vidControl.onCanPlayThrough, false); // add load event as well to avoid errors, sometimes 'canplaythrough' won't dispatch.
				video.pause();
			}
		},

		onCanPlayThrough: function(){
			video.removeEventListener('canplaythrough', vidControl.onCanPlayThrough, false);
			video.removeEventListener('load', vidControl.onCanPlayThrough, false);
			main.removeChild(preloader);
			vidControl.slideOffscreen();
			video.play();
			playButton.innerHTML = "Pause";
		}

	}

})();





(function(){

	// Container, Preloader + Video
	var video = document.getElementById("ch_video");	

	// Play/Pause + Controls
	var playButton = document.getElementById("play-pause"),
		fullScreenButton = document.getElementById("full-screen");

	// Progress Bar
	var progressContainer = document.getElementById("progress-container"),
		progressBar = document.getElementById("progress-bar"),
		indicator = document.getElementById("indicator"),
		time = document.getElementById('time'),
		buffer = document.getElementById('buffered-amount');

	// Volume
	var volumeButton = document.getElementById("volume-icon"),
 		volumeBar = document.getElementById("volume-bar");

 	var prev = document.getElementById("prev");
	
	// ---------------------- //
 	// ---- PLAY + PAUSE ---- //
 	// ---------------------- //

 	video.addEventListener("click", function(evt) {
		evt.preventDefault();
		vidControl.playPause();
	});

	playButton.addEventListener("click", function(evt) {
		evt.preventDefault();
		vidControl.playPause();
	});

	video.addEventListener("touchstart", function(evt) {
		evt.preventDefault();
		vidControl.playPause();
	});

	playButton.addEventListener("touchstart", function(evt) {
		evt.preventDefault();
		vidControl.playPause();
	});

	// Spacebar control for play/pause
	document.addEventListener('keydown', function(evt) {
	    if (evt.keyCode == 32) {
	    	evt.preventDefault();
	    	if(video.paused == true && video.ended == false) {
	    		vidControl.slideOffscreen();
	    		video.play();
	    		playButton.innerHTML = "Pause";
	    	} 
	    	else if(video.paused == true && video.ended == true){
	    		playButton.innerHTML = "";
	    	} else {
	    		vidControl.slideOnscreen();
	    		video.pause();
	    		playButton.innerHTML = "Play";
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
 	video.addEventListener('progress', vidControl.trackProgress);

	// Update the progress bar as the video plays
	video.addEventListener("timeupdate", vidControl.updateTime);

	// ---- CLICK EVENTS ---- //

	// Change progress bar position on mouse down + pause video
	progressContainer.addEventListener("mousedown", function(evt) {
		posX = evt.clientX;
		vidControl.progressDown(posX);
	});

	// Change progress bar position as mouse moves
	progressContainer.addEventListener("mousemove", function(evt){
		posX = evt.clientX;
		vidControl.progressMove(posX);
	});

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("mouseup", vidControl.progressUp);

	// Hide the time tooltip when mouse leave container
	progressContainer.addEventListener("mouseleave", function(){
		time.style.display = "none";
	});

	// ---- TOUCH EVENTS ---- //

	// Change progress bar position on mouse down + pause video
	progressContainer.addEventListener("touchstart", function(evt) {
		posX = evt.touches[0].clientX;
		vidControl.progressDown(posX);
	});

	// Change progress bar position as mouse moves
	progressContainer.addEventListener("touchmove", function(evt){
		posX = evt.touches[0].clientX;
		vidControl.progressMove(posX);
	});

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("touchend", function(){
		vidControl.progressUp();
		time.style.display = "none";
	});
	
	// ---------------------------------- //
 	// ---- SHOW/HIDE NAV + CONTROLS ---- //
 	// ---------------------------------- //

	video.addEventListener('mousemove', vidControl.handleMouseMove);

	video.addEventListener('touchstart', vidControl.handleMouseMove);

	video.addEventListener('ended', function(){
		vidControl.slideOnscreen();
		playButton.innerHTML = "";
		if(prev) {prev.style.left = "3%";}
	});

})();