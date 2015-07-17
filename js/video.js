(function(){

	var width = window.innerWidth,
		loading = true, offScreen = false, down = false, moving = false, first = true,
		timeout, posX, perc, curPos, value,
		timeFullSec, timeMin, timeSec; 

	// Container, Preloader + Video
	var container = document.getElementById('video-container'),
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
 		volumeBar.style.display = "none";

 	// Navigation
 	var nav = document.getElementById("navigation"),
 		social = document.getElementById("social"),
 		map = document.getElementById("map"),
 		notebook = document.getElementById("notebook"),
 		next = document.getElementById("next"),
 		prev = document.getElementById("prev");

 	// ---------------------- //
 	// ---- PLAY + PAUSE ---- //
 	// ---------------------- //

	video.addEventListener("click", function(evt) {
		evt.preventDefault();
		if (video.paused == true) {
			video.play();
		} else {
			video.pause();
		}
	});

	playButton.addEventListener("click", function(evt) {
		evt.preventDefault();
		if (video.paused == true) {
			video.play();
		} else {
			video.pause();
		}
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

	// ---------------------- //
 	// ---- PROGRESS BAR ---- //
 	// ---------------------- //

 	// "canplaythrough" works perfectly on all browsers when combibned with preload='auto'
 	// (and it has the added benefit of being a very small amount of code),
 	// but we cannot track the amount of video loaded using this method
 	// it does, however, get around the issue within Safari where the browser 
 	// will wait for the entire video to load before firing the 'progress' event

 	// https://gist.github.com/millermedeiros/891886

 	function initVideo(){
		if(video.readyState !== 4){ // HAVE_ENOUGH_DATA
			video.addEventListener('canplaythrough', onCanPlay, false);
			video.addEventListener('load', onCanPlay, false); // add load event as well to avoid errors, sometimes 'canplaythrough' won't dispatch.
		}
	}

 	function onCanPlay(){
		video.removeEventListener('canplaythrough', onCanPlay, false);
		video.removeEventListener('load', onCanPlay, false);
		setTimeout(function() {
			video.play();
			preloader.className = "preloaded";
		}, 100);
		
	}

 	initVideo();

 	// using 'progress' would be optimal, as we can track the amount loaded.
 	// However, Safari does not play nice, and only fires this event after 
 	// the whole video has loaded when using preload='auto', and doesn't load 
 	// enough of the video otherwise!
 	
 	// preload attribute tests:
 	// http://www.stevesouders.com/blog/2013/04/12/html5-video-preload/

 	video.addEventListener('progress', function(evt) {
		var bufferedEnd = video.buffered.end(video.buffered.length - 1);
		var duration =  video.duration;
		var bufferPerc = ((bufferedEnd / duration) * 100);
	// 	var preloadPerc = Math.round(bufferPerc * 10);

	//   	if(bufferPerc <= 10) {
	//   		video.pause();
	//   		if(first){
	  			
	//   			percentLoaded.style.display = "block";
	//   			preloadBar.style.display = "block";
	//   			first = false;
	//   		}
	//   	} else if(loading){
	//   		video.play();
	//   		preloader.className = "preloaded";
	//   		loading = false;
	//   	}

	//   	percentLoaded.innerHTML = preloadPerc + "%";
	//   	preloadBar.style.width = preloadPerc + "%";
	  	buffer.style.width = bufferPerc + "%";
	});

	// Update the progress bar as the video plays
	video.addEventListener("timeupdate", function(evt) {
		// Calculate the slider value
		value = (100 / video.duration) * video.currentTime;
		curPos = (video.currentTime / video.duration) * 100;
		// Update the slider value
		progressBar.value = value;
		indicator.style.left = "calc(" + curPos + "% - 10px)";
	});

	progressContainer.addEventListener("mousedown", function(evt) {
		width = window.innerWidth;
		video.pause();

		down = true;

		posX = evt.clientX;
		perc = posX / width;

		video.currentTime = video.duration * perc;
		progressBar.value = (100 / video.duration) * video.currentTime;
		curPos = perc * width - 10;
		indicator.style.left = curPos + "px";

	});

	progressContainer.addEventListener("mousemove", function(evt){
		posX = evt.clientX;
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
			posX = evt.clientX;
			perc = posX / width;
			progressBar.value = (100 / video.duration) * (video.duration * perc);
			curPos = perc * width - 10;
			indicator.style.left = curPos + "px";
		}
	});

	// Play the video when the slider handle is dropped
	progressContainer.addEventListener("mouseup", function(evt) {
		if(moving){		
			moving = false;
			video.currentTime = video.duration * perc;	
		}

		down = false;
		video.play();
		
	});

	progressContainer.addEventListener("mouseleave", function(evt){

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

	map.addEventListener('mouseenter', function(){
		slideOnscreen();
	});

	notebook.addEventListener('mouseenter', function(){
		slideOnscreen();
	});

	video.addEventListener('ended', function(){

		slideOnscreen();

		playButton.innerHTML = "";

		next.style.right = "3%";
		if(prev) {prev.style.left = "3%";}

	});

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

})();