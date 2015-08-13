(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	Local.setInactive( [botanical, office, home] );

	Map.removeVideoEvents();

	var container = document.getElementById('room-container');
	var innerContainer = document.getElementById('room-inner-container');
	var bg = document.getElementById('room-bg');
	var paint1 = document.getElementById('paint1');
	var paint2 = document.getElementById('paint2');
	var gardinerId = document.getElementById('gardiner-id');
	var radio = document.getElementById('radio');
	var playRadio = document.getElementById('playRadio');
	var goToBot = document.getElementById('goToBot');

	gardinerId.children[0].style.opacity = 0;

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

	if(Local.visited.length >= 3){
		apartment.setAttribute('class', '');
		apartment.addEventListener('click', Map.route);
		apartment.addEventListener('touchend', Map.route);
	}

	function runRadio(){
		radio.setAttribute('class', '');
		radio.offsetWidth = radio.offsetWidth;
		radio.setAttribute('class', 'flash');
		if(playRadio.paused === true){
			playRadio.play();
		} else {
			playRadio.pause();
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