webpackHotUpdate(0,{

/***/ 21:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_three__ = __webpack_require__(3);
/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				

var OrbitControls = __webpack_require__(22)(__WEBPACK_IMPORTED_MODULE_0_three__);
		
jQuery(document).ready(function($) {


	var scene = new __WEBPACK_IMPORTED_MODULE_0_three__["Scene"]();
	var camera = new __WEBPACK_IMPORTED_MODULE_0_three__["PerspectiveCamera"]( 60, (window.innerWidth-15) / (window.innerHeight-15), 1, 1000 );
	var renderer = new __WEBPACK_IMPORTED_MODULE_0_three__["WebGLRenderer"]( { alpha: true } );


	var raycaster;
			
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );
	camera.position.z = 520;
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
					

				var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["SphereGeometry"]( 152,152, 152 );
				var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  0xFDFDFDF, morphTargets:true, wireframe: true,combine:__WEBPACK_IMPORTED_MODULE_0_three__["MultiplyBlending"]} );
			var balls = []; 
			for ( var i = 0; i < 30; i ++ ) {
		  		   
						var ball = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
						ball.position.x = ( Math.random() - 0.5 ) * 1200;
						ball.position.y = ( Math.random() - 0.5 ) * 1200;
						ball.position.z = ( Math.random() - 0.5 ) * 1200;
						ball.updateMatrix();
						ball.matrixAutoUpdate = false;
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
	 		//camera.rotation.x -= 0.0002;
	        requestAnimationFrame(render); 
	        renderer.render(scene, camera); 
	        


	        for ( var i = 0; i < balls.length; i ++ ) {
		  		   console.log(balls[i]);
		  		   var rand_speed = Math.floor(Math.random() * 0.0009) + 0.0001  ;

		  		   balls[i]
					
			}
	        	}; 
	      
render();  
});

		
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ })

})