(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	// Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){

		window.location.href = "/txm2015/valhaven/chapters/ch_7";

		// Sliders.showMap();
		// Sliders.hideNotebook();

		// Map.removeVideoEvents();

		// apartment.setAttribute('class', '');
		// apartment.addEventListener('click', Map.route);

	});

})();