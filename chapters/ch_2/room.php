<?php require HEADER; ?>

	<div id="room-container">
	
		<div id="room-inner-container">
			
			<div id="paint1" class="flash"><img class="hidden" src="<?php echo IMAGE_PATH; ?>paint_1.png"></div>
			<div id="paint2" class="flash"><img class="hidden" src="<?php echo IMAGE_PATH; ?>paint_2.png"></div>
			
			<div id="gardiner-id" class="flash">
				
				<div class="hidden">
					<img src="<?php echo IMAGE_PATH; ?>id.jpg">
					<div id="idText">
						<p>Great Work!</p>
						<p>You found the ID card.</p>
						<p>Now you can go visit the Botanical Research Facility to continue the story.</p>
						<button type="button" class="btn" id="goToBot">Continue</button>
					</div>
				</div>

			</div>

			<img id="room-bg" src="<?php echo IMAGE_PATH; ?>room.jpg">

		</div>

	</div>

<?php require FOOTER; ?>