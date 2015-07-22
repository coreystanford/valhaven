<div class="modal-content clearfix" id="container-1">
	
	<button type="button" id="main-btn" class="btn">ACCEPT THE STORY</button>

</div>

<script>
	
	(function(){

		var container = document.getElementById('container-1');
		var accept = document.getElementById('main-btn');
		var instructText = "<p>These are the instructions that tell the viewer that they are to be Layna from this point onward.</p>"

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