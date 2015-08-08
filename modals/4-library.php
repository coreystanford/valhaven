<?php require '../config.php'; ?>

<div id="library-container">
	
		<div id="library-inner-container">
			
			<div id="book1" class="flash">
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>book1.jpg">
					<button type="button" class="close-book" title="close">X</button>
				</div>
			</div>
			<div id="book2" class="flash">
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>book2.jpg">
					<button type="button" class="close-book" title="close">X</button>
				</div>
			</div>
			<div id="book3" class="flash">
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>book3.jpg">
					<button type="button" class="close-book" title="close">X</button>
				</div>
			</div>
			<div id="book4" class="flash">
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>book4.jpg">
					<button type="button" class="close-book" title="close">X</button>
				</div>
			</div>
			<div id="book5" class="flash">
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>book5.jpg">
					<button type="button" class="close-book" title="close">X</button>
				</div>
			</div>

			<img id="library-bg" src="<?php echo IMAGE_PATH; ?>library.jpg">

		</div>

	</div>

<script>
	
	(function(){

		var video = document.getElementById("ch_video");
		var modal = document.getElementById('modal');

		var container = document.getElementById('library-container');
		var inner = document.getElementById('modal');
		var bg = document.getElementById('library-bg');

		modal.style.zIndex = "15";

		Local.setInactive( [office, home] );

		bg.addEventListener('click', function(){

			if(Map.hasClass(book1.children[0], "hidden")){
				book1.setAttribute('class', '');
				book1.offsetWidth = book1.offsetWidth;
				book1.setAttribute('class', 'flash');
			}
			if(Map.hasClass(book2.children[0], "hidden")){
				book2.setAttribute('class', '');
				book2.offsetWidth = book2.offsetWidth;
				book2.setAttribute('class', 'flash'); 
			}
			if(Map.hasClass(book3.children[0], "hidden")){
				book3.setAttribute('class', '');
				book3.offsetWidth = book3.offsetWidth;
				book3.setAttribute('class', 'flash');
			}
			if(Map.hasClass(book4.children[0], "hidden")){
				book4.setAttribute('class', '');
				book4.offsetWidth = book4.offsetWidth;
				book4.setAttribute('class', 'flash');
			}
			if(Map.hasClass(book5.children[0], "hidden")){
				book5.setAttribute('class', '');
				book5.offsetWidth = book5.offsetWidth;
				book5.setAttribute('class', 'flash');
			}

		});

		video.addEventListener('ended', function(){

			

		});
// “Dominus Genii Majalis” = Hiren of the Valley.
	})();

</script>