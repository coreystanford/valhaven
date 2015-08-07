<?php require '../config.php'; ?>

	<img src="<?php echo IMAGE_PATH; ?>library.jpg">

<script>
	
	(function(){

		var mapContainer = document.getElementById('map-container');
		var video = document.getElementById("ch_video");
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var office = document.getElementById('office');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		Local.setInactive( [office, home] );

		video.addEventListener('ended', function(){

			

		});

	})();

</script>