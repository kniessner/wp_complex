/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				
import * as THREE from 'three';
var OrbitControls = require('three-orbit-controls')(THREE);
		
jQuery(document).ready(function($) {


	var scene = new THREE.Scene();
	var height = window.innerHeight;
	var width = window.innerWidth;

	var camera = new THREE.PerspectiveCamera( 60, width / height, 1, 1500 );
	var renderer = new THREE.WebGLRenderer( { alpha: true } );
	var particles, geometry, materials = [], parameters, i, h, color, size;

			
	var mouseX = 0;
	var mouseY = 0;
	var windowHalfX = width / 2;
	var windowHalfY = height / 2;
	var raycaster;

	
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );


	//camera.position.z = 500;
	//camera.position.x = -0;

/*=================================================
		MAIN ELEMENTS
=================================================*/	
				// Set up the sphere vars
				const RADIUS = 50;
				const SEGMENTS = 16;
				const RINGS = 16;


				scene.fog = new THREE.FogExp2( 0x000000, 0.0007 );

				geometry = new THREE.Geometry();

				for ( i = 0; i < 20000; i ++ ) {

					var vertex = new THREE.Vector3();
					vertex.x = Math.random() * 2000 - 1000;
					vertex.y = Math.random() * 2000 - 1000;
					vertex.z = Math.random() * 2000 - 1000;

					geometry.vertices.push( vertex );

				}

				var parameters = [
					[ [1, 1, 0.5], 5 ],
					[ [0.95, 1, 0.5], 4 ],
					[ [0.90, 1, 0.5], 3 ],
					[ [0.85, 1, 0.5], 2 ],
					[ [0.80, 1, 0.5], 1 ]
				];

				for ( i = 0; i < parameters.length; i ++ ) {

					var color = parameters[i][0];
					var size  = parameters[i][1];

					materials[i] = new THREE.PointsMaterial( { size: size } );

					particles = new THREE.Points( geometry, materials[i] );

					particles.rotation.x = Math.random() * 6;
					particles.rotation.y = Math.random() * 6;
					particles.rotation.z = Math.random() * 6;

					scene.add( particles );

				}



/*=================================================
		LIGHTS
=================================================*/

// create a point light
const pointLight =
  new THREE.PointLight(0xFFFFFF);

// set its position
pointLight.position.x = 10;
pointLight.position.y = 50;
pointLight.position.z = 130;

// add to the scene
scene.add(pointLight);
			
/*=================================================
		RANDOM ELEMENTS
=================================================*/			
		

/*=================================================
		RENDER 
=================================================*/
// Draw!
animate();
	function animate() {

				requestAnimationFrame( animate );

				render();
				stats.update();

			}

	function onMouseMove(e) {

		mouseX = e.clientX - windowHalfX;
		mouseY = e.clientY - windowHalfY;
		render();
	}	

renderer.render(scene, camera);


			function render() {

				var time = Date.now() * 0.00005;

				camera.position.x += ( mouseX - camera.position.x ) * 0.05;
				camera.position.y += ( - mouseY - camera.position.y ) * 0.05;

				camera.lookAt( scene.position );

				for ( i = 0; i < scene.children.length; i ++ ) {

					var object = scene.children[ i ];

					if ( object instanceof THREE.Points ) {

						object.rotation.y = time * ( i < 4 ? i + 1 : - ( i + 1 ) );

					}

				}

				for ( i = 0; i < materials.length; i ++ ) {

					color = parameters[i][0];

					h = ( 360 * ( color[0] + time ) % 360 ) / 360;
					materials[i].color.setHSL( h, color[1], color[2] );

				}

				renderer.render( scene, camera );

			}


function update () {
  // Draw!
  renderer.render(scene, camera);

  // Schedule the next frame.
  requestAnimationFrame(update);
}

// Schedule the first frame.
requestAnimationFrame(update);


});

		