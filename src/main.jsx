

//const wordpressDebug = require('wordpress-debug').default;
 
//wordpressDebug('../../../wp-config.php'); // Enable debug 
//wordpressDebug('path/to/wp-config.php', true); // Enable debug 
//wordpressDebug('path/to/wp-config.php', false); // Disable debug 

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
import 'script-loader!../node_modules/slick-carousel/slick/slick'


/*
************* 	Init own style / #SCSS   *************
*/
import './scss/style.scss'

/*
*************  Init own actions / #JS  *************
*/


import './js/win'
import './js/slider'
import './js/grid'

import './js/menu'
import './js/orbit'
import './js/point_mesh'

//import './js/threeStart'

//import './js/threeJS/pointCloud'
//import './js/threeJS/particle'



/*
*************  Init React Modules / #jsx  *************
*/

import React from 'react';
import ReactDOM from 'react-dom';
/*
class App extends React.Component {
  render () {
    return <p> Hello React!</p>;
  }
}


 ReactDOM.render((
          <App>
		
          </App>
 ), document.getElementById('app'))
 */