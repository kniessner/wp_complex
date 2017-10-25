webpackHotUpdate(0,{

/***/ 21:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_three__ = __webpack_require__(4);
/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				

var OrbitControls = __webpack_require__(22)(__WEBPACK_IMPORTED_MODULE_0_three__);
		
jQuery(document).ready(function($) {


	var scene = new __WEBPACK_IMPORTED_MODULE_0_three__["Scene"]();
	var height = window.innerHeight;
	var width = window.innerWidth;
	var camera = new __WEBPACK_IMPORTED_MODULE_0_three__["PerspectiveCamera"]( 60, width / height, 1, 1000 );
	var renderer = new __WEBPACK_IMPORTED_MODULE_0_three__["WebGLRenderer"]( { alpha: true } );

	var mouseX = 0;
	var mouseY = 0;
	var windowHalfX = width / 2;
	var windowHalfY = height / 2;
	var raycaster;

	
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );
	camera.position.z = 500;
	camera.position.x = -0;

	
	/*=================================================
		MAIN ELEMENTS
	=================================================*/	


	var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["TorusGeometry"]( 102, 100, 10, 50);
	var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  "rgba(250, 250, 250,1)" , morphTargets:true} );
	var RingCore = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
	//scene.add( RingCore )

	var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["TorusGeometry"]( 202,200, 10, 100);
	var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  "rgba(94, 236, 255,0.4)" , morphTargets:true, wireframe: true,  combine:__WEBPACK_IMPORTED_MODULE_0_three__["MultiplyBlending"]} );
	var RingWire = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
	//scene.add( RingWire );

	RingCore.position.z = 150;
	RingWire.position.z = 150;
	RingCore.position.y = 150;
	RingWire.position.y = 150;
	RingCore.position.x = -150;
	RingWire.position.x = -150;


	// First let's define a Sea object :
var Sea = function(){
	
		var geom = new __WEBPACK_IMPORTED_MODULE_0_three__["SphereGeometry"]( 200, 16, 12 );
		
		//geom.applyMatrix(new THREE.Matrix4().makeRotationX(-Math.PI/2));

		// important: by merging vertices we ensure the continuity of the waves
		geom.mergeVertices();

		// get the vertices
		var l = geom.vertices.length;

		// create an array to store new data associated to each vertex
		this.waves = [];

		for (var i=0; i<l; i++){
			// get each vertex
			var v = geom.vertices[i];

			// store some data associated to it
			this.waves.push({y:v.y,
				x:v.x,
				z:v.z,
				 // a random angle
				ang:Math.random()*Math.PI*2,
				// a random distance
				amp:5 + Math.random()*5,
				 // a random speed between 0.016 and 0.048 radians / frame
				speed:0.016 + Math.random()*0.005
			});
		};

		var mat = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshPhongMaterial"]({
			color:' RGBA(84, 84, 84, 1.00)',
			transparent:false,
			shading:__WEBPACK_IMPORTED_MODULE_0_three__["FlatShading"],
		});

		this.mesh = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"](geom, mat);
		this.mesh.receiveShadow = true;

	}

Sea.prototype.moveWaves = function (){
	
	var verts = this.mesh.geometry.vertices;
	var l = verts.length;
	
	for (var i=0; i<l; i++){
		var v = verts[i];
		
		var vprops = this.waves[i];
		
		v.x = vprops.x + Math.cos(vprops.ang)*vprops.amp;
		v.y = vprops.y + Math.sin(vprops.ang)*vprops.amp;

		vprops.ang += vprops.speed;

	}

	this.mesh.geometry.verticesNeedUpdate=true;

	bubbule.mesh.rotation.y += .002;
}
var bubbule;
function createBubbule(){
	bubbule = new Sea();
	
	// add the mesh of the sea to the scene
	scene.add(bubbule.mesh);
}
createBubbule();

/*=================================================
		LIGHTS
=================================================*/

scene.add( new __WEBPACK_IMPORTED_MODULE_0_three__["AmbientLight"]( 0x222222 ) );
	                      
	var light = new __WEBPACK_IMPORTED_MODULE_0_three__["DirectionalLight"]( 0x222222 );
			light.position.set( 1, 1, 1 );
			scene.add( light );
			light = new __WEBPACK_IMPORTED_MODULE_0_three__["DirectionalLight"]( 'RGBA(0, 206, 255, 1.00)' );
			light.position.set( -200, -200, -200 );
			scene.add( light );
			light = new __WEBPACK_IMPORTED_MODULE_0_three__["AmbientLight"]( 0x222222 );
			scene.add( light );
					
	var hemisphereLight = new __WEBPACK_IMPORTED_MODULE_0_three__["HemisphereLight"]('RGBA(0, 206, 255, 1.00)',0x000000, .9);
		    scene.add(hemisphereLight);
			
