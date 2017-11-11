import React, {Component} from 'react';
import {render} from 'react-dom';

import Image_Gallery from './components/image_gallery.jsx';

export const app_loader = (data)=>{
   
class App extends React.Component {
  render () {

  	var images = data.acf.featured_images;
    return (

    	<div id="react_port">
	    	{ images ? <Image_Gallery images={images} /> : ' ' }	
    	</div>

    	);
  }
}


render(<App/>, document.getElementById('app'));
}