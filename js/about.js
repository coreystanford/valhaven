(function(){

	var map = document.getElementById('map');
	var notebook = document.getElementById('notebook');
	var modal = document.getElementById('modal');
	var main = document.getElementById('main');
	var homepage = document.getElementById('homepage');
	var aboutpage = document.getElementById('aboutpage');
	var facebook = document.getElementById('facebook');
	var twitter = document.getElementById('twitter');

	document.body.overflowY = "auto";
	main.style.overflowY = "auto";

	document.body.removeChild(modal);

	map.style.display = 'none';
	notebook.style.display = 'none';
	main.style.background = '#f3f2f2';
	homepage.style.color = '#636363';
	aboutpage.style.color = '#636363';

	homepage.addEventListener('mouseenter', function(){
		homepage.style.color = '#eb1c3c';
		homepage.style.borderBottom = '1px solid #eb1c3c';
	});
	homepage.addEventListener('mouseleave', function(){
		homepage.style.color = '#636363';
		homepage.style.borderBottom = 'none';
	});
	aboutpage.addEventListener('mouseenter', function(){
		aboutpage.style.color = '#eb1c3c';
		aboutpage.style.borderBottom = '1px solid #eb1c3c';
	});
	aboutpage.addEventListener('mouseleave', function(){
		aboutpage.style.color = '#636363';
		aboutpage.style.borderBottom = 'none';
	});

	facebook.children[0].setAttribute('src', window.location.origin + '/txm2015/valhaven/images/icons/facebook-dark.png');
	twitter.children[0].setAttribute('src', window.location.origin + '/txm2015/valhaven/images/icons/twitter-dark.png');


})();