/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				
import * as THREE from 'three';
var OrbitControls = require('three-orbit-controls')(THREE);
		
jQuery(document).ready(function($) {


	var scene = new THREE.Scene();
	var camera = new THREE.PerspectiveCamera( 60, (window.innerWidth-15) / (window.innerHeight-15), 1, 1000 );
	
	//check for browser Support
		if (webGLSupport()) {
			//yeah?  Right on...
			var renderer = new THREE.WebGLRenderer( { alpha: true } );


		} else {
			//No?  Well that's okay.
			var renderer = new THREE.CanvasRenderer();
		}


		var mouseX = 0;
		var mouseY = 0;
	var raycaster;
	
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );
	camera.position.z = 20;
	camera.position.x = -0;


	/*=================================================
		MAIN ELEMENTS
	=================================================*/	


	var geometry = new THREE.TorusGeometry( 102, 100, 10, 50);
	var material = new THREE.MeshLambertMaterial( { color:  "rgba(250, 250, 250,1)" , morphTargets:true} );
	var RingCore = new THREE.Mesh( geometry, material );
	//scene.add( RingCore )

	var geometry = new THREE.TorusGeometry( 202,200, 10, 100);
	var material = new THREE.MeshLambertMaterial( { color:  "rgba(94, 236, 255,0.4)" , morphTargets:true, wireframe: true,  combine:THREE.MultiplyBlending} );
	var RingWire = new THREE.Mesh( geometry, material );
	//scene.add( RingWire );

	RingCore.position.z = 150;
	RingWire.position.z = 150;
	RingCore.position.y = 150;
	RingWire.position.y = 150;
	RingCore.position.x = -150;
	RingWire.position.x = -150;

/*=================================================
		LIGHTS
=================================================*/

scene.add( new THREE.AmbientLight( 0x222222 ) );
	                      
	var light = new THREE.DirectionalLight( 0x222222 );
			light.position.set( 1, 1, 1 );
			scene.add( light );
			light = new THREE.DirectionalLight( 'RGBA(0, 206, 255, 1.00)' );
			light.position.set( -200, -200, -200 );
			scene.add( light );
			light = new THREE.AmbientLight( 0x222222 );
			scene.add( light );
					
	var hemisphereLight = new THREE.HemisphereLight('RGBA(0, 206, 255, 1.00)',0x000000, .9);
		    scene.add(hemisphereLight);
			
/*=================================================
		RANDOM ELEMENTS
=================================================*/			
					

			var geometry = new THREE.SphereGeometry( 152,15, 52 ); // radius - segments -rings
			var material = new THREE.MeshLambertMaterial( { color:  0xFDFDFDF, morphTargets:true ,wireframe: true,combine:THREE.MultiplyBlending} );

			var geometryCore = new THREE.SphereGeometry( 115,15, 15 ); // radius - segments -rings
			var materialCore = new THREE.MeshLambertMaterial( { color:  0xFDFDFDF, morphTargets:true ,wireframe: false,combine:THREE.MultiplyBlending} );
			
			var balls = []; 
			var ballscore = []; 
			for ( var i = 0; i <  15; i ++ ) {
		  		   
						var ball = new THREE.Mesh( geometry, material );
						var ballcore = new THREE.Mesh( geometryCore, materialCore );
						var pos_x =  ( Math.random() - 0.5 ) * 1200;
						var pos_z =  ( Math.random() - 0.5 ) * 1200;
						var pos_y =  ( Math.random() - 0.5 ) * 1200;

						ball.position.x = pos_x;
						ball.position.y = pos_y;
						ball.position.z = pos_z;

						ballcore.position.x = pos_x;
						ballcore.position.y = pos_y;
						ballcore.position.z = pos_z;

						ball.updateMatrix();
						ball.matrixAutoUpdate = true;
						scene.add( ballcore );
						scene.add( ball );
						balls.push(ball);
			}
	    	
	    	//console.log(balls.childen.length);

			//this.light = new THREE.PointLight();
	        //this.light.position.set(0, 0,0);
	        //this.scene.add(this.light);

	/*=================================================
		RENDER 
	=================================================*/
		window.addEventListener( 'resize', onWindowResize, false );
		document.addEventListener( 'mousemove', onMouseMove, false );

	function onWindowResize() {

		// Everything should resize nicely if it needs to!
	  	var WIDTH = window.innerWidth,
	  		HEIGHT = window.innerHeight;

	  	camera.aspect = aspectRatio;
	  	camera.updateProjectionMatrix();
	  	renderer.setSize(WIDTH, HEIGHT);
	}

	function onMouseMove(e) {

		mouseX = e.clientX - windowHalfX;
		mouseY = e.clientY - windowHalfY;
	}	

	var render = function () { 
			//console.log(balls.children);
			//balls.children = [];
			
			
	 		//RingCore.rotation.x += 0.0006; 
	 		RingCore.rotation.y += 0.0003;
	 		//RingCore.rotation.z += 0.0006;
			
	 		RingWire.rotation.y += 0.0003;
	 		RingWire.rotation.x += 0.0006;
	 		RingWire.rotation.z += 0.0006;
	 		camera.position.x += ( mouseX - camera.position.x ) * 0.005;
			camera.position.y += ( - mouseY - camera.position.y ) * 0.005;
			camera.lookAt( scene.position );

	 		//camera.rotation.y -= 0.0001;
	 		//camera.rotation.x -= 0.0002;

	        for ( var i = 0; i < balls.length; i ++ ) {
		  		   var rand_speed_y = Math.floor(Math.random() * 0.019) + 0.0001  ;		  		   			  		   
		  		   var rand_speed_x = Math.floor(Math.random() * 0.0119) + 0.0001  ;
		  		   var rand_speed_z = Math.floor(Math.random() * 0.0119) + 0.0001  ;
		  		   	balls[i].position.y += rand_speed_y;
		  		   	balls[i].rotation.y += rand_speed_y;
			 		balls[i].rotation.x -= rand_speed_x;
			 		balls[i].rotation.z += rand_speed_z;
		  		  
					
			}
	        requestAnimationFrame(render); 
	        renderer.render(scene, camera); 
	        


	        	}; 
	      
render();  
});

		