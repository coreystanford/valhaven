(function(){

	var map = document.getElementById('map');
	var mapBtn = document.getElementById('map-btn');
	var mapStatus = "";
	var notebook = document.getElementById('notebook');
	var notebookBtn = document.getElementById('notebook-btn');
	var noteStatus = "";

	mapBtn.addEventListener('mouseover', function(){
		map.style.opacity = 1;
		map.style.left = 0;
	});

	map.addEventListener('mouseleave', function(){
		map.style.opacity = .8;
		map.style.left = "-190px";
	});

	notebookBtn.addEventListener('mouseover', function(){
		notebook.style.opacity = 1;
		notebook.style.right = 0;
	});

	notebook.addEventListener('mouseleave', function(){
		notebook.style.opacity = .8;
		notebook.style.right = "-190px";
	});

})();