require(['lib/DependencyLoader', 'CharacterRenderer', 'CollisionMap', 'Agent', 'Mob', 'Tileset', 'Joystix'],

function(DependencyLoader, CharacterRenderer, CollisionMap, Agent, Mob, Tileset, Joystix){

	'use strict';

	var map = [
			[1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
			[1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
			[1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1],
			[1,1,1,1,0,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,0,0,0,1,1,0,0,0,0,0,1,1,1],
			[1,1,0,0,0,0,0,1,1,1,1,1,0,1,1,1,0,1,1,1,1,1,0,1,1,0,1,1,1,0,1,1,1],
			[1,1,0,1,1,1,0,0,0,1,1,1,0,1,1,1,0,1,1,1,1,1,0,0,0,0,0,0,0,0,1,1,1],
			[1,1,0,1,1,1,1,1,0,1,1,1,0,1,1,1,0,1,1,1,1,1,1,1,1,0,1,1,1,0,0,0,1],
			[1,1,0,1,1,1,1,1,0,1,1,1,0,1,1,1,0,1,1,1,1,1,1,1,1,0,1,1,1,1,1,0,1],
			[1,1,0,0,0,0,1,1,0,0,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1],
			[1,1,1,1,1,0,1,1,0,1,1,1,1,1,0,1,1,1,1,0,1,1,0,1,1,1,1,1,1,1,1,0,1],
			[1,1,1,1,1,0,1,1,0,1,0,0,0,0,0,1,1,1,1,0,1,1,0,0,0,0,0,0,1,1,1,0,1],
			[1,1,0,0,0,0,1,1,0,1,0,1,1,1,1,1,1,0,1,0,1,1,1,1,1,1,1,0,1,1,1,0,1],
			[1,1,0,1,1,1,1,1,0,1,0,1,1,1,0,0,0,0,0,0,1,1,1,1,1,1,1,0,1,1,1,0,1],
			[1,1,0,1,1,0,0,0,0,1,0,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,0,1],
			[1,1,0,1,1,0,1,1,0,1,0,0,0,1,0,0,0,0,0,0,0,0,0,0,0,1,1,0,1,1,1,0,1],
			[1,1,0,0,0,0,1,1,0,1,1,1,0,1,1,1,1,1,1,1,1,1,1,1,0,1,1,0,0,0,0,0,1],
			[1,1,1,1,1,1,1,1,0,0,0,0,0,1,1,1,1,1,1,1,1,1,1,1,0,1,1,1,1,1,1,0,1],
			[1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,0,0,0,0,0,0,0,0,1],
			[1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1]
		],
		tileSize = 50,
		$body = $('body'),
		$window = $(window),
		$canvas,
		canvases = [],
		bgRenderer,
		characterRenderer,
		joystick = new Joystix({
			// assumeTouch: true,
			$window: $(window),
			keyboardSpeed: 10
		}),

		spritesToLoad = 2,

		player = new Agent({
			position: {x:16.7,y:10.6},
			collision: new CollisionMap({
				map: map
			}),
			tileset: new Tileset({
				spritePath: '../../images/woman.png',
				specPath: 'spec/woman.json',
				onReady: loadCb
			})
		}),

		guard1 = new Mob({
			position: {x:24.6,y:5.8},
			collision: new CollisionMap({
				map: map
			}),
			tileset: new Tileset({
				spritePath: '../../images/guard.png',
				specPath: 'spec/guard.json',
				onReady: loadCb
			}),
			targetAgent: player
		}),

		guard2 = new Mob({
			position: {x:7.4,y:6.5},
			collision: new CollisionMap({
				map: map
			}),
			tileset: new Tileset({
				spritePath: '../../images/guard.png',
				specPath: 'spec/guard.json',
				onReady: loadCb
			}),
			targetAgent: player
		}),
		video = document.getElementById('ch_video'),
		mazeBg = document.getElementById('mazeBg'),
		mazeCaught = document.getElementById('mazeCaught');

	function loadCb(){
		spritesToLoad--;
		if(!spritesToLoad){ 
			video.addEventListener('ended', function(){
				mazeBg.volume = 0.25;
				mazeBg.play();
				run(); 
			});
		}
	}
	
	function run(){

		var modal = document.getElementById('modal');
		var popup = document.getElementById('popup');
		var ssBtn = document.getElementById('ssBtn');
		var restart = document.getElementById('restart');
		var finished = document.getElementById('finished');
		var rBtn = document.getElementById('rBtn');
		var fBtn = document.getElementById('fBtn');
		var botanical = document.getElementById('botanical');

		// build layers
		_(2).times(function(i){
			$canvas = $('<canvas width="'+(map[0].length * tileSize)+'" height="'+(map.length * tileSize)+'" data-index="'+i+'" class="gamecanvas canvas'+i+'"/>');
			$body.append($canvas);
			canvases.push($canvas);
		});

		characterRenderer = new CharacterRenderer({
			$el: canvases[0],
			tileSize: tileSize,
			agents: [
				player,
				guard1,
				guard2
			]
		});

		// input
		joystick.onMove(function(movement){
			player.doMove(movement.x1 * 0.01, movement.y1 * 0.01);
		});

		// run game
		function gameLoop(){
			characterRenderer.draw();
			guard1.chooseAction();
			guard2.chooseAction();
			if(player.atLibrary()){

				finished.setAttribute('class', 'modal-content clearfix');

				Local.addNoteIfAbsent("botanical", "Botanical Research Facility - Look up “Dominus Genii Majalis” asap", true, botanical);

				return;
			}
			if(!guard1.caught && !guard2.caught){
				window.requestAnimationFrame(gameLoop);
			} else {
				mazeCaught.volume = 0.7;
				mazeCaught.play();
			}
		}

		ssBtn.addEventListener('click', function(){
			gameLoop();
			modal.removeChild(popup);
		});

		rBtn.addEventListener('click', function(){
			guard1.caught = guard2.caught = false;
			player.position = {x:16.7,y:10.6};
			guard1.position = {x:24.6,y:5.8};
			guard2.position = {x:7.4,y:6.5};
			restart.setAttribute('class', 'modal-content clearfix hide');
			gameLoop();
		});

		fBtn.addEventListener('click', function(){

			window.location.href = "/txm2015/valhaven/chapters/ch_4";

		});

		centerCanvases();
	}

	// resize
	function centerCanvases(){
		_(canvases).each(function($canvas){
			$canvas.css({
				width: $window.width(),
            	height: $window.width() * 0.59375
			});
		});

	}
	$window.resize(_.throttle(centerCanvases,250));

});