window.onload = function(){

	var bg = document.getElementById('home-bg');
	bg.style.height = window.innerHeight + "px";
	
	window.addEventListener('resize', function(){
		bg.style.height = window.innerHeight + "px";
	});

}