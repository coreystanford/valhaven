<?php require '../config.php'; ?>

<div id="newsapp">
	


</div>
	
<img id="ipad" src="<?php echo IMAGE_PATH; ?>iPad.png">

<script>
	
	video.onend = function(){

		var app = document.getElementById("newsapp");
		var ipad = document.getElementById('ipad').clientWidth;

		console.log(ipad);

	};

</script>