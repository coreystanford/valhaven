(function(){

	// Container, Preloader + Video
	var main = document.getElementById('main'),
		preloader = document.getElementById("preloader"),
		video = document.getElementById('ch_video')
		homeBtn = document.getElementById('main-btn'),
		homeBg = document.getElementById('home-bg')
		playButton = document.getElementById("play-pause");

	function playVideo(){
		main.removeChild(homeBg);
		video.play();
		playButton.innerHTML = "Pause";
	}

	// -------------------------- //
	// ---- Initialize Video ---- //
	// -------------------------- //

	VidControl.initVideo();

	homeBtn.addEventListener("click", playVideo);
	homeBtn.addEventListener("touchstart", playVideo);

	// ----------------------------- //
	// ---- Homepage Background ---- //
	// ----------------------------- //	

	var bg = document.getElementById('home-bg');
	bg.style.height = window.innerHeight + "px";
	
	window.addEventListener('resize', function(){
		bg.style.height = window.innerHeight + "px";
	});

	// -------------------------------- //
	// ---- Custom Button for iPad ---- //
	// -------------------------------- //

	// check is userAgent is an iPad
	if(navigator.userAgent.match(/iPad/i) != null){

		var preIcon = document.getElementById('inner-preload-icon');
		preIcon.style.visibility = "hidden";

		var proceed = document.createElement("BUTTON");
		proceed.innerHTML = "PROCEED";
		proceed.setAttribute("id", "proceed");
		preloader.appendChild(proceed);

		var proceedBtn = document.getElementById('proceed');
		proceedBtn.ontouchstart = function(e){
			e.preventDefault();
			video.play(); 
			video.pause(); 
			initVideo(); 
			preloader.removeChild(proceedBtn);
			preIcon.style.visibility = "visible";
		}

		homeBtn.removeEventListener("click", playVideo);
	}

})();