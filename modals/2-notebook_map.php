<div class="modal-content red-bg" id="container-2">
	
	<p id="modal-txt">Instructions for the map.</p>
	<p id="total">1/2</p>
	<button type="button" id="next-btn" class="btn">GOT IT</button>

</div>

<script>

	(function(){

		var video = document.getElementById("ch_video");	
		var playButton = document.getElementById("play-pause");
		var progressContainer = document.getElementById("progress-container");

		var btn = document.getElementById('next-btn');
		var modalTxt = document.getElementById('modal-txt');
		var total = document.getElementById('total');

		var mapContainer = document.getElementById('map-container');
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

		if(visited.length === 3){
			apartment.setAttribute('class', '');
			apartment.addEventListener('click', function(){
				window.location = "/valhaven/chapters/ch_3/";
			});
		}

		btn.addEventListener('click', firstClick);

		function firstClick(){
			btn.removeEventListener("click", firstClick);
			btn.addEventListener("click", secondClick);

			modalTxt.innerHTML = "Instructions for the notebook.";
			total.innerHTML = "2/2";

			Sliders.hideMap();
			Sliders.showNotebook();
		}

		function secondClick(){
			modal.setAttribute("class", "off");
			Sliders.showMap();
			Sliders.hideNotebook();
		}

		video.addEventListener('ended', function(){

			Sliders.showMap();

			Map.removeVideoEvents();

		});

	})();

</script>