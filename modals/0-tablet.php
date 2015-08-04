<?php require '../config.php'; ?>

<div id="newsapp">	

	<div id="tablet-bar">
		<p>LAYNA'S DEVICE</p>
		<img src="<?php echo IMAGE_PATH; ?>wifi-power.png">
	</div>

	<div id="app-header">
		
	</div>

	<div id="news-container">
		
		<div class="page">
			
			<div class="article" ref="0">
				<img src="<?php echo IMAGE_PATH; ?>item1_thumb.jpg">
				<h1>Sand is the Man</h1>
			</div>
			<div class="article" ref="1">
				<img src="<?php echo IMAGE_PATH; ?>item2_thumb.jpg">
				<h1>Fans Fine with Lines</h1>
			</div>
			<div class="article" ref="2">
				<img src="<?php echo IMAGE_PATH; ?>item3_thumb.jpg">
				<h1>From Alone Home to Alone</h1>
			</div>
			<div class="article" ref="3">
				<img src="<?php echo IMAGE_PATH; ?>item4_thumb.jpg">
				<h1>Old Spin on a New Album</h1>
			</div>
			<div class="article" ref="4">
				<img src="<?php echo IMAGE_PATH; ?>item5_thumb.png">
			</div>
			<div class="article" ref="5">
				<img src="<?php echo IMAGE_PATH; ?>item6_thumb.jpg">
				<h1>Carnival</h1>
			</div>

		</div>

		<div class="page">
			
			<div class="article" ref="6">
				<img src="<?php echo IMAGE_PATH; ?>item7_thumb.jpg">
				<h1>Dog Saves Man</h1>
			</div>
			<div class="article" ref="7">
				<img src="<?php echo IMAGE_PATH; ?>item8_thumb.jpg">
				<h1>Mystery Illness</h1>
			</div>
			<div class="article" ref="8">
				<img src="<?php echo IMAGE_PATH; ?>item9_thumb.jpg">
				<h1>Red Crowe FC</h1>
			</div>
			<div class="article" ref="9">
				<img src="<?php echo IMAGE_PATH; ?>item10_thumb.jpg">
				<h1>Val Tea</h1>
			</div>
			<div class="article" ref="10">
				<img src="<?php echo IMAGE_PATH; ?>item10_thumb.jpg">
				<h1>Item Five</h1>
			</div>
			<!-- <div class="article-next" ref="11" id="next-ch">
				<a id="next-btn" class="btn" href="<?php // echo CH_PATH; ?>ch_1" type="button">NEXT CHAPTER</a>
			</div> -->
			<div class="article" ref="10">
				<a href="<?php echo CH_PATH; ?>ch_1"><img src="<?php echo IMAGE_PATH; ?>next_img.jpg"></a>
				<!-- <h1>Item Five</h1> -->
			</div>

		</div>

	</div>

	<div id="articles">

		<!-- FIRST PAGE -->
		
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
				<video controls preload="none">
					<source  src="<?php echo VIDEO_PATH; ?>item6.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' ><!-- List MP4 First - Server issue -->	
					<source  src="<?php echo VIDEO_PATH; ?>item6.webm" type='video/webm; codecs="vp8, vorbis"'>
					<source src="<?php echo VIDEO_PATH; ?>item6.ogv" type='video/ogg; codecs="theora, vorbis"'>
					<p class="update_browser">Your browser is too old to support the features of this website.  Please update your browser.</p>
				</video>
			</div>
			<button type="button" class="close-article">GO BACK</button>
		</div>

		<!-- SECOND PAGE -->

		<div class="off article-bg">
			<div class="inner-article">
				<video controls preload="none">
					<source  src="<?php echo VIDEO_PATH; ?>item7.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' ><!-- List MP4 First - Server issue -->	
					<source  src="<?php echo VIDEO_PATH; ?>item7.webm" type='video/webm; codecs="vp8, vorbis"'>
					<source src="<?php echo VIDEO_PATH; ?>item7.ogv" type='video/ogg; codecs="theora, vorbis"'>
					<p class="update_browser">Your browser is too old to support the features of this website.  Please update your browser.</p>
				</video>
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

	</div>

	<div id="tabNext" class="nextPrev tabNext">
		<img type="button" src="<?php echo IMAGE_PATH; ?>tabRight.png">
	</div>
	<div id="tabPrev" class="nextPrev tabPrev hide">
		<img type="button" src="<?php echo IMAGE_PATH; ?>tabLeft.png">
	</div>

