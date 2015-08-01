<div class="modal-content red-bg">
	
	<h1>CDC</h1>

</div>

<script>
	
	(function(){

		var body = document.getElementById('body');
		var modal = document.getElementById('modal');

		body.removeChild(modal);

		var mapContainer = document.getElementById('map-container');
		var video = document.getElementById("ch_video");
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		botanical.setAttribute('class', 'inactive');
		apartment.setAttribute('class', 'inactive');
		home.setAttribute('class', 'inactive');

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

		video.addEventListener('ended', function(){

			if(localStorage.getItem( 'notes' )){
				var storedNotes = JSON.parse( localStorage.getItem( 'notes' ) );
			} else {
				var storedNotes = []; 
			}
			
			var isAbsent = true;
			for(var i = 0; i < visited.length; i++){
				if(visited[i] === "cdc"){
					isAbsent = false;
				}
			}
			if(isAbsent){
				visited.push("cdc");
				localStorage.setItem( 'visited', JSON.stringify(visited) );
				storedNotes.push("NOT HELPFUL AT ALL! (I should send in a complaint!)");
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
				apartment.setAttribute('class', '');
				apartment.addEventListener('click', function(){
					window.location = "/valhaven/chapters/ch_2/";
				});
			}

		});

	})();

</script>