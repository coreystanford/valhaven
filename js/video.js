(function(){

	// Video
	var video = document.getElementById("ch_video");

	// Buttons
	var playButton = document.getElementById("play-pause");
	var volumeButton = document.getElementById("volume-icon");
	var fullScreenButton = document.getElementById("full-screen");
	var information = document.getElementById("information");

	// Sliders
	var progressBar = document.getElementById("progress-bar");
 	var volumeBar = document.getElementById("volume-bar");

 	volumeBar.style.display = "none";

 	// Event listener for the play/pause button
	playButton.addEventListener("click", function() {
		if (video.paused == true) {
			// Play the video
			video.play();

			// Update the button text to 'Pause'
			playButton.innerHTML = "Pause";
		} else {
			// Pause the video
			video.pause();

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
		playButton.innerHTML = "Play";
	});

	// Play the video when the slider handle is dropped
	progressBar.addEventListener("mouseup", function() {
		video.play();
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

	video.addEventListener('ended', function(){

		playButton.innerHTML = "Replay";

	})

})();