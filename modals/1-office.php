<div class="modal-content clearfix" id="container-1">
	
	<button type="button" id="next-btn" class="btn">ACCEPT STORY</button>

</div>

<script>
	
	(function(){

		var modal = document.getElementById('modal');
		var container = document.getElementById('container-1');
		var accept = document.getElementById('next-btn');
		var instructText = "<p>These are the instructions that tell the viewer that they are to be Layna from this point onward.</p>"

		var mapContainer = document.getElementById('map-container');
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		if( !Map.hasClass(botanical, "visited") ){botanical.setAttribute('class', 'inactive');}
		if( !Map.hasClass(apartment, "visited") ){apartment.setAttribute('class', 'inactive');}
		if( !Map.hasClass(home, "visited") ){home.setAttribute('class', 'inactive');}

		for(var i = 0; i < mapContainer.children.length - 1; i++){

			if( !Map.hasClass(mapContainer.children[i], "inactive") && !Map.hasClass(mapContainer.children[i], "visited") ){

				mapContainer.children[i].addEventListener('click', Map.reroute);

			}

		}

		if(localStorage.getItem( 'visited' )){
			var visited = JSON.parse( localStorage.getItem( 'visited' ) );
		} else {
			var visited = []; 
		}

		if(visited.length >= 3){
			apartment.setAttribute('class', '');
			apartment.addEventListener('click', function(){
				window.location = "/valhaven/chapters/ch_2/";
			});
		}

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