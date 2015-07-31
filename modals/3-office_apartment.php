<?php require '../config.php'; ?>

<div id="sphere-container"></div>

<script>
	var camera, scene, renderer;
	var isUserInteracting = false, onMouseDownMouseX = 0, onMouseDownMouseY = 0, lon = 0, onMouseDownLon = 0, lat = 0, onMouseDownLat = 0, phi = 0, theta = 0;
    var mouse = new THREE.Vector2(), raycaster, INTERSECTED, hover = false, info;   
    var area = "door";
    var pos1 = [-0, -0.6, -0.3, 0.03];
    var pos2 = [-0, -1.7, -0.3, -1.8];
	init();

	function init() {
		var container, mesh;
		container = document.getElementById( 'sphere-container' );
		camera = new THREE.PerspectiveCamera( 65, window.innerWidth / window.innerHeight, 1, 1100 );
		camera.target = new THREE.Vector3( 0, 0, 0 );
		scene = new THREE.Scene();
        
		var geometry = new THREE.SphereGeometry( 500, 60, 40 );
		geometry.applyMatrix( new THREE.Matrix4().makeScale( -1, .6, 1 ) );
		var material = new THREE.MeshBasicMaterial( { map: THREE.ImageUtils.loadTexture( '../../images/apt.jpg' ) } );
		mesh = new THREE.Mesh( geometry, material );
		scene.add( mesh );
        
        //Add area of interest
        geometry = new THREE.SphereGeometry( 70, 40, 40 );
        material = new THREE.MeshBasicMaterial( { color: 0xff0000 } );

        mesh = new THREE.Mesh( geometry, material );
        mesh.name = area;
        mesh.visible=false;
        scene.add( mesh );

        var phi2 = Math.acos( pos1[0] );
        var theta2 = Math.sqrt( Math.PI ) * pos2[0];

        mesh.position.x = 530 * Math.cos( theta2 ) * Math.sin( phi2 );
        mesh.position.y = 530 * Math.sin( theta2 ) * Math.sin( phi2 );
        mesh.position.z = 530 * Math.cos( phi2 );             
        
		renderer = window.WebGLRenderingContext ?  new THREE.WebGLRenderer({ antialias: true }) : new THREE.CanvasRenderer();
		renderer.setSize( window.innerWidth, window.innerHeight );
		container.appendChild( renderer.domElement );
        
        raycaster = new THREE.Raycaster();

		document.addEventListener( 'mousedown', onDocumentMouseDown, false );
		document.addEventListener( 'mousemove', onDocumentMouseMove, false );
		document.addEventListener( 'mouseup', onDocumentMouseUp, false );
		window.addEventListener( 'resize', onWindowResize, false );
        animate();

	}

	function onWindowResize() {
		camera.aspect = window.innerWidth / window.innerHeight;
		camera.updateProjectionMatrix();

		renderer.setSize( window.innerWidth, window.innerHeight );
	}

	function onDocumentMouseDown( e ) {
		e.preventDefault();
		isUserInteracting = true;
		onPointerDownPointerX = event.clientX;
		onPointerDownLon = lon;
	}

	function onDocumentMouseMove( e ) {
		if ( isUserInteracting === true ) {
			lon = ( onPointerDownPointerX - e.clientX ) * 0.1 + onPointerDownLon;
			lat = 0;
		}
        mouse.x = ( e.clientX / window.innerWidth ) * 2 - 1;
		mouse.y = - ( e.clientY / window.innerHeight ) * 2 + 1;
	}

	function onDocumentMouseUp( e ) {
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

			if ( INTERSECTED != intersects[ 0 ].object ) {
				INTERSECTED = intersects[ 0 ].object;
                if (INTERSECTED.name == "ent"){
                    hover = true;
                    
                } else{
                    hover = false;

                }
			}
		} 
		renderer.render( scene, camera );
	}

	(function(){

		var mapContainer = document.getElementById('map-container');
		var video = document.getElementById("ch_video");
		var press = document.getElementById('press');
		var hospital = document.getElementById('hospital');
		var cdc = document.getElementById('cdc');
		var botanical = document.getElementById('botanical');
		var apartment = document.getElementById('apartment');
		var home = document.getElementById('home');

		botanical.setAttribute('class', 'inactive');
		home.setAttribute('class', 'inactive');

		video.addEventListener('ended', function(){

			if(localStorage.getItem( 'visited' )){
				var visited = JSON.parse( localStorage.getItem( 'visited' ) );
			} else {
				var visited = []; 
			}

			if(localStorage.getItem( 'notes' )){
				var storedNotes = JSON.parse( localStorage.getItem( 'notes' ) );
			} else {
				var storedNotes = []; 
			}
			
			var isAbsent = true;
			for(var i = 0; i < visited.length; i++){
				if(visited[i] === "apartment"){
					isAbsent = false;
				}
			}
			if(isAbsent){
				visited.push("apartment");
				localStorage.setItem( 'visited', JSON.stringify(visited) );
				storedNotes.push("Hiren of the Valley? It’s been extinct since I was a kid.");
				localStorage.setItem( 'notes', JSON.stringify(storedNotes) );
			}

			for(var v = 0; v < visited.length; v++){

				for(var i = 0; i < mapContainer.children.length - 1; i++){

					var iconId = mapContainer.children[i].getAttribute('id');

					if( visited[v] == iconId ){

						var thisIcon = document.getElementById(iconId);
						thisIcon.setAttribute('class', 'visited');

					}

				}

			}

			// Sliders.showMap();
			// Sliders.hideNotebook();

			if(visited.length === 3){
				apartment.setAttribute('class', '');
				apartment.addEventListener('click', function(){
					window.location = "/valhaven/chapters/ch_3/";
				});
			}

		});

	})();

</script>