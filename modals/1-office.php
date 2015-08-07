<div class="modal-content clearfix" id="container-1">
	
	<button type="button" id="next-btn" class="btn">ACCEPT STORY</button>

</div>

<script>
	
	(function(){

		var modal = document.getElementById('modal');
		var container = document.getElementById('container-1');
		var accept = document.getElementById('next-btn');
		var instructText = "<p>These are the instructions that tell the viewer that they are to be Layna from this point onward.</p>"

		var map = document.getElementById('map');
		var notebook = document.getElementById('notebook');
		var video = document.getElementById("ch_video");

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

		});

		accept.addEventListener('click', function(){

			Map.removeVideoEvents();

			container.removeChild(accept);

			var instruct = document.createElement("DIV");
			instruct.setAttribute("id", "instructions-1");
			instruct.setAttribute("class", "red-bg");
			container.appendChild(instruct);

			var instructText = document.createElement("P");
			instructText.innerHTML = "These are the instructions that tell the viewer that they are to be Layna from this point onward.";
			instructText.setAttribute("id", "instructText");
			instruct.appendChild(instructText);

			var nextCh = document.createElement('A');
			nextCh.innerHTML = "OKAY";
			nextCh.setAttribute("id", "next-btn");
			nextCh.setAttribute("class", "btn");
			instruct.appendChild(nextCh);

			map.style.display = 'block';
			notebook.style.display = 'block';

			nextCh.addEventListener('click', function(){

				instructText.innerHTML = "Instructions for the map.";

				nextCh.innerHTML = "GOT IT";

				Sliders.showMap();
				nextCh.addEventListener('click', firstClick);

				function firstClick(){
					nextCh.removeEventListener("click", firstClick);
					nextCh.addEventListener("click", secondClick);

					instructText.innerHTML = "Instructions for the notebook.";
					// total.innerHTML = "2/2";

					Sliders.hideMap();
					Sliders.showNotebook();
				}

				function secondClick(){
					modal.setAttribute("class", "off");
					Sliders.showMap();
					Sliders.hideNotebook();
				}

			});

		});

	})();

</script>