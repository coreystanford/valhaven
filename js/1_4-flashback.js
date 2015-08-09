(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){

		Sliders.showMap();
		Sliders.hideNotebook();

		Map.removeVideoEvents();

		Local.addNoteIfAbsent("flashback", "Hiren of the Valley? It’s been extinct since I was a kid.", false);

		apartment.setAttribute('class', '');
		apartment.addEventListener('click', Map.route);

	});

})();