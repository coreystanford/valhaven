(function(){

	// Container, Preloader + Video
	var main = document.getElementById('main'),
		preloader = document.getElementById("preloader"),
		video = document.getElementById('ch_video')
		homeBtn = document.getElementById('home-btn'),
		homeBg = document.getElementById('home-bg');

	// -------------------------- //
	// ---- Initialize Video ---- //
	// -------------------------- //

	// "canplaythrough" works perfectly on all browsers when combibned with preload='auto'
	// (and it has the added benefit of being a very small amount of code),
	// but we cannot track the amount of video loaded using this method
	// it does, however, get around the issue within Safari where the browser 
	// will wait for the entire video to load before firing the 'progress' event

	// https://gist.github.com/millermedeiros/891886

	function initVideo(){
		video.play();
		if(video.readyState !== 4){ // HAVE_ENOUGH_DATA
			video.addEventListener('canplay', onCanPlay, false);
			video.addEventListener('load', onCanPlay, false); // add load event as well to avoid errors, sometimes 'canplaythrough' won't dispatch.
			video.pause();
		}
	}

	function onCanPlay(){
		video.removeEventListener('canplay', onCanPlay, false);
		video.removeEventListener('load', onCanPlay, false);

		main.removeChild(preloader);

	}

	function playVideo(){
		main.removeChild(homeBtn);
		main.removeChild(homeBg);
		video.play();
	}

	initVideo();

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