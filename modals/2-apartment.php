<?php require '../config.php'; ?>

<div id="popup" class="modal-content clearfix">
	<div id="instructions-1" class="red-bg">
		<h1>Explore the Apartment</h1>
		<p>Something’s not right here. Click and drag to explore the apartment, clicking on objects to find out more about the secretive person who sent you the flower.</p>
		<button type="button" id="next-btn" class="btn">OKAY</button>
	</div>
</div>

<div id="sphere-container" ref="<?php echo MODAL_PATH; ?>2_1-room.php"></div>

<audio loop controls class="hide" id="apt-bg">
	<source src="<?php echo AUDIO_PATH; ?>apt.mp3" type="audio/mpeg">
	<source src="<?php echo AUDIO_PATH; ?>apt.wav" type="audio/wav">
	Your browser does not support the audio element.
</audio>

<script>

	(function(){

		var modal = document.getElementById('modal');
		var container = document.getElementById( 'sphere-container' );
		var ref = container.getAttribute('ref');

		var camera, scene, renderer, mesh, door;
		var isUserInteracting = false, onMouseDownMouseX = 0, onMouseDownMouseY = 0, lon = 110, onMouseDownLon = 0, lat = 0, onMouseDownLat = 0, phi = 0, theta = 0;
	    var mouse = new THREE.Vector2(), raycaster, INTERSECTED, hover = false, info;   
	    var onPointerDownLon, onPointerDownPointerX, onPointerDownPointerY, onPointerDownLat;
		var doorInt, vector;

		function init() {
			camera = new THREE.PerspectiveCamera( 65, window.innerWidth / window.innerHeight, 1, 1100 );
			camera.target = new THREE.Vector3( 0, 0, 0 );
			scene = new THREE.Scene();
	        
			var geometry = new THREE.SphereGeometry( 500, 60, 40 );
			geometry.applyMatrix( new THREE.Matrix4().makeScale( -1, 0.6, 1 ) );
			var material = new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( '../../images/apt.jpg' ) } );
			mesh = new THREE.Mesh( geometry, material );
			scene.add( mesh );

			 //Add area of interest
	        geometry = new THREE.BoxGeometry( 76, 1.5, 22 );
	        material = new THREE.MeshBasicMaterial( { color: 0xffffff } );
	        
	        door = new THREE.Mesh( geometry, material );
	        door.name = "door";
	        door.material.transparent = true;
	        door.material.opacity = 0;

	        door.position.x = 60;
	        door.position.y = 9.2;
	        door.position.z = 133;

	        door.rotation.x = 90 * (Math.PI / 180);
	        door.rotation.y = 93 * (Math.PI / 180);
	        door.rotation.z = -3 * (Math.PI / 180);

	        scene.add( door );

			renderer = window.WebGLRenderingContext ?  new THREE.WebGLRenderer({ antialias: true }) : new THREE.CanvasRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			container.appendChild( renderer.domElement );
	        
	        raycaster = new THREE.Raycaster();

			document.addEventListener( 'mousedown', handleMouseDown, false );
			document.addEventListener( 'mousemove', handleMouseMove, false );
			document.addEventListener( 'touchstart', handleTouchStart, false );
			document.addEventListener( 'touchmove', handleTouchMove, false );
			document.addEventListener( 'mouseup', onDocumentUp, false );
			window.addEventListener( 'resize', onWindowResize, false );
	        animate();

		}

		function onWindowResize() {
			camera.aspect = window.innerWidth / window.innerHeight;
			camera.updateProjectionMatrix();

			renderer.setSize( window.innerWidth, window.innerHeight );
		}

		function handleMouseDown(e){
			e.preventDefault();
			onPointerDownPointerX = e.clientX;
			onPointerDownLon = lon;
			vector = new THREE.Vector3( mouse.x, mouse.y, 1 ).unproject( camera );
			onDocumentDown();
		}

		function handleTouchStart(e){
			e.preventDefault();
			onPointerDownPointerX = e.touches[0].clientX;
			onPointerDownLon = lon;
			var vectorX = ( e.touches[0].clientX / window.innerWidth ) * 2 - 1;
			var vectorY = - ( e.touches[0].clientY / window.innerHeight ) * 2 + 1;
			vector = new THREE.Vector3(vectorX , vectorY, 1 ).unproject( camera );
			onDocumentDown();
		}

		function onDocumentDown() {

			isUserInteracting = true;

			container.style.cursor = "-webkit-grabbing"; 
            container.style.cursor = "-moz-grabbing";

            console.log(mouse);
			
			raycaster.set( camera.position, vector.sub( camera.position ).normalize() );
			var intersects = raycaster.intersectObjects( scene.children );

			if ( intersects.length > 1 ) {
				INTERSECTED = intersects[ 0 ].object;
                if (INTERSECTED.name == "door"){
                	window.location = "./?action=room";
                }
			} else {
				var op = 0;
				var goingUp = true;
				clearInterval(doorInt);
				doorInt = setInterval(function(){
					if(op < 1 && goingUp === true){
						op += 0.025;
					}
					if(op >= 0.5){
						goingUp = false;
					}
					if(op >= 0 && goingUp === false){
						op -= 0.025;
					}
					door.material.opacity = op;
				}, 20);
			}
		}

		function handleMouseMove(e){
			onDocumentMove( e.clientX, e.clientY );
		}

		function handleTouchMove(e){
			onDocumentMove( e.touches[0].clientX, e.touches[0].clientY );
		}

		function onDocumentMove( x, y ) {
			if ( isUserInteracting === true ) {
				lon = ( onPointerDownPointerX - x ) * 0.1 + onPointerDownLon;
				lat = 0;
				container.style.cursor = "-webkit-grabbing"; 
            	container.style.cursor = "-moz-grabbing";
			} else {
				container.style.cursor = "-webkit-grab"; 
                container.style.cursor = "-moz-grab";
			}
	        mouse.x = ( x / window.innerWidth ) * 2 - 1;
			mouse.y = - ( y / window.innerHeight ) * 2 + 1;
		}

		function onDocumentUp( e ) {
			isUserInteracting = false;
		}

		function animate() {
			requestAnimationFrame( animate );
			update();
		}

		function update() {
			if (  hover == true || isUserInteracting == true ) {
				lon = lon;
			}else{
	            lon += 0.05;
	        }

			lat = Math.max( - 85, Math.min( 85, lat ) );
			phi = THREE.Math.degToRad( 90 - lat );
			theta = THREE.Math.degToRad( lon );

			camera.target.x = 500 * Math.sin( phi ) * Math.cos( theta );
			camera.target.y = 500 * Math.cos( phi );
			camera.target.z = 500 * Math.sin( phi ) * Math.sin( theta );

			camera.lookAt( camera.target );

	        var vector = new THREE.Vector3( mouse.x, mouse.y, 1 ).unproject( camera );
			raycaster.set( camera.position, vector.sub( camera.position ).normalize() );
			var intersects = raycaster.intersectObjects( scene.children );

			if ( intersects.length > 0 ) {

				INTERSECTED = intersects[ 0 ].object;
                if (INTERSECTED.name == "door"){
                    hover = true;
                    container.style.cursor = "pointer";
					door.material.opacity = 0.5;
                } else{
                    hover = false;
                }
			}
			renderer.render( scene, camera );
		}

		// -------------------- //
	 	// ---- Set Events ---- //
	 	// -------------------- //

	 	var modal = document.getElementById("modal");
		var video = document.getElementById("ch_video");
		var popup = document.getElementById("popup");
		var close = document.getElementById('next-btn');
		var aptBg = document.getElementById('apt-bg');

		Local.setInactive( [botanical, office, home] );

		video.addEventListener('ended', function(){
			init();
			aptBg.volume = 0.4;
			aptBg.play();
		});

		close.addEventListener('click', function(){
			modal.removeChild(popup);
		});
		close.addEventListener('touchend', function(){
			modal.removeChild(popup);
		});

	})();

</script>