/*=================================================
		RANDOM ELEMENTS
=================================================*/			
					

			var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["SphereGeometry"]( 152,15, 15 ); // radius - segments -rings
			var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  0xFDFDFDF, morphTargets:true ,wireframe: true,combine:__WEBPACK_IMPORTED_MODULE_0_three__["MultiplyBlending"]} );

				
			var geometryCore = new __WEBPACK_IMPORTED_MODULE_0_three__["SphereGeometry"]( 115,15, 15 ); // radius - segments -rings
			var materialCore = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshPhongMaterial"]( { color:  0xFDFDFDF, shading:__WEBPACK_IMPORTED_MODULE_0_three__["FlatShading"], morphTargets:true ,wireframe: false,combine:__WEBPACK_IMPORTED_MODULE_0_three__["MultiplyBlending"]} );
			geometryCore.mergeVertices();
					var l = geometryCore.vertices.length;
					var waves = [];

					for (var i=0; i<l; i++){
						// get each vertex
						var v = geometryCore.vertices[i];
						waves.push({y:v.y,
							x:v.x,
							z:v.z,
							ang:Math.random()*Math.PI*2,
							amp:5 + Math.random()*5,
							speed:0.016 + Math.random()*0.005
						});
					};




			var balls = []; 
			var ballscore = []; 
			for ( var i = 0; i <  15; i ++ ) {
		  		   		

						

						var ball = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
						var ballcore = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometryCore, materialCore );
						ballcore.receiveShadow = true;
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
						ballscore.push(ballcore);
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
	 			 
	var t = 20;
	var render = function () { 
			//console.log(balls.children);
			//balls.children = [];
			//RingCore.rotation.x += 0.0006; 
	 		RingCore.rotation.y += 0.0003;
	 		//RingCore.rotation.z += 0.0006;
			
	 		RingWire.rotation.y += 0.0003;
	 		RingWire.rotation.x += 0.0006;
	 		RingWire.rotation.z += 0.0006;
	 		camera.position.x += ( mouseX - camera.position.x ) * 0.0005;
			camera.position.y += ( - mouseY - camera.position.y ) * 0.0005;
			

	 		camera.position.y += 0.001;
	 		camera.position.x += 0.0002;


	 		
	 		  balls[3].position.x = Math.cos(5*t) * 150;
			  balls[3].position.y = Math.cos(5*t) * 150;
			  balls[3].position.z = Math.sin(5*t) * 150;


	        for ( var i = 0; i < balls.length; i ++ ) {
		  		   var rand_speed_y = Math.floor(Math.random() * 0.019) + 0.0001  ;		  		   			  		   
		  		   var rand_speed_x = Math.floor(Math.random() * 0.0149) + 0.001  ;
		  		   var rand_speed_z = Math.floor(Math.random() * 0.0119) + 0.0001  ;
		  		   	//balls[i].position.y += rand_speed_y;
		  		   	balls[i].rotation.y += rand_speed_y;
			 		balls[i].rotation.x -= rand_speed_x;
			 		balls[i].rotation.z += rand_speed_z;
		  		  
					
			}


	        for ( var i = 0; i < ballscore.length; i ++ ) {
		  		   var rand_speed_y = Math.floor(Math.random() * 0.019) + 0.0001  ;		  		   			  		   
		  		   var rand_speed_x = Math.floor(Math.random() * 0.0149) + 0.001  ;
		  		   var rand_speed_z = Math.floor(Math.random() * 0.0119) + 0.0001  ;
		  		   	//balls[i].position.y += rand_speed_y;
		  		   	ballscore[i].rotation.y += rand_speed_y;
			 		ballscore[i].rotation.x -= rand_speed_x;
			 		ballscore[i].rotation.z += rand_speed_z;
		  		  
					
			}
			bubbule.moveWaves();
			camera.lookAt( scene.position );
	        requestAnimationFrame(render); 
	        renderer.render(scene, camera); 
	        


	        	}; 
	      
render();  
});

		
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ })

})