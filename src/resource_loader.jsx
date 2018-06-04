
/*
//////////////	BOOTSTRAP
*/

import 'bootstrap/scss/bootstrap.scss';
import 'bootstrap';
//require('font-awesome');

/*
//////////////	jQuery - needed to import ?
*/
import $ from 'jquery';
window.$ = $
window.jQuery = jQuery

import 'foundation-sites'
$(document).foundation()
import 'foundation-sites/scss/foundation.scss';

import 'masonry-layout'

/*
//////////////	THREE JS
*/
import 'three';
import * as THREE from 'three';

/*
//////////////		SLICK CAROUSEl
*/


import 'slick-carousel';
import 'slick-carousel/slick/slick.scss';
//import "slick-carousel/slick/slick-theme.scss";

import 'script-loader!../node_modules/slick-carousel/slick/slick'


/*
************* 	Init own style / #SCSS   *************
*/
import './scss/style.scss'

/*
*************  Init own actions / #JS  *************
*/


import './js/grid'
import './js/slider'

import './js/menu'
import './js/orbit'
import './js/point_mesh'

//import './js/threeStart'

//import './js/threeJS/pointCloud'
//import './js/threeJS/particle'

