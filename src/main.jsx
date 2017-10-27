

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
require('./js/slider')

require('./js/menu')
require('./js/orbit')
 import React from 'react';
 import ReactDOM from 'react-dom';

class App extends React.Component {
  render () {
    return <p> Hello React!</p>;
  }
}


 ReactDOM.render((
          <App>
		
          </App>
 ), document.getElementById('root'))