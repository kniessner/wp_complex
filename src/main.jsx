
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

import './js/menu'
//import './js/orbit'

import './js/threeStart'
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