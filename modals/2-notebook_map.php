<div class="modal-content red-bg" id="container-2">
	
	<p>Instructions for the map and the notebook.</p>

	<button type="button" id="next-btn" class="btn">View</button>

</div>

<script>
	
	var btn = document.getElementById('next-btn');

	btn.addEventListener('click', function(){

		modal.setAttribute("class", "off");
		sliders.showMap();
		

	});

</script>