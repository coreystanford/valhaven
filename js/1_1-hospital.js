(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');
	var newNote = document.getElementById('newNote');

	body.removeChild(modal);

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){
		
		Local.addNoteIfAbsent("hospital", "If not MERS, then what? Hospital has no clue.", true, hospital);

		Map.removeVideoEvents();

		if(Local.visited.length === 1){
			newNote.volume = "0.7";
			newNote.play();
		}

		if(Local.visited.length >= 3){
			var cleanHREF = window.location.href.split("?");
			window.location.href = cleanHREF[0] + "?action=flashback";
		} else {
			Sliders.showMap();
			Sliders.hideNotebook();
		}

	});

})();