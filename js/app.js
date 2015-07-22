var sliders = (function(){

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
			clearTimeout(vidControl.timeout);
			video.pause();
			playButton.innerHTML = "Play";
		},

		hideMap: function(){
			map.style.opacity = .8;
			map.style.left = "calc(-30% + 10px)";
			main.style.marginLeft = 0;
			social.style.left = "3%";
			nav.style.left = "3%";
		},

		showNotebook: function(){
			notebook.style.opacity = 1;
			notebook.style.right = 0;
			main.style.marginRight = "30%";
			clearTimeout(vidControl.timeout);
			video.pause();
			playButton.innerHTML = "Play";
		},

		hideNotebook: function(){
			notebook.style.opacity = .8;
			notebook.style.right = "calc(-30% + 10px)";
			main.style.marginRight = 0;
		}

	};

})();

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
		sliders.showMap, false);
	map.addEventListener('mouseleave',
		sliders.hideMap, false);
	notebook.addEventListener('mouseenter',
		sliders.showNotebook, false);
	notebook.addEventListener('mouseleave',
		sliders.hideNotebook, false);

	// ---- Mobile ---- //

	mapBtn.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(mapStatus){
			sliders.hideMap();
			mapStatus = false;
		} else {
			sliders.showMap();
			mapStatus = true;
			if(noteStatus){ 
				sliders.hideNotebook(); 
				noteStatus = false;
			}
		}
	}, false);

	notebookBtn.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(noteStatus){
			sliders.hideNotebook();
			noteStatus = false;
		} else {
			sliders.showNotebook();
			noteStatus = true;
			if(mapStatus){ 
				sliders.hideMap(); 
				mapStatus = false;
			}
		}
	}, false);

	main.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(mapStatus){ sliders.hideMap(); mapStatus = false; }
		if(noteStatus){ sliders.hideNotebook(); noteStatus = false; }
	}, false);

})();