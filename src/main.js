

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

  });
});