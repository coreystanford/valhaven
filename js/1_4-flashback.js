(function(){

	var body = document.getElementById('body');
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	var video = document.getElementById("ch_video");

	Local.setInactive( [botanical, apartment, office, home] );

	video.addEventListener('ended', function(){

		Sliders.showMap();
		Sliders.hideNotebook();

		Map.removeVideoEvents();

		apartment.setAttribute('class', '');
		apartment.addEventListener('click', Map.route);

	});

})();