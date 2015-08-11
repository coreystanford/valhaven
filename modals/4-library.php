<?php require '../config.php'; ?>

<div id="popup" class="modal-content clearfix">
	<div id="instructions-1" class="red-bg">
		<h2>Research the Mysterious Plant</h2>
		<p>It’s time for some old-fashioned research. See if you can unearth more about the mysterious plant from the Botanical Research Facility by reading through some books at the Library.</p>
		<button type="button" id="next-btn" class="btn">OKAY</button>
	</div>
</div>

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
		var popup = document.getElementById('popup');
		var close = document.getElementById('next-btn');
		var read = 0;

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

		book1.addEventListener('click', openBook);
		book2.addEventListener('click', openBook);
		book3.addEventListener('click', openBook);
		book4.addEventListener('click', openBook);
		book5.addEventListener('click', openBook);

		close.addEventListener('click', function(){
			modal.removeChild(popup);
		});

		video.addEventListener('ended', function(){
			// remove the events that control video and sliders
			Map.removeVideoEvents();
		});

		function openBook(){
			this.setAttribute('class', '');
			this.children[0].setAttribute('class', '');
			this.removeEventListener('click', openBook);
			this.style.cursor = "default";

			this.style.top = "50%";
			this.style.left = "50%";
			this.style.width = "70%";
			this.style.height = "88%";
			this.style.zIndex = "25";

			this.children[0].children[1].addEventListener('click', closeBook);
		}

		function closeBook(){
			this.parentNode.parentNode.style.display = "none";
			checkReads();
		}

		function checkReads(){
			read++;
			if(read >= 2){
				// show map and slide modal window over, while forcing the notebook closed
				Sliders.showMap();
				modal.style["-webkit-transition-duration"] = "0.5s";
				modal.style["-moz-transition-duration"] = "0.5s";
				modal.style["-o-transition-duration"] = "0.5s";
				modal.style["transition-duration"] = "0.5s";
				modal.style.left = "30%";
				Sliders.hideNotebook();
				// add a note and play audio if the note is absent
				Local.addNoteIfAbsent("library", "“Dominus Genii Majalis” = Hiren of the Valley.", false);
				// show office locaition on map and open route
				office.setAttribute('class', '');
				office.addEventListener('click', Map.route);
			}
		}

	})();

</script>