</div>

<img id="bg-ch_0" src="<?php echo IMAGE_PATH; ?>ch_0-end.jpg">

<script>
	
	(function(){

		var mapContainer = document.getElementById('map-container');
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		for(var i = 0; i < mapContainer.children.length - 1; i++){

			if( !Map.hasClass(mapContainer.children[i], "visited") ){

				mapContainer.children[i].setAttribute('class', 'inactive');

			}

		}

		var app = document.getElementById("newsapp");
		var articles = document.getElementById('news-container');
		var contents = document.getElementById('articles');
		var tabNext = document.getElementById("tabNext");
		var tabPrev = document.getElementById("tabPrev");
		var width = window.innerWidth;
		var tabWidth = ( width * 0.824 );

		app.style.width = tabWidth + "px";
		app.style.height = articles.style.width = ( ( width / 2 ) * 0.92 ) + "px";

		articles.style.width = ( tabWidth * 2 ) + "px";

		for (var v = 0; v < articles.children.length; v++) {

			for (var i = 0; i < articles.children[v].children.length; i++) {

				if(articles.children[v].children[i] != articles.children[1].children[5]){

					articles.children[v].children[i].addEventListener('click', function(e){
						
						e.preventDefault();
						var ref = this.getAttribute('ref');
						contents.children[ref].setAttribute('class', 'article-bg');

						var close = document.getElementsByClassName('close-article');
						close[ref].addEventListener("click", function(e){
							e.preventDefault();
							this.parentNode.setAttribute('class', 'off article-bg');
						});

					});

					articles.children[v].children[i].addEventListener('touchstart', function(){

						e.preventDefault();
						var ref = this.getAttribute('ref');
						contents.children[ref].setAttribute('class', 'article-bg');

						var close = document.getElementsByClassName('close-article');
						close[ref].addEventListener("touchstart", function(e){
							e.preventDefault();
							this.parentNode.setAttribute('class', 'off article-bg');
						});
						
					});

				}

			}

		}

		window.addEventListener('resize', function(){
			width = window.innerWidth;
			tabWidth = ( width * 0.824 );
			app.style.width = tabWidth + "px";
			app.style.height = articles.style.width = ( ( width / 2 ) * 0.92 ) + "px";
			articles.style.width = ( tabWidth * 2 ) + "px";
		});

		tabNext.addEventListener('click', function(){
			articles.style.left = -tabWidth + "px";
			tabNext.setAttribute("class", "nextPrev tabNext hide");
			tabPrev.setAttribute("class", "nextPrev tabPrev");
		});

		tabNext.addEventListener('touchstart', function(){
			articles.style.left = -tabWidth + "px";
			tabNext.setAttribute("class", "nextPrev tabNext hide");
			tabPrev.setAttribute("class", "nextPrev tabPrev");
		});

		tabPrev.addEventListener('click', function(){
			articles.style.left = 0;
			tabNext.setAttribute("class", "nextPrev tabNext");
			tabPrev.setAttribute("class", "nextPrev tabPrev hide");
		});

		tabPrev.addEventListener('touchstart', function(){
			articles.style.left = 0;
			tabNext.setAttribute("class", "nextPrev tabNext");
			tabPrev.setAttribute("class", "nextPrev tabPrev hide");
		});

	})();

</script>