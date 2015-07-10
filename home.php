<?php require './views/header.php'; ?>

<!-- <div id="main-loader">
	<h1 id="welcome">Welcome to Valhaven</h1>
	<p class="loader">Loading... </p>
</div><!-- /loader -->

<div id="fade">

	<h1>Homepage</h1>

	<div id="videoBox" style="float:left; width:58%;">
	
		<video  poster="" preload="metadata">
			<source id="" src="videos/sample.webm">
			<source id="" src="videos/sample.mp4">
			<source id="" src="videos/sample.ogv">
			<!-- <track id="nav" src="navigation.vtt" kind="chapters" srclang="en"></track> -->
			<!-- <track id="cc" src="captions.vtt" kind="captions" label="captions" srclang="en" default></track> -->
		</video>

		<div id="controls">
			<div id="button"><input id="play" type="image" src="" alt="Play video"></div>
			<div id="positionview">
				<div id="transportbar">
					<div id="position"></div>
				</div>
				<ul id="segments" title="chapter navigation" aria-describedby="keys"></ul>
			</div>
			<div id="time">
				<span id="curTime">00:00</span>/<span id="duration">00:00</span>
			</div>
		</div>

		<div style="display: block; clear: both;"></div>

		<ul id="keys">
			<li><span>space</span> = play / pause toggle</li>
			<li><span>enter</span> = navigate to chapter</li>
			<li><span>tab</span> = navigate chapters</li>
			<li><span>ctl-alt-downarrow</span> = navigate text elements</li>
		</ul>

	</div>

</div>

<?php require './views/footer.php'; ?>