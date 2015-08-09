(function(){

	// Container, Preloader + Video
	var main = document.getElementById('main'),
		preloader = document.getElementById("preloader"),
		video = document.getElementById('ch_video')
		homeBtn = document.getElementById('main-btn'),
		homeBg = document.getElementById('home-bg')
		playButton = document.getElementById("play-pause"),
		titleBtn = document.getElementById('title-btn');

	function playVideo(){
		main.removeChild(homeBg);
		video.play();
		playButton.innerHTML = "Pause";
	}

	// -------------------------- //
	// ---- Initialize Video ---- //
	// -------------------------- //

	VidControl.initVideo();

	if(Local.visited.length <= 0){
		map.style.display = 'none';
		notebook.style.display = 'none';
		homeBtn.addEventListener("click", playVideo);
		homeBtn.addEventListener("touchstart", playVideo);
	} else {

		var visited = Local.visited;
		homeBtn.setAttribute('ref', visited[visited.length - 1]);
		homeBtn.addEventListener("click", Map.route);
		homeBtn.addEventListener("touchstart", Map.route);
		homeBtn.innerHTML = "CONTINUE STORY";

		var restart = document.createElement("BUTTON");
		restart.innerHTML = "RESTART";
		restart.setAttribute("class", "btn");
		titleBtn.appendChild(restart);

		restart.onclick = function(e){
			e.preventDefault();
			localStorage.clear();
			playVideo();
			map.style.display = 'none';
			notebook.style.display = 'none';
		}

	}

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
			VidControl.initVideo(); 
			preloader.removeChild(proceedBtn);
			preIcon.style.visibility = "visible";
		}

		homeBtn.removeEventListener("click", playVideo);
	}

})();