(function(){

	// Video
	var video = document.getElementById("ch_video");
	var timeout;
	var offScreen = false;

	// Buttons
	var playContainer = document.getElementById("play-pause-container");
	var playButton = document.getElementById("play-pause");
	var controls = document.getElementById("controls");
	var volumeButton = document.getElementById("volume-icon");
	var fullScreenButton = document.getElementById("full-screen");
	var information = document.getElementById("information");

	// Sliders
	var progressContainer = document.getElementById("progress-container");
	var progressBar = document.getElementById("progress-bar");
 	var volumeBar = document.getElementById("volume-bar");

 	// Navigation
 	var nav = document.getElementById("navigation");
 	var social = document.getElementById("social");
 	var map = document.getElementById("map");
 	var notebook = document.getElementById("notebook");
 	var next = document.getElementById("next");
 	var prev = document.getElementById("prev");

 	volumeBar.style.display = "none";

 	// Event listener for the play/pause button
	playButton.addEventListener("click", function() {
		if (video.paused == true) {
			// Play the video
			video.play();

			next.style.right = "-3%";
			if(prev) {prev.style.left = "-3%";}

			slideOffscreen();

			// Update the button text to 'Pause'
			playButton.innerHTML = "Pause";
		} else {
			// Pause the video
			video.pause();

			slideOnscreen();

			next.style.right = "3%";
			if(prev) {prev.style.left = "3%";}

			// Update the button text to 'Play'
			playButton.innerHTML = "Play";
		}
	});

	// Event listener for the mute button
	volumeButton.addEventListener("click", function() {
		if (video.muted == false) {
			// Mute the video
			video.muted = true;
			volumeBar.value = 0;
			// Update the button text
			//volumeButton.innerHTML = "Muted";
		} else {
			// Unmute the video
			video.muted = false;
			video.volume = volumeBar.value;
			// Update the button text
			// volumeButton.innerHTML = "";
		}
	});

	// Event listener for the mute button
	volumeButton.addEventListener("mouseenter", function() {
		volumeBar.style.display = "block";
	});

	// Event listener for the mute button
	volumeButton.addEventListener("mouseleave", function() {
		volumeBar.style.display = "none";
	});

	// Event listener for the volume bar
	volumeBar.addEventListener("mouseenter", function() {
		volumeBar.style.display = "block";
	});

	// Event listener for the volume bar
	volumeBar.addEventListener("mouseleave", function() {
		volumeBar.style.display = "none";
	});

	// Event listener for the full-screen button
	fullScreenButton.addEventListener("click", function() {
		if (video.requestFullscreen) {
			video.requestFullscreen();
		} else if (video.mozRequestFullScreen) {
			video.mozRequestFullScreen(); // Firefox
		} else if (video.webkitRequestFullscreen) {
			video.webkitRequestFullscreen(); // Chrome and Safari
		}
	});

	// Event listener for the seek bar
	progressBar.addEventListener("change", function() {
		// Calculate the new time
		var time = video.duration * (progressBar.value / 100);

		// Update the video time
		video.currentTime = time;
	});

	// Update the seek bar as the video plays
	video.addEventListener("timeupdate", function() {
		// Calculate the slider value
		var value = (100 / video.duration) * video.currentTime;

		// Update the slider value
		progressBar.value = value;
	});

	// Pause the video when the slider handle is being dragged
	progressBar.addEventListener("mousedown", function() {
		video.pause();
		slideOnscreen();
		playButton.innerHTML = "Play";
	});

	// Play the video when the slider handle is dropped
	progressBar.addEventListener("mouseup", function() {
		video.play();
		slideOffscreen();
		playButton.innerHTML = "Pause";
	});

	// Event listener for the volume bar
	volumeBar.addEventListener("change", function() {
		// Update the video volume
		video.volume = volumeBar.value;

		// if(video.volume === 0){
		// 	video.muted = true;
		// } else {
		// 	video.muted = false;
		// }

	});

	console.log(video);

	window.addEventListener('mousemove', function(){

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

		playButton.innerHTML = "Replay";

		next.style.right = "3%";
		if(prev) {prev.style.left = "3%";}

	});

	function slideOffscreen(){

		clearTimeout(timeout);
		timeout = setTimeout(function(){

			nav.style.top = "-8%";
			map.style.left = "-240px";
			notebook.style.right = "-240px";
			controls.style.bottom = "-8%";
			social.style.bottom = "-8%";
			playContainer.style.visibility = "hidden";
			playContainer.style.opacity = 0;
			progressContainer.style.bottom = "-8%";
			video.style.cursor = "none";
			offScreen = true;

		}, 2000);

	}

	function slideOnscreen(){

		clearTimeout(timeout);

		nav.style.top = "5%";
		map.style.left = "-190px";
		notebook.style.right = "-190px";
		controls.style.bottom = "3%";
		social.style.bottom = "5%";
		playContainer.style.visibility = "visible";
		playContainer.style.opacity = 1;
		progressContainer.style.bottom = 0;
		video.style.cursor = "default";
		offScreen = false;

		console.log("off:" + timeout);

	}

})();