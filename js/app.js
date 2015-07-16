(function(){

	var map = document.getElementById('map');
	var mapBtn = document.getElementById('map-btn');
	var mapStatus = "";
	var notebook = document.getElementById('notebook');
	var notebookBtn = document.getElementById('notebook-btn');
	var noteStatus = "";
	var main = document.getElementById('main');

	mapBtn.addEventListener('mouseenter', function(){
		map.style.opacity = 1;
		map.style.left = 0;
		main.style.marginLeft = "30%";
	});

	map.addEventListener('mouseleave', function(){
		map.style.opacity = .8;
		map.style.left = "calc(-30% + 10px)";
		main.style.marginLeft = 0;
	});

	notebookBtn.addEventListener('mouseenter', function(){
		notebook.style.opacity = 1;
		notebook.style.right = 0;
		main.style.marginRight = "30%";
	});

	notebook.addEventListener('mouseleave', function(){
		notebook.style.opacity = .8;
		notebook.style.right = "calc(-30% + 10px)";
		main.style.marginRight = 0;
	});

})();