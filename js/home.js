(function(){

	// -------------------------------------- //
	// ---- Preloader + Modal Disclaimer ---- //
	// -------------------------------------- //

	// Container, Preloader + Video
	var main = document.getElementById('main');
		container = document.getElementById('video-container'),
		preloader = document.getElementById("preloader"),
		target = "#target";

	initModal(target);

	setTimeout(function(){
		main.removeChild(preloader);
	}, 1500);

	// ----------------------------- //
	// ---- Homepage Background ---- //
	// ----------------------------- //	

	var bg = document.getElementById('home-bg');
	bg.style.height = window.innerHeight + "px";
	
	window.addEventListener('resize', function(){
		bg.style.height = window.innerHeight + "px";
	});

})();