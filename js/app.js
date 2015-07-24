// --------------------------- //
// ---- REGISTER CONTROLS ---- //
// --------------------------- //

var Sliders = (function(){

	var map = document.getElementById('map'),
		notebook = document.getElementById('notebook'),
		main = document.getElementById('main'),
		social = document.getElementById('social'),
		nav = document.getElementById('navigation'),
		video = document.getElementById('ch_video'),
		playButton = document.getElementById("play-pause");

	return {

		showMap: function(){
			map.style.opacity = 1;
			map.style.left = "0px";
			main.style.marginLeft = "30%";
			social.style.left = "33%";
			nav.style.left = "33%";
			clearTimeout(VidControl.timeout);
			// video.pause();
			// playButton.innerHTML = "Play";
		},

		hideMap: function(){
			map.style.opacity = .8;
			map.style.left = "calc(-30% + 10px)";
			main.style.marginLeft = 0;
			social.style.left = "3%";
			nav.style.left = "3%";
			// video.play();
			// playButton.innerHTML = "Pause";
			if(video.paused === false){VidControl.slideOffscreen();}
		},

		showNotebook: function(){
			notebook.style.opacity = 1;
			notebook.style.right = 0;
			main.style.marginRight = "30%";
			clearTimeout(VidControl.timeout);
			// video.pause();
			// playButton.innerHTML = "Play";
		},

		hideNotebook: function(){
			notebook.style.opacity = .8;
			notebook.style.right = "calc(-30% + 10px)";
			main.style.marginRight = 0;
			// video.play();
			// playButton.innerHTML = "Pause";
			if(video.paused === false){VidControl.slideOffscreen();}
		}

	};

})();

// ------------------------- //
// ---- REGISTER EVENTS ---- //
// ------------------------- //

(function(){

	var map = document.getElementById('map'),
		mapBtn = document.getElementById('map-btn'),
		mapStatus = false,
		notebook = document.getElementById('notebook'),
		notebookBtn = document.getElementById('notebook-btn'),
		noteStatus = false,
		main = document.getElementById('main');

	// ---- Desktop ---- //

	map.addEventListener('mouseenter',
		Sliders.showMap, false);
	map.addEventListener('mouseleave',
		Sliders.hideMap, false);
	notebook.addEventListener('mouseenter',
		Sliders.showNotebook, false);
	notebook.addEventListener('mouseleave',
		Sliders.hideNotebook, false);

	// ---- Mobile ---- //

	mapBtn.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(mapStatus){
			Sliders.hideMap();
			mapStatus = false;
		} else {
			Sliders.showMap();
			mapStatus = true;
			if(noteStatus){ 
				Sliders.hideNotebook(); 
				noteStatus = false;
			}
		}
	}, false);

	notebookBtn.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(noteStatus){
			Sliders.hideNotebook();
			noteStatus = false;
		} else {
			Sliders.showNotebook();
			noteStatus = true;
			if(mapStatus){ 
				Sliders.hideMap(); 
				mapStatus = false;
			}
		}
	}, false);

	main.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(mapStatus){ Sliders.hideMap(); mapStatus = false; }
		if(noteStatus){ Sliders.hideNotebook(); noteStatus = false; }
	}, false);

})();