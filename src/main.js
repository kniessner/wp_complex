

import 'bootstrap/scss/bootstrap.scss';
import 'bootstrap';
//require('font-awesome');
import $ from 'jquery';
import 'three';
import 'slick-carousel';
import 'slick-carousel/slick/slick.scss';
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
  		  centerMode: true,
		  centerPadding: '60px',
		  slidesToShow: 3,
		  autoplay:true,
		  arrows:false,
		  responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 3
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        arrows: false,
		        centerMode: true,
		        centerPadding: '40px',
		        slidesToShow: 1
		      }
		    }
		  ]
  });
});