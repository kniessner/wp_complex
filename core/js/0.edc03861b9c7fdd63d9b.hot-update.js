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


});

		
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ })

})