<div class="modal-content clearfix" id="container-1">
	
	<button type="button" id="next-btn" class="btn">ACCEPT STORY</button>

</div>

<script>
	
	(function(){

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

		botanical.setAttribute('class', 'inactive');
		apartment.setAttribute('class', 'inactive');
		home.setAttribute('class', 'inactive');

		for(var i = 0; i < mapContainer.children.length - 1; i++){

			if( !Map.hasClass(mapContainer.children[i], "visited") ){

				mapContainer.children[i].setAttribute('class', 'inactive');

			}

		}

		accept.addEventListener('click', function(){

			container.removeChild(accept);

			var instruct = document.createElement("DIV");
			instruct.innerHTML = instructText;
			instruct.setAttribute("id", "instructions-1");
			instruct.setAttribute("class", "red-bg");
			container.appendChild(instruct);

			var nextCh = document.createElement('A');
			nextCh.innerHTML = "NEXT CHAPTER";
			nextCh.setAttribute("id", "next-btn");
			nextCh.setAttribute("class", "btn");
			nextCh.setAttribute("href","../ch_2/");
			instruct.appendChild(nextCh);

		});

	})();

</script>