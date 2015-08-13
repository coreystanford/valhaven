(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');

	var container = document.getElementById('room-container');
	var innerContainer = document.getElementById('room-inner-container');
	var bg = document.getElementById('room-bg');
	var paint1 = document.getElementById('paint1');
	var paint2 = document.getElementById('paint2');
	var gardinerId = document.getElementById('gardiner-id');
	var radio = document.getElementById('radio');
	var laynaGasp = document.getElementById('laynaGasp');
	var aptBg = document.getElementById('apt-bg');
	var playRadio = document.getElementById('playRadio');
	var goToBot = document.getElementById('goToBot');

	// ---- REMOVE MODAL ---- //

	body.removeChild(modal);

	// ---- SET INACTIVE MAP ICONS ---- //

	Local.setInactive( [botanical, office, home] );

	// ---- REMOVE VIDEO EVENTS ---- //

	Map.removeVideoEvents();

	// ---- EVENTS ---- //

	paint1.addEventListener('click', showPainting);
	paint2.addEventListener('click', showPainting);
	gardinerId.addEventListener('click', showId);
	radio.addEventListener('click', runRadio);
	goToBot.addEventListener('click', hideIdWindow);

	paint1.addEventListener('touchend', showPainting);
	paint2.addEventListener('touchend', showPainting);
	gardinerId.addEventListener('touchend', showId);
	radio.addEventListener('touchend', runRadio);
	goToBot.addEventListener('touchend', hideIdWindow);

	bg.addEventListener('click', showFlash);
	bg.addEventListener('touchend', showFlash);

	gardinerId.children[0].style.opacity = 0;

	// --- AUDIO ---- //

	aptBg.volume = 0.3;
	playRadio.volume = 0.4;
	laynaGasp.volume = 0.7;
	setTimeout(function(){
		laynaGasp.play();
	}, 100);

	// ---- SET APARTMENT ICON IF 3 ---- //

	if(Local.visited.length >= 3){
		apartment.setAttribute('class', '');
		apartment.addEventListener('click', Map.route);
		apartment.addEventListener('touchend', Map.route);
	}

	// ---- FUNCTIONS ---- //

	function runRadio(){
		radio.setAttribute('class', '');
		radio.offsetWidth = radio.offsetWidth;
		radio.setAttribute('class', 'flash');

		if(playRadio.paused === true){
			playRadio.play();
			aptBg.volume = 0.1;
		} else {
			playRadio.pause();
			aptBg.volume = 0.3;
		}
	}

	function showPainting(){
		this.setAttribute('class', '');
		this.children[0].setAttribute('class', '');
		this.removeEventListener('click', showPainting);
		this.removeEventListener('touchend', showPainting);
		this.style.cursor = "default";
	}

	function showId(){
		this.setAttribute('class', '');
		this.children[0].setAttribute('class', '');
		this.removeEventListener('click', showId);
		this.removeEventListener('touchend', showId);
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

		botanical.setAttribute('class', '');
		botanical.addEventListener('click', Map.route);
		
		Local.visit(apartment);

		Local.addNoteIfAbsent("apartment", "Apartment - He worked at Botanical Research Facility.", false);

		Sliders.showMap();
	}

	function showFlash(){
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
		if(playRadio.paused){
			radio.setAttribute('class', '');
			radio.offsetWidth = radio.offsetWidth;
			radio.setAttribute('class', 'flash');
		}
	}

})();