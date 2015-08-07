(function(){

	var body = document.getElementById('body');
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	var video = document.getElementById("ch_video");

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){
		
		var isAbsent = true;
		for(var i = 0; i < Local.visited.length; i++){
			if(Local.visited[i] === "cdc"){
				isAbsent = false;
			}
		}
		if(isAbsent){
			Local.visited.push("cdc");
			localStorage.setItem( 'visited', JSON.stringify(Local.visited) );
			Local.visit(cdc);
			Local.storedNotes.push("NOT HELPFUL AT ALL! (I should send in a complaint!)");
			localStorage.setItem( 'notes', JSON.stringify(Local.storedNotes) );
		}

		Map.removeVideoEvents();

		if(Local.visited.length >= 3){
			var cleanHREF = window.location.href.split("?");
			window.location.href = cleanHREF[0] + "?action=flashback";
		} else {
			Sliders.showMap();
			Sliders.hideNotebook();
		}

	});

})();