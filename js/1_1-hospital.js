(function(){

	var body = document.getElementById('body');
	var modal = document.getElementById('modal');
	var newNote = document.getElementById('newNote');

	body.removeChild(modal);

	var video = document.getElementById("ch_video");

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){
		
		var isAbsent = true;
		for(var i = 0; i < Local.visited.length; i++){
			if(Local.visited[i] === "hospital"){
				isAbsent = false;
			}
		}
		if(isAbsent){
			Local.visited.push("hospital");
			localStorage.setItem( 'visited', JSON.stringify(Local.visited) );
			Local.visit(hospital);
			Local.storedNotes.push("If not MERS, then what? Hospital has no clue.");
			localStorage.setItem( 'notes', JSON.stringify(Local.storedNotes) );
		}

		Map.removeVideoEvents();

		if(Local.visited.length >= 3){
			var cleanHREF = window.location.href.split("?");
			window.location.href = cleanHREF[0] + "?action=flashback";
		} else {
			Sliders.showMap();
			Sliders.hideNotebook();
			Local.visits();
			Local.notes();
			newNote.volume = 0.7;
			newNote.play();
		}

	});

})();