import React, {Component} from 'react';
import {render} from 'react-dom';
import Image_Grid from './image_grid.jsx';
import Image_Slider from './image_slider.jsx';
class Image_Gallery extends React.Component {
	
	constructor(props){
      super(props);
      this.state = {
      	count: 0,
      	initialImage:1,
      	grid: 1,
      	slider:0
      };
    }

    switchMode(data){
     console.log("hello",data);
    }

	componentDidMount() {

    }

    componentWillUnmount() {
    
    }

  render () {
  	var images = this.props.images;
  		return (
  			<div className="image_gallery">
  				<Image_Grid 	images={images} switch={this.switchMode} state={this.state.grid}/>
	    		<Image_Slider 	images={images} initialImage={this.state.initialImage} switch={this.switchMode} state={this.state.slider}/>
  			</div>
  		);

  }
}
export default Image_Gallery;