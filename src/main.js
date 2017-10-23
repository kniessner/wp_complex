

import 'bootstrap/scss/bootstrap.scss';
import 'bootstrap';
//require('font-awesome');

import 'three';
import * as THREE from 'three';

//require('bootstrap-loader');

//require('bootstrap')
//Require Slick
require('script-loader!../node_modules/slick-carousel/slick/slick')

require('./scss/style.scss')
require('./js/win')
require('./js/menu')
require('./js/orbit')

$(document).ready(function(){
  $('.slider').slick({
     slidesToShow: 3,
	  slidesToScroll: 1,
	  asNavFor: '.slider-for',
	  dots: true,
	  centerMode: true,
	  focusOnSelect: true
  });
});