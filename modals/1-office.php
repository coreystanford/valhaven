<?php include '../config.php'; ?>

<div class="modal-content clearfix" id="container-1">
	
	<div id="instructions-1" class="red-bg">
		
		<h2 id="instructHeading">Uncover the Secrets of Valhaven</h2>

		<p id="instructText">With no one else concerned about the mysterious illness in Red Crowe, it looks like Layna needs some help. Step into her shoes and uncover the secrets of Valhaven Island before it’s too late.</p>

		<button type="button" id="next-btn" class="btn">CONTINUE</button>

	</div>

	<audio controls class="hide" id="toGo">
		<source src="<?php echo AUDIO_PATH; ?>wheretogofirst.mp3" type="audio/mpeg">
		<source src="<?php echo AUDIO_PATH; ?>wheretogofirst.wav" type="audio/wav">
		Your browser does not support the audio element.
	</audio>

</div>

<script>
	
	(function(){

		var modal = document.getElementById('modal');
		var container = document.getElementById('container-1');
		var cont = document.getElementById('next-btn');
		var instructText = document.getElementById('instructText');
		var heading = document.getElementById('instructHeading');

		var map = document.getElementById('map');
		var notebook = document.getElementById('notebook');
		var video = document.getElementById("ch_video");
		var toGo = document.getElementById('toGo');

		if(Local.visited.length <= 0){
			map.style.display = 'none';
			notebook.style.display = 'none';
		}

		Local.setInactive( [botanical, apartment, office, home] );

		video.addEventListener('ended', function(){

			if(Local.visited.length >= 3){
				var cleanHREF = window.location.href.split("?");
				window.location.href = cleanHREF[0] + "?action=flashback";
			}

			Map.removeVideoEvents();

			map.style.display = 'block';
			notebook.style.display = 'block';

		});	

		cont.addEventListener('click', function(){

			heading.innerHTML = "The Map is Your Guide";
			instructText.innerHTML = "Use the map to help guide you on your journey through Red Crowe City. Available locations are in yellow with more becoming accessible as you progress.";

			cont.innerHTML = "GOT IT";

			Sliders.showMap();
			container.style.left= "60%";
			cont.addEventListener('click', firstClick);

			function firstClick(){
				cont.removeEventListener("click", firstClick);
				cont.addEventListener("click", secondClick);

				heading.innerHTML = "Take Note";
				instructText.innerHTML = "This is your investigative-journalist notebook. After you visit a location, check your notebook to find important notes and reminders that will help you uncover what is happening in Red Crowe City.";

				Sliders.hideMap();
				Sliders.showNotebook();
				container.style.left= "40%";
			}

			function secondClick(){
				modal.setAttribute("class", "off");
				Sliders.showMap();
				Sliders.hideNotebook();
				toGo.volume = "0.4";
				toGo.play();
			}

		});

	})();

</script>