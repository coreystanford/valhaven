(function(){

	var map = document.getElementById('map'),
		mapBtn = document.getElementById('map-btn'),
		mapStatus = false,
		notebook = document.getElementById('notebook'),
		notebookBtn = document.getElementById('notebook-btn'),
		noteStatus = false,
		main = document.getElementById('main'),
		social = document.getElementById('social'),
		nav = document.getElementById('navigation');

	// ---- FUNCTIONS ---- //

	function showMap(){
		map.style.opacity = 1;
		map.style.left = 0;
		main.style.marginLeft = "30%";
		social.style.left = "33%";
		nav.style.left = "33%";
		mapStatus = true;
	}

	function hideMap(){
		map.style.opacity = .8;
		map.style.left = "calc(-30% + 10px)";
		main.style.marginLeft = 0;
		social.style.left = "3%";
		nav.style.left = "3%";
		mapStatus = false;
	}

	function showNotebook(){
		notebook.style.opacity = 1;
		notebook.style.right = 0;
		main.style.marginRight = "30%";
		noteStatus = true;
	}

	function hideNotebook(){
		notebook.style.opacity = .8;
		notebook.style.right = "calc(-30% + 10px)";
		main.style.marginRight = 0;
		noteStatus = false;
	}

	// ---- Desktop ---- //

	map.addEventListener('mouseenter', function(e){
		e.preventDefault();
		showMap();
	}, false);
	map.addEventListener('mouseleave', function(e){
		e.preventDefault();
		hideMap();
	}, false);

	notebook.addEventListener('mouseenter', function(e){
		e.preventDefault();
		showNotebook();
	}, false);
	notebook.addEventListener('mouseleave', function(e){
		e.preventDefault();
		hideNotebook();
	}, false);

	// ---- Mobile ---- //

	mapBtn.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(mapStatus){
			hideMap();
		} else {
			showMap();
			if(noteStatus){ hideNotebook(); }
		}
	}, false);

	notebookBtn.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(noteStatus){
			hideNotebook();
		} else {
			showNotebook();
			if(mapStatus){ hideMap(); }
		}
	}, false);

	main.addEventListener('touchstart', function(e){
		e.preventDefault();
		if(mapStatus){ hideMap(); }
		if(noteStatus){ hideNotebook(); }
	}, false);

})();