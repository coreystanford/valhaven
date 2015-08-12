(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');

	body.removeChild(modal);

	video.addEventListener('ended', function(){

		window.location.href = "/txm2015/valhaven/chapters/ch_7";

	});

})();