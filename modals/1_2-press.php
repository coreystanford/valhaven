	
<ul id="questions">
	<li id="qu1"ref="94"><h4>WHEN DID PEOPLE BEGIN TO SHOW SYMPTOMS?</h4></li>
	<li id="qu2"ref="101.2"><h4>WHAT IS THE CURRENT DEATH TOLL?</h4></li>
	<li id="qu3"ref="108.2"><h4>HAS THE COUNTRY EVER EXPERIENCED ANYTHING LIKE THIS BEFORE?</h4></li>
	<li id="qu4"ref="137"><h4>WHAT ARE THE PROTOCOLS FOR FRONTLINE WORKERS?</h4></li>
	<li id="qu5"ref="123"><h4>HAVE ANY OTHER AREAS BEEN AFFECTED?</h4></li>
</ul>

<h1 id="quNum">YOU CAN ASK 2 QUESTIONS</h1>


<script>
	
	(function(){

		var body = document.getElementById('body');
		var modal = document.getElementById('modal');
		var playButton = document.getElementById("play-pause");
		var progressContainer = document.getElementById("progress-container");
		var questions = document.getElementById('questions');
		var asked = 0;

		var mapContainer = document.getElementById('map-container');
		var video = document.getElementById("ch_video");
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var office = document.getElementById('office');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		botanical.setAttribute('class', 'inactive');
		apartment.setAttribute('class', 'inactive');
		office.setAttribute('class', 'inactive');
		home.setAttribute('class', 'inactive');

		progressContainer.removeEventListener("mousedown", VidControl.handleProgressMouseDown);
		progressContainer.removeEventListener("touchstart", VidControl.handleProgressTouchDown);

		progressContainer.style.opacity = "0.5";

		for(var i = 0; i < mapContainer.children.length - 1; i++){

			if( !Map.hasClass(mapContainer.children[i], "inactive") && !Map.hasClass(mapContainer.children[i], "visited") ){

				mapContainer.children[i].addEventListener('click', Map.reroute);

			}

		}

		video.addEventListener("timeupdate", checkTime);	

		function checkTime(){ // ending @ 160
			if((video.currentTime > 93 && video.currentTime < 93.9) || 
				(video.currentTime > 100.6 && video.currentTime < 101) ||
				(video.currentTime > 107.6 && video.currentTime < 108) ||
				(video.currentTime > 122.2 && video.currentTime < 122.9 ||
				(video.currentTime > 136 && video.currentTime < 136.9) ||
				(video.currentTime > 158 && video.currentTime < 158.9))){
					video.pause();
					modal.style.left = 0;
					modal.style.right = 0;
					asked++;
					console.log(asked);
					if(asked >= 6){
						modal.style.left = "-9999px";
						modal.style.right = "-9999px";
						video.currentTime = 160;
						video.play();
					}
			}
		}

		for(var i = 0; i < questions.children.length; i++ ){
			questions.children[i].addEventListener('click', playQuestion);
		}

		function playQuestion(){
			this.style.opacity = "0.5";
			this.style.cursor = "default";
			this.removeEventListener('click', playQuestion);
			modal.style.left = "-9999px";
			modal.style.right = "-9999px";
			video.currentTime = this.getAttribute('ref');
			video.play();
		}

		video.addEventListener('ended', function(){

			body.removeChild(modal);

			if(localStorage.getItem( 'visited' )){
				var visited = JSON.parse( localStorage.getItem( 'visited' ) );
			} else {
				var visited = []; 
			}

			if(localStorage.getItem( 'notes' )){
				var storedNotes = JSON.parse( localStorage.getItem( 'notes' ) );
			} else {
				var storedNotes = []; 
			}
			
			var isAbsent = true;
			for(var i = 0; i < visited.length; i++){
				if(visited[i] === "press"){
					isAbsent = false;
				}
			}
			if(isAbsent){
				visited.push("press");
				localStorage.setItem( 'visited', JSON.stringify(visited) );
				storedNotes.push("Gov’t seems to be doing everything it can.");
				localStorage.setItem( 'notes', JSON.stringify(storedNotes) );
			}

			for(var v = 0; v < visited.length; v++){

				for(var i = 0; i < mapContainer.children.length - 1; i++){

					var iconId = mapContainer.children[i].getAttribute('id');

					if( visited[v] == iconId ){

						var thisIcon = document.getElementById(iconId);
						thisIcon.setAttribute('class', 'visited');
						mapContainer.children[i].removeEventListener('click', Map.reroute);

					}

				}

			}

			Sliders.showMap();
			Sliders.hideNotebook();

			Map.removeVideoEvents();

			if(visited.length >= 3){
				var cleanHREF = window.location.href.split("?");
				window.location.href = cleanHREF[0] + "?action=flashback";
			}

		});

	})();

</script>