/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				
import * as THREE from 'three';
var OrbitControls = require('three-orbit-controls')(THREE);
		
jQuery(document).ready(function($) {


	var scene = new THREE.Scene();
	var camera = new THREE.PerspectiveCamera( 60, (window.innerWidth-15) / (window.innerHeight-15), 1, 1000 );
	var renderer = new THREE.WebGLRenderer( { alpha: true } );


	var raycaster;
			
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );
	camera.position.z = 520;
	camera.position.x = -0;


	/*=================================================
		MAIN ELEMENTS
	=================================================*/	


	var geometry = new THREE.TorusGeometry( 202, 199, 10, 150);
	var material = new THREE.MeshLambertMaterial( { color:  "rgba(250, 250, 250,1)" , morphTargets:true} );
	var RingCore = new THREE.Mesh( geometry, material );
	scene.add( RingCore )

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
					

				var geometry = new THREE.SphereGeometry( 152,152, 152 );
				var material = new THREE.MeshLambertMaterial( { color:  0xFDFDFDF, morphTargets:true, wireframe: true,combine:THREE.MultiplyBlending} );

			for ( var i = 0; i < 10; i ++ ) {
		  		   
						var balls = new THREE.Mesh( geometry, material );
						balls.position.x = ( Math.random() - 0.5 ) * 1200;
						balls.position.y = ( Math.random() - 0.5 ) * 1200;
						balls.position.z = ( Math.random() - 0.5 ) * 1200;
						balls.updateMatrix();
						balls.matrixAutoUpdate = false;
						scene.add( balls );
			}
	    

			//this.light = new THREE.PointLight();
	        //this.light.position.set(0, 0,0);
	        //this.scene.add(this.light);

	/*=================================================
		RENDER 
	=================================================*/

	var render = function () { 
			//console.log(balls.children);
			//balls.children = [];
			
			
	 		//RingCore.rotation.x += 0.0006; 
	 		RingCore.rotation.y += 0.0003;
	 		//RingCore.rotation.z += 0.0006;
		
	 		RingWire.rotation.y += 0.0003;
	 		RingWire.rotation.x += 0.0006;
	 		RingWire.rotation.z += 0.0006;
	 		camera.rotation.z -= 0.0002;
	 		//camera.rotation.y -= 0.0001;
	 		balls.rotation.z += 0.0002;
	 		//camera.rotation.x -= 0.0002;
	        requestAnimationFrame(render); 
	        renderer.render(scene, camera); 
	        
	        
	      
	}; 
	      
render();  
});

		