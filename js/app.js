window.onload = function(){

	var main = document.getElementById('main');
	main.style.height = window.innerHeight + "px";

	window.addEventListener('resize', function(){
		main.style.height = window.innerHeight + "px";
	});

}