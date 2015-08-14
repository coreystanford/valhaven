
<div id="popup" class="modal-content clearfix">
	<div id="instructions-1" class="red-bg">
		<h2>Follow the Address</h2>
		<p>Go to the address from the mysterious box to see what this is all about.</p>
		<button type="button" id="next-btn" class="btn">OKAY</button>
	</div>
</div>

<script type="text/javascript">
	(function(){

		var body = document.getElementById('body');
		var video = document.getElementById("ch_video");
		var modal = document.getElementById('modal');
		var popup = document.getElementById('popup');
		var nextBtn = document.getElementById('next-btn');

		Local.setInactive( [botanical, apartment, office, home] );

		video.addEventListener('ended', function(){

			nextBtn.addEventListener('click', function(){

				modal.removeChild(popup);

				Sliders.showMap();
				Sliders.hideNotebook();

				Local.addNoteIfAbsent("flashback", "Office - Hiren of the Valley? It’s been extinct since I was a kid.", false);

				apartment.setAttribute('class', '');
				apartment.addEventListener('click', Map.route);
			});

			Map.removeVideoEvents();

		});

	})();
</script>