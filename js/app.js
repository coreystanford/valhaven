// --------------------------- //
// ---- REGISTER CONTROLS ---- //
// --------------------------- //

var Sliders = (function(){

	var map = document.getElementById('map'),
		notebook = document.getElementById('notebook'),
		main = document.getElementById('main'),
		social = document.getElementById('social'),
		nav = document.getElementById('navigation'),
		video = document.getElementById('ch_video');
		// playButton = document.getElementById("play-pause");

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

var Map = (function(){

	var video = document.getElementById("ch_video");	
	var playButton = document.getElementById("play-pause");
	var progressContainer = document.getElementById("progress-container");
	var map = document.getElementById('map');
	var notebook = document.getElementById('notebook');

	return {

		hasClass: function (element, cls) {
		    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
		},

		route: function(){
			var action = this.getAttribute('id');
			switch(action){
				case 'press':
					window.location.href = "/txm2015/valhaven/chapters/ch_1?action=press";
				break;
				case 'cdc':
					window.location.href = "/txm2015/valhaven/chapters/ch_1?action=cdc";
				break;
				case 'hospital':
					window.location.href = "/txm2015/valhaven/chapters/ch_1?action=hospital";
				break;
				case 'apartment':
					window.location.href = "/txm2015/valhaven/chapters/ch_2";
				break;
				case 'botanical':
					window.location.href = "/txm2015/valhaven/chapters/ch_3";
				break;
				case 'office':
					window.location.href = "/txm2015/valhaven/chapters/ch_5";
				break;
				case 'home':
					window.location.href = "/txm2015/valhaven/chapters/ch_5";
				break;
			}
		},
		
		customRoute: function(route){
			window.location = route;
		},

		removeVideoEvents: function(){
			video.removeEventListener("click", VidControl.playPause);
			video.removeEventListener("touchstart", VidControl.playPause);
			playButton.removeEventListener("click", VidControl.playPause);
			playButton.removeEventListener("touchstart", VidControl.playPause);
			document.removeEventListener('keydown', VidControl.spaceDown, false);

			progressContainer.removeEventListener("mousedown", VidControl.handleProgressMouseDown);
			progressContainer.removeEventListener("mousemove", VidControl.handleProgressMouseMove);
			progressContainer.removeEventListener("mouseup", VidControl.progressUp);
			progressContainer.removeEventListener("mouseleave", VidControl.progressLeave);
			progressContainer.removeEventListener("touchstart", VidControl.handleProgressTouchDown);
			progressContainer.removeEventListener("touchmove", VidControl.handleProgressTouchMove);
			progressContainer.removeEventListener("touchend", VidControl.handleProgressTouchUp);

			video.removeEventListener('mousemove', VidControl.handleMouseMove);
			video.removeEventListener('touchstart', VidControl.handleMouseMove);

			map.removeEventListener('mouseenter', Sliders.showMap, false);
			map.removeEventListener('mouseleave', Sliders.hideMap, false);
			notebook.removeEventListener('mouseenter', Sliders.showNotebook, false);
			notebook.removeEventListener('mouseleave', Sliders.hideNotebook, false);
		}

	}

})();

var Local = (function(){

	var mapContainer = document.getElementById('map-container');
	var video = document.getElementById("ch_video");
	var press = document.getElementById('press');
	var hospital = document.getElementById('hospital');
	var office = document.getElementById('office');
	var cdc = document.getElementById('cdc');
	var botanical = document.getElementById('botanical');
	var apartment = document.getElementById('apartment');
	var home = document.getElementById('home');

	return {

		visited: [],

		storedNotes: [],

		visits: function(){

			if(localStorage.getItem( 'visited' )){
				Local.visited = JSON.parse( localStorage.getItem( 'visited' ) );
			} else {
				Local.visited = [];
			}

			for(var v = 0; v < Local.visited.length; v++){

				for(var i = 0; i < mapContainer.children.length - 1; i++){

					var iconId = mapContainer.children[i].getAttribute('id');

					if( Local.visited[v] == iconId ){

						var thisIcon = document.getElementById(iconId);
						thisIcon.setAttribute('class', 'visited');

					}

				}

			}

		},

		notes: function(){

			if(localStorage.getItem( 'notes' )){
				Local.storedNotes = JSON.parse( localStorage.getItem( 'notes' ) );
			} else {
				Local.storedNotes = [];
			}
			
			for(var i = 0; i < Local.storedNotes.length; i++){
				var listedNote = document.createElement("LI");
				listedNote.innerHTML = Local.storedNotes[i];
				note.appendChild(listedNote);
			}

		},

		setInactive: function(array){

			for (var i = 0; i < array.length; i++) {
				if( !Map.hasClass(array[i], "visited") ){ 
					array[i].setAttribute('class', 'inactive');
				}
			};

			for(var i = 0; i < mapContainer.children.length - 1; i++){

				if( !Map.hasClass(mapContainer.children[i], "inactive") && !Map.hasClass(mapContainer.children[i], "visited") ){

					mapContainer.children[i].addEventListener('click', Map.route);

				}

			}

		},

		visit: function(location){

			location.setAttribute('class', 'visited');
			location.removeEventListener('click', Map.route);

		}

	}

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

	// ----------------------- //
	// ---- LOCAL STORAGE ---- //
	// ----------------------- //

	Local.visits();
	Local.notes();

})();