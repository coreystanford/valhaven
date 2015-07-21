<?php require '../config.php'; ?>

<div id="newsapp">	

	<div id="tablet-bar">
		<p>LAYNA'S DEVICE</p>
		<img src="<?php echo IMAGE_PATH; ?>wifi-power.png">
	</div>

	<div id="app-header">
		
	</div>

	<div id="news-container">
		
		<div class="article" ref="0">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item One</h1>
		</div>
		<div class="article" ref="1">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item Two</h1>
		</div>
		<div class="article" ref="2">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item Three</h1>
		</div>
		<div class="article" ref="3">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item Four</h1>
		</div>
		<div class="article" ref="4">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item Five</h1>
		</div>
		<div class="article" ref="5">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item Six</h1>
		</div>

	</div>

	<div id="articles">
		
		<div class="off article-bg" ref="0">
			<div class="inner-article">
				<button type="button" class="close-article">Close</button>
				<h1>Item One</h1>
			</div>
		</div>
		<div class="off article-bg" ref="0">
			<div class="inner-article">
				<button type="button" class="close-article">Close</button>
				<h1>Item Two</h1>
			</div>
		</div>
		<div class="off article-bg" ref="0">
			<div class="inner-article">
				<button type="button" class="close-article">Close</button>
				<h1>Item Three</h1>
			</div>
		</div>
		<div class="off article-bg" ref="0">
			<div class="inner-article">
				<button type="button" class="close-article">Close</button>
				<h1>Item Four</h1>
			</div>
		</div>
		<div class="off article-bg" ref="0">
			<div class="inner-article">
				<button type="button" class="close-article">Close</button>
				<h1>Item Five</h1>
			</div>
		</div>
		<div class="off article-bg" ref="0">
			<div class="inner-article">
				<button type="button" class="close-article">Close</button>
				<h1>Item Six</h1>
			</div>
		</div>

	</div>

</div>

<img id="bg-ch_0" src="<?php echo IMAGE_PATH; ?>ch_0-end.jpg">

<script>
	
	(function(){

		var ipad = document.getElementById('ipad');
		var app = document.getElementById("newsapp");

		var width = window.innerWidth;
		app.style.width = ( width * 0.824 ) + "px";
		app.style.height = ( ( width / 2 ) * 0.92 ) + "px";

		window.addEventListener('resize', function(){
			width = window.innerWidth;
			app.style.width = ( width * 0.824 ) + "px";
			app.style.height = ( ( width / 2 ) * 0.92 ) + "px";
		});

		var articles = document.getElementById('news-container');
		var contents = document.getElementById('articles');

		for (var i = 0; i < articles.children.length; i++) {

			articles.children[i].addEventListener('click', function(e){
				
				e.preventDefault();
				var ref = this.getAttribute('ref');
				contents.children[ref].setAttribute('class', 'article-bg');

				var close = document.getElementsByClassName('close-article');
				close[ref].addEventListener("click", function(e){
					e.preventDefault();
					this.parentNode.parentNode.setAttribute('class', 'off article-bg');
				})

			});

			articles.children[i].addEventListener('touchstart', function(){

				e.preventDefault();
				var ref = this.getAttribute('ref');
				contents.children[ref].setAttribute('class', 'article-bg');

				var close = document.getElementsByClassName('close-article');
				close[ref].addEventListener("touchstart", function(e){
					e.preventDefault();
					this.parentNode.parentNode.setAttribute('class', 'off article-bg');
				})
				
			});

		};






	})();
	

</script>












