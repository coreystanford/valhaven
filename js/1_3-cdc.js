(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');
	var newNote = document.getElementById('newNote');

	body.removeChild(modal);

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){
		
		Local.addNoteIfAbsent("cdc", "NOT HELPFUL AT ALL! (I should send in a complaint!)", true, cdc);

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