<h1 id="quNum">YOU CAN ASK 2 QUESTIONS</h1>

<ul id="questions">
	<li id="qu1"ref="94"><h3>WHEN DID PEOPLE BEGIN TO SHOW SYMPTOMS?</h3></li>
	<li id="qu2"ref="103"><h3>WHAT IS THE CURRENT DEATH TOLL?</h3></li>
	<li id="qu3"ref="110"><h3>HAS THE COUNTRY EVER EXPERIENCED ANYTHING LIKE THIS BEFORE?</h3></li>
	<li id="qu4"ref="141"><h3>WHAT ARE THE PROTOCOLS FOR FRONTLINE WORKERS?</h3></li>
	<li id="qu5"ref="126"><h3>HAVE ANY OTHER AREAS BEEN AFFECTED?</h3></li>
</ul>

<script>
	
	(function(){

		var body = document.getElementById('body');
		var video = document.getElementById("ch_video");
		var modal = document.getElementById('modal');
		var playButton = document.getElementById("play-pause");
		var progressContainer = document.getElementById("progress-container");
		var questions = document.getElementById('questions');
		var quNum = document.getElementById('quNum');
		var asked = 0;
		var newNote = document.getElementById('newNote');

		progressContainer.removeEventListener("mousedown", VidControl.handleProgressMouseDown);
		progressContainer.removeEventListener("touchstart", VidControl.handleProgressTouchDown);

		progressContainer.style.opacity = "0.5";
		modal.style.background = "rgba(0,0,0,0.5)";

		video.addEventListener("timeupdate", checkTime);	

		function checkTime(){ // ending @ 160
			if((video.currentTime > 93 && video.currentTime < 93.9) || 
				(video.currentTime > 100.6 && video.currentTime < 101) ||
				(video.currentTime > 109 && video.currentTime < 109.8) ||
				(video.currentTime > 125.2 && video.currentTime < 125.9 ||
				(video.currentTime > 140 && video.currentTime < 140.9) ||
				(video.currentTime > 162.5 && video.currentTime < 162.9))){
					asked++;
					if(asked >= 5){
						modal.style.left = "-9999px";
						modal.style.right = "-9999px";
						video.currentTime = 163;
						document.addEventListener('keydown', VidControl.spaceDown, false);
						video.play();
					} else if(asked >= 3 && asked <= 4) {
						video.pause();
						document.removeEventListener('keydown', VidControl.spaceDown, false);
						modal.style.left = 0;
						modal.style.right = 0;
						quNum.innerHTML = "YOU CAN ASK 1 MORE QUESTION";
					} else {
						video.pause();
						document.removeEventListener('keydown', VidControl.spaceDown, false);
						modal.style.left = 0;
						modal.style.right = 0;
					}
			}
		}

		for(var i = 0; i < questions.children.length; i++ ){
			questions.children[i].addEventListener('click', playQuestion);
		}

		function playQuestion(){
			this.style.opacity = "0.3";
			this.children[0].style.cursor = "default";
			this.removeEventListener('click', playQuestion);
			modal.style.left = "-9999px";
			modal.style.right = "-9999px";
			video.currentTime = this.getAttribute('ref');
			document.addEventListener('keydown', VidControl.spaceDown, false);
			video.play();
		}

		Local.setInactive( [botanical, apartment, office, home] );

		video.addEventListener('ended', function(){

			body.removeChild(modal);
			
			Local.addNoteIfAbsent("press", "Press Conference - Gov’t seems to be doing everything it can.", true, press);

			Map.removeVideoEvents();

			if(Local.visited.length === 1){
				newNote.volume = "0.7";
				newNote.play();
			}

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