<?php require '../config.php'; ?>

<div id="newsapp">
	


</div>
<div id="ipad">
	<img src="<?php echo IMAGE_PATH; ?>iPad.png">
</div>	


<script>
	
	(function(){
		var modal = document.getElementById("modal");
		var app = document.getElementById("newsapp");
		var ipad = document.getElementById('ipad');

		// var checkLoaded = setInterval(function(){

			// if(ipad.clientWidth != 0){
				console.log(ipad.clientWidth);
				var width = ipad.clientWidth;
				app.style.width = ( width - ( width * 0.09 ) ) + "px";
				app.style.height = ( ( width / 2 ) + ( width * 0.01 ) ) + "px";

				window.addEventListener('resize', function(){
					width = ipad.clientWidth;
					app.style.width = ( width - ( width * 0.09 ) ) + "px";
					app.style.height = ( ( width / 2 ) + ( width * 0.01 ) ) + "px";
				});

				// clearInterval(checkLoaded);

			// } else {
				// console.log(ipad.clientWidth);
			// }

		// }, 1);
	})();
	

</script>