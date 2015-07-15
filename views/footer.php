		</main><!-- /main -->

		<div id="modal" class="off" role="complementary"></div><!-- /modal -->

		<?php if (count($customScripts)): ?>

			<?php foreach ($customScripts as $script): ?>

				<script src="<?php echo JS_PATH . $script; ?>" type="text/javascript" charset="utf-8"></script>

			<?php endforeach ?>

		<?php endif ?>

	</body><!-- /body -->
	
</html><!-- /html -->