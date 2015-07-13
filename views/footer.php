		</main><!-- /main -->

		<div id="modal" role="complementary"></div><!-- /modal -->

		<?php if (count($customScripts)): ?>

			<?php foreach ($customScripts as $script): ?>

				<script src="js/<?php echo $script; ?>" type="text/javascript" charset="utf-8"></script>

			<?php endforeach ?>

		<?php endif ?>

	</body><!-- /body -->
	
</html><!-- /html -->