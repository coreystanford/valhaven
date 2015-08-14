(function(){

	var map = document.getElementById('map');
	var notebook = document.getElementById('notebook');
	var modal = document.getElementById('modal');
	var main = document.getElementById('main');

	document.body.overflowY = "auto";
	main.style.overflowY = "auto";

	document.body.removeChild(modal);

	map.style.display = 'none';
	notebook.style.display = 'none';
	document.getElementById('main').style.background = '#636363';

})();