(function(){

	var body = document.getElementById('body');
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	var video = document.getElementById("ch_video");

	Local.setInactive( [botanical, office, home] );

	var container = document.getElementById('room-container');
	var innerContainer = document.getElementById('room-inner-container');
	var bg = document.getElementById('room-bg');
	var paint1 = document.getElementById('paint1');
	var paint2 = document.getElementById('paint2');
	var gardinerId = document.getElementById('gardiner-id');
	var goToBot = document.getElementById('goToBot');

	paint1.addEventListener('click', showPainting);
	paint2.addEventListener('click', showPainting);
	gardinerId.addEventListener('click', showId);
	gardinerId.children[0].style.opacity = 0;
	goToBot.addEventListener('click', hideIdWindow);

	if(Local.visited.length >= 3){
		apartment.setAttribute('class', '');
		apartment.addEventListener('click', Map.route);
	}

	function showPainting(){
		this.setAttribute('class', '');
		this.children[0].setAttribute('class', '');
		this.removeEventListener('click', showPainting);
		this.style.cursor = "default";
	}

	function showId(){
		this.setAttribute('class', '');
		this.children[0].setAttribute('class', '');
		this.removeEventListener('click', showId);
		this.style.cursor = "default";
		gardinerId.children[0].style.opacity = 1;

		this.style.top = "50%";
		this.style.width = "80%";
		this.style.height = "80%";
	}

	function hideIdWindow(){
		innerContainer.removeChild(gardinerId);
		map.removeEventListener('mouseenter', Sliders.showMap, false);
		map.removeEventListener('mouseleave', Sliders.hideMap, false);
		notebook.removeEventListener('mouseenter', Sliders.showNotebook, false);
		notebook.removeEventListener('mouseleave', Sliders.hideNotebook, false);
		botanical.setAttribute('class', '');
		botanical.addEventListener('click', Map.route);
		Sliders.showMap();

		var isAbsent = true;
		for(var i = 0; i < Local.visited.length; i++){
			if(Local.visited[i] === "apartment"){
				isAbsent = false;
			}
		}
		
		if(isAbsent){
			Local.visited.push("apartment");
			localStorage.setItem( 'visited', JSON.stringify(Local.visited) );
			Local.visit(apartment);
			Local.storedNotes.push("He worked at Botanical Research Facility.");
			localStorage.setItem( 'notes', JSON.stringify(Local.storedNotes) );
		}
	}

	bg.addEventListener('click', function(){

		if(Map.hasClass(paint1.children[0], "hidden")){
			paint1.setAttribute('class', '');
			paint1.offsetWidth = paint1.offsetWidth;
			paint1.setAttribute('class', 'flash');
		}
		if(Map.hasClass(paint2.children[0], "hidden")){
			paint2.setAttribute('class', '');
			paint2.offsetWidth = paint2.offsetWidth;
			paint2.setAttribute('class', 'flash'); 
		}
		if(Map.hasClass(gardinerId.children[0], "hidden")){
			gardinerId.setAttribute('class', '');
			gardinerId.offsetWidth = gardinerId.offsetWidth;
			gardinerId.setAttribute('class', 'flash');
		}

	});

	})();