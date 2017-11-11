import React, {Component} from 'react';
import {render} from 'react-dom';

import Image_Grid from './components/image_grid.jsx';

export const app_loader = (data)=>{
   
class App extends React.Component {
  render () {

  	var photos = data.acf.featured_images;
    return (
    	<div id="react_port">
	    	<Image_Grid photos={photos}/>
    	</div>
    	);
  }
}


render(<App/>, document.getElementById('app'));
}