webpackHotUpdate(0,{

/***/ 16:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_three__ = __webpack_require__(17);
/*=================================================
	Main Settings - Camera etc.
=================================================*/			
				

var OrbitControls = __webpack_require__(18)(__WEBPACK_IMPORTED_MODULE_0_three__);
		
jQuery(document).ready(function($) {


	var scene = new __WEBPACK_IMPORTED_MODULE_0_three__["Scene"]();
	var camera = new __WEBPACK_IMPORTED_MODULE_0_three__["PerspectiveCamera"]( 60, (window.innerWidth-15) / (window.innerHeight-15), 1, 1000 );
	var renderer = new __WEBPACK_IMPORTED_MODULE_0_three__["WebGLRenderer"]();
	var raycaster;
			
	renderer.setSize( window.innerWidth-15, (window.innerHeight) );
	document.getElementById('Orbit').appendChild( renderer.domElement );
	camera.position.z = 520;
	camera.position.x = -0;


	/*=================================================
		MAIN ELEMENTS
	=================================================*/	


	var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["TorusGeometry"]( 202, 15, 10, 150);
	var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  "rgba(4, 4, 4,1)" , morphTargets:true, wireframe: false} );
	var RingCore = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
	scene.add( RingCore )

	var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["TorusGeometry"]( 202,20, 10, 100);
	var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  "rgba(94, 236, 255,0.4)" , morphTargets:true, wireframe: true} );
	var RingWire = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
	scene.add( RingWire );
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
			light = new __WEBPACK_IMPORTED_MODULE_0_three__["DirectionalLight"]( 'tomato' );
			light.position.set( -200, -200, -200 );
			scene.add( light );
			light = new __WEBPACK_IMPORTED_MODULE_0_three__["AmbientLight"]( 0x222222 );
			scene.add( light );
					
	var hemisphereLight = new __WEBPACK_IMPORTED_MODULE_0_three__["HemisphereLight"](0xaaaaaa,0x000000, .9);
		    scene.add(hemisphereLight);
			
		
	/*=================================================
		RANDOM ELEMENTS
	=================================================*/			
					

	var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["SphereGeometry"]( 1, 32, 32 );
	var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshLambertMaterial"]( { color:  0xFDFDFDF, morphTargets:true, wireframe: false} );


	    	for ( var i = 0; i < 200; i ++ ) {
		  		   
						var cube = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
						cube.position.x = ( Math.random() - 0.5 ) * 1200;
						cube.position.y = ( Math.random() - 0.5 ) * 1200;
						cube.position.z = ( Math.random() - 0.5 ) * 1200;
						cube.updateMatrix();
						cube.matrixAutoUpdate = false;
						scene.add( cube );
			}

			this.light = new __WEBPACK_IMPORTED_MODULE_0_three__["PointLight"]();
	        this.light.position.set(0, 0,0);
	        this.scene.add(this.light);

	/*=================================================
		RENDER 
	=================================================*/

	var render = function () { 
		
			
			
			RingWire.rotation.x += 0.006;
	 		RingCore.rotation.x += 0.006; 		
	 		RingWire.rotation.y += 0.003;
	 		RingCore.rotation.y += 0.003;
	 		RingWire.rotation.z += 0.0006;
	 		RingCore.rotation.z += 0.0006;
	 		camera.rotation.z -= 0.0006;
	 		
	        requestAnimationFrame(render); 
	        renderer.render(scene, camera); 
	        
	        
	      
	}; 
	      
render();  
});

		
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ })

})