<?php require '../config.php'; ?>

<div id="ipad">
	<img src="<?php echo IMAGE_PATH; ?>iPad.png">
</div>

<div id="newsapp">	

	<div id="tablet-bar">
		<img src="<?php echo IMAGE_PATH; ?>wifi-power.png">
	</div>

	<div id="news-container">
		
		<div class="article" ref="0">
			<img src="<?php echo IMAGE_PATH; ?>item1.jpg">
			<h1>Item One</h1>
		</div>
		<div class="article" ref="1">
			<img src="<?php echo IMAGE_PATH; ?>item2.jpg">
			<h1>Item Two</h1>
		</div>
		<div class="article" ref="2">
			<img src="<?php echo IMAGE_PATH; ?>item3.jpg">
			<h1>Item Three</h1>
		</div>
		<div class="article" ref="3">
			<img src="<?php echo IMAGE_PATH; ?>item4.jpg">
			<h1>Item Four</h1>
		</div>
		<div class="article" ref="4">
			<img src="<?php echo IMAGE_PATH; ?>item5.jpg">
			<h1>Item Five</h1>
		</div>
		<div class="article" ref="5">
			<img src="<?php echo IMAGE_PATH; ?>item6.jpg">
			<h1>Item Six</h1>
		</div>

	</div>

	<div id="articles">
		
		<div class="off article-content" ref="0">
			<button type="button" class="close-article">Close</button>
			<h1>Item One</h1>
		</div>
		<div class="off article-content" ref="1">
			<button type="button" class="close-article" ref="2">Close</button>
			<h1>Item Two</h1>
		</div>
		<div class="off article-content" ref="2">
			<button type="button" class="close-article">Close</button>
			<h1>Item Three</h1>
		</div>
		<div class="off article-content" ref="3">
			<button type="button" class="close-article">Close</button>
			<h1>Item Four</h1>
		</div>
		<div class="off article-content" ref="4">
			<button type="button" class="close-article">Close</button>
			<h1>Item Five</h1>
		</div>
		<div class="off article-content" ref="5">
			<button type="button" class="close-article">Close</button>
			<h1>Item Six</h1>
		</div>

	</div>

</div>

<script>
	
	(function(){

		var ipad = document.getElementById('ipad');
		var app = document.getElementById("newsapp");

		var width = ipad.clientWidth;
		app.style.width = ( width - ( width * 0.09 ) ) + "px";
		app.style.height = ( ( width / 2 ) + ( width * 0.01 ) ) + "px";

		window.addEventListener('resize', function(){
			width = ipad.clientWidth;
			app.style.width = ( width - ( width * 0.09 ) ) + "px";
			app.style.height = ( ( width / 2 ) + ( width * 0.01 ) ) + "px";
		});

		var articles = document.getElementById('news-container');
		var contents = document.getElementById('articles');

		console.log(contents.children[0]);

		for (var i = 0; i < articles.children.length; i++) {

			articles.children[i].addEventListener('click', function(e){
				
				e.preventDefault();
				var ref = this.getAttribute('ref');
				contents.children[ref].setAttribute('class', 'article-content');

				var close = document.getElementsByClassName('close-article');
				close[ref].addEventListener("click", function(e){
					e.preventDefault();
					this.parentNode.setAttribute('class', 'off article-content');
				})

			});

			articles.children[i].addEventListener('touchstart', function(){

				e.preventDefault();
				var ref = this.getAttribute('ref');
				contents.children[ref].setAttribute('class', 'article-content');

				var close = document.getElementsByClassName('close-article');
				close[ref].addEventListener("touchstart", function(e){
					e.preventDefault();
					this.parentNode.setAttribute('class', 'off article-content');
				})
				
			});

		};






	})();
	

</script>












