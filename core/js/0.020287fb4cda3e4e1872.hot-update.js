webpackHotUpdate(0,{

/***/ 19:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function(jQuery) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0_three__ = __webpack_require__(17);

	jQuery(document).ready(function($) {

		var OrbitControls = __webpack_require__(18)(__WEBPACK_IMPORTED_MODULE_0_three__)
		var scene = new __WEBPACK_IMPORTED_MODULE_0_three__["Scene"]();
		var camera = new __WEBPACK_IMPORTED_MODULE_0_three__["PerspectiveCamera"]( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
		var renderer = new __WEBPACK_IMPORTED_MODULE_0_three__["WebGLRenderer"]();

		renderer.setSize( window.innerWidth, window.innerHeight );
		document.getElementById('Orbit').appendChild( renderer.domElement );

			
		var geometry = new __WEBPACK_IMPORTED_MODULE_0_three__["BoxGeometry"]( 1, 1, 1 );
		var material = new __WEBPACK_IMPORTED_MODULE_0_three__["MeshBasicMaterial"]( { color: 0x00ff00 } );
		var cube = new __WEBPACK_IMPORTED_MODULE_0_three__["Mesh"]( geometry, material );
		scene.add( cube );


			camera.position.z = 5;
			var animate = function () {
				requestAnimationFrame( animate );
				cube.rotation.x += 0.1;
				cube.rotation.y += 0.1;
				renderer.render(scene, camera);
			};
	});
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ })

})