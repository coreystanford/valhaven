<div class="modal-content red-bg" id="container-2">
	
	<p id="modal-txt">Instructions for the map.</p>
	<p id="total">1/2</p>
	<button type="button" id="next-btn" class="btn">GOT IT</button>

</div>

<script>

	(function(){

		var video = document.getElementById("ch_video");	
		var playButton = document.getElementById("play-pause");
		var progressContainer = document.getElementById("progress-container");

		var btn = document.getElementById('next-btn');
		var modalTxt = document.getElementById('modal-txt');
		var total = document.getElementById('total');

		btn.addEventListener('click', firstClick);

		function firstClick(){
			btn.removeEventListener("click", firstClick);
			btn.addEventListener("click", secondClick);

			modalTxt.innerHTML = "Instructions for the notebook.";
			total.innerHTML = "2/2";

			Sliders.hideMap();
			Sliders.showNotebook();
		}

		function secondClick(){
			modal.setAttribute("class", "off");
			Sliders.showMap();
		}

		video.addEventListener('ended', function(){

			Sliders.showMap();

			video.removeEventListener("click", VidControl.playPause);
			video.removeEventListener("touchstart", VidControl.playPause);
			playButton.removeEventListener("click", VidControl.playPause);
			playButton.removeEventListener("touchstart", VidControl.playPause);
			document.removeEventListener('keydown', VidControl.spaceDown, false);

			progressContainer.removeEventListener("mousedown", VidControl.handleProgressMouseDown);
			progressContainer.removeEventListener("mousemove", VidControl.handleProgressMouseMove);
			progressContainer.removeEventListener("mouseup", VidControl.progressUp);
			progressContainer.removeEventListener("touchstart", VidControl.handleProgressTouchDown);
			progressContainer.removeEventListener("touchmove", VidControl.handleProgressTouchMove);
			progressContainer.removeEventListener("touchend", VidControl.handleProgressTouchUp);

			video.removeEventListener('mousemove', VidControl.handleMouseMove);
			video.removeEventListener('touchstart', VidControl.handleMouseMove);

			map.removeEventListener('mouseenter', Sliders.showMap, false);
			map.removeEventListener('mouseleave', Sliders.hideMap, false);
			notebook.removeEventListener('mouseenter', Sliders.showNotebook, false);
			notebook.removeEventListener('mouseleave', Sliders.hideNotebook, false);

		});

	})();

</script>