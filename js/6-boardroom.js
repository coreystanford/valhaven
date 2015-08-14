(function(){

	var body = document.getElementById('body');
	var video = document.getElementById("ch_video");
	var modal = document.getElementById('modal');
	var isAbsent = true;

	body.removeChild(modal);

	video.addEventListener('ended', function(){

		for(var i = 0; i < Local.visited.length; i++){
			if(Local.visited[i] === "home"){
				isAbsent = false;
			}
		}

		if(isAbsent){
			Local.visited.push("home");
			localStorage.setItem( 'visited', JSON.stringify(Local.visited) );
		}

		window.location.href = "/txm2015/valhaven/chapters/ch_7";

	});


})();