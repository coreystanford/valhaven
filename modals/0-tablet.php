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
			<img src="<?php echo IMAGE_PATH; ?>item1_thumb.jpg">
			<!-- <h1>Look Out Kim and John, Sand's the Main Attraction</h1> -->
		</div>
		<div class="article" ref="1">
			<img src="<?php echo IMAGE_PATH; ?>item2_thumb.jpg">
			<!-- <h1>Fans Fine with Waiting in Line</h1> -->
		</div>
		<div class="article" ref="2">
			<img src="<?php echo IMAGE_PATH; ?>item3_thumb.jpg">
			<!-- <h1>Item Three</h1> -->
		</div>
		<div class="article" ref="3">
			<img src="<?php echo IMAGE_PATH; ?>item4_thumb.jpg">
			<!-- <h1>Item Four</h1> -->
		</div>
		<div class="article" ref="4">
			<img src="<?php echo IMAGE_PATH; ?>item5_thumb.png">
			<!-- <h1>Item Five</h1> -->
		</div>
		<div class="article" ref="5">
			<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
			<h1>Item Six</h1>
		</div>

	</div>

	<div id="articles">
		
		<div class="off article-bg">
			<div class="inner-article">
				<img src="<?php echo IMAGE_PATH; ?>item1.jpg">
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>
		<div class="off article-bg">
			<div class="inner-article">
				<img src="<?php echo IMAGE_PATH; ?>item2.jpg">
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>
		<div class="off article-bg">
			<div class="inner-article">
				<img src="<?php echo IMAGE_PATH; ?>item3.jpg">
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>
		<div class="off article-bg">
			<div class="inner-article">
				<img src="<?php echo IMAGE_PATH; ?>item4.jpg">
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>
		<div class="off article-bg">
			<div class="inner-article">
				<img src="<?php echo IMAGE_PATH; ?>item5.png">
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>
		<div class="off article-bg">
			<div class="inner-article">
				<div class="left-art">
					<img src="<?php echo IMAGE_PATH; ?>default-black.jpg">
				</div>
				<div class="right-art">
					<h1>Item Six</h1>

					<p>Donec pharetra eu augue eu venenatis. Nunc vel elit eu dui bibendum mollis ut ut erat. Curabitur ac rutrum lacus, sit amet vulputate augue. Aliquam vel ligula non tortor hendrerit condimentum. Aenean suscipit nec felis at convallis. Suspendisse a turpis tincidunt, viverra quam eu, ultrices ex. Donec auctor quam vel purus lobortis gravida.</p>

					<p>Sed quis nisi eros. Praesent non nunc vel nunc aliquet varius. Pellentesque aliquet, odio quis pellentesque posuere, lectus erat consequat lacus, pretium placerat turpis mauris nec tortor. Proin leo magna, pharetra non ornare id, faucibus vitae erat. Ut feugiat vel mauris vel gravida. Duis dictum blandit eleifend. Nullam porta malesuada dolor scelerisque volutpat. Cras tempus pretium laoreet. Ut imperdiet libero at ullamcorper vestibulum. Cras sed laoreet diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris laoreet ultrices ultrices. In sit amet mauris fringilla, pretium urna sed, egestas est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam metus ante, euismod at laoreet et, dictum eget diam. Morbi a sem ut neque finibus dapibus a suscipit nunc.</p>

					<p>Donec id libero quis nunc porttitor cursus. Nam bibendum velit magna. Cras rutrum quis diam sit amet varius. Etiam tempus enim orci, et rutrum felis maximus sit amet. In eleifend luctus faucibus. Suspendisse ut libero dui. Maecenas euismod arcu finibus arcu viverra, at varius tortor condimentum.</p>

					<p>Integer tempus iaculis dictum. Sed lacinia diam nec nulla scelerisque congue. Praesent facilisis arcu vestibulum, placerat est vel, feugiat velit. Aenean at ex a lectus cursus euismod id nec sem. Aliquam aliquet, urna sed luctus condimentum, orci ex tristique augue, ac suscipit ante eros non quam. Vestibulum malesuada nunc tortor, vel ultrices ex placerat et. Sed enim nunc, sodales et enim efficitur, feugiat tristique ante. Aliquam posuere a arcu a placerat. Proin accumsan rhoncus nisi dignissim porta. Duis sagittis vel ligula nec sollicitudin. Curabitur vitae eros nunc. Etiam fermentum tortor ac justo molestie, nec hendrerit dui rhoncus. Sed cursus ipsum eget dictum accumsan.</p>

					<p>Cras sit amet feugiat elit. In non cursus leo. Etiam ut imperdiet nisi. Quisque quis velit libero. Praesent luctus, mauris nec suscipit blandit, arcu ligula hendrerit nisl, quis faucibus leo velit eget leo. Cras tortor arcu, malesuada et vehicula nec, malesuada id ligula. Suspendisse pulvinar, neque eget molestie pellentesque, odio nulla tempus quam, eu accumsan libero enim sit amet lectus.</p>
				</div>
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>

		<div id="next-ch" class="off article-bg"> 

			<a id="next-btn" class="btn" href="<?php echo CH_PATH; ?>ch_1" type="button">NEXT CHAPTER</a>

		</div>

	</div>

</div>

<img id="bg-ch_0" src="<?php echo IMAGE_PATH; ?>ch_0-end.jpg">

<script>
	
	(function(){

		var ipad = document.getElementById('ipad');
		var app = document.getElementById("newsapp");
		var next = document.getElementById("next-ch");
		var clicks = 0;

		function newClick(){
			clicks++;
			if(clicks === 3){
				next.setAttribute("class", "article-bg");
			}
		}

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
					this.parentNode.setAttribute('class', 'off article-bg');
					newClick();
				})

			});

			articles.children[i].addEventListener('touchstart', function(){

				e.preventDefault();
				var ref = this.getAttribute('ref');
				contents.children[ref].setAttribute('class', 'article-bg');

				var close = document.getElementsByClassName('close-article');
				close[ref].addEventListener("touchstart", function(e){
					e.preventDefault();
					this.parentNode.setAttribute('class', 'off article-bg');
					newClick();
				})
				
			});

		};

	})();

</script>