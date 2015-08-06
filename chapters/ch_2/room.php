<?php require HEADER; ?>

	<div id="room-container">
	
		<img id="room-bg" src="<?php echo IMAGE_PATH; ?>room.jpg">

	</div>

<?php require FOOTER; ?>

<script>
	(function(){
		var body = document.getElementById('body');
		var modal = document.getElementById('modal');
		body.removeChild(modal);

		var mapContainer = document.getElementById('map-container');
		var video = document.getElementById("ch_video");
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var office = document.getElementById('office');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		botanical.setAttribute('class', 'inactive');
		office.setAttribute('class', 'inactive');
		home.setAttribute('class', 'inactive');

		

	})();
</script>