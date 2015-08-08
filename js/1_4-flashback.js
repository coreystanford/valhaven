(function(){

	var body = document.getElementById('body');
	var modal = document.getElementById('modal');
	var newNote = document.getElementById('newNote');

	body.removeChild(modal);

	var video = document.getElementById("ch_video");

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){

		Sliders.showMap();
		Sliders.hideNotebook();

		Map.removeVideoEvents();

		var isAbsent = true;
		for(var i = 0; i < Local.visited.length; i++){
			if(Local.visited[i] === "flashback"){
				isAbsent = false;
			}
		}
		if(isAbsent){
			Local.visited.push("flashback");
			localStorage.setItem( 'visited', JSON.stringify(Local.visited) );
			Local.storedNotes.push("Hiren of the Valley? It’s been extinct since I was a kid.");
			localStorage.setItem( 'notes', JSON.stringify(Local.storedNotes) );
		}

		Local.visits();
		Local.notes();
		newNote.volume = 0.7;
		newNote.play();

		apartment.setAttribute('class', '');
		apartment.addEventListener('click', Map.route);

	});

})();

//