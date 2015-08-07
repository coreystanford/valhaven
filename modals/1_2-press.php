	
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
		var quNum = document.getElementById('quNum');
		var asked = 0;

		var video = document.getElementById("ch_video");

		// progressContainer.removeEventListener("mousedown", VidControl.handleProgressMouseDown);
		// progressContainer.removeEventListener("touchstart", VidControl.handleProgressTouchDown);

		progressContainer.style.opacity = "0.5";

		video.addEventListener("timeupdate", checkTime);	

		function checkTime(){ // ending @ 160
			if((video.currentTime > 93 && video.currentTime < 93.9) || 
				(video.currentTime > 100.6 && video.currentTime < 101) ||
				(video.currentTime > 107.6 && video.currentTime < 108) ||
				(video.currentTime > 122.2 && video.currentTime < 122.9 ||
				(video.currentTime > 136 && video.currentTime < 136.9) ||
				(video.currentTime > 158 && video.currentTime < 158.9))){
					asked++;
					if(asked >= 5){
						modal.style.left = "-9999px";
						modal.style.right = "-9999px";
						video.currentTime = 160;
						video.play();
					} else if(asked >= 3 && asked <= 4) {
						video.pause();
						modal.style.left = 0;
						modal.style.right = 0;
						quNum.innerHTML = "YOU CAN ASK 1 MORE QUESTION";
					} else {
						video.pause();
						modal.style.left = 0;
						modal.style.right = 0;
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

		Local.setInactive( [botanical, apartment, office, home] );

		video.addEventListener('ended', function(){

			body.removeChild(modal);
			
			var isAbsent = true;
			for(var i = 0; i < Local.visited.length; i++){
				if(Local.visited[i] === "press"){
					isAbsent = false;
				}
			}
			if(isAbsent){
				Local.visited.push("press");
				localStorage.setItem( 'visited', JSON.stringify(Local.visited) );
				Local.visit(press);
				Local.storedNotes.push("Gov’t seems to be doing everything it can.");
				localStorage.setItem( 'notes', JSON.stringify(Local.storedNotes) );
			}

			Map.removeVideoEvents();

			if(Local.visited.length >= 3){
				var cleanHREF = window.location.href.split("?");
				window.location.href = cleanHREF[0] + "?action=flashback";
			} else {
				Sliders.showMap();
				Sliders.hideNotebook();
			}

		});

	})();

</script>

