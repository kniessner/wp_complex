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
      	grid: true,
      	slider:false
      };
    }

    switchMode(data,id,i){
     this.setState({initialImage:i});
     
     this.setState({
     	slider:!this.state.slider,
     	grid:!this.state.grid 
     });

     console.log("hello",data,'id'+id,'index '+i);
    }

	componentDidMount() {

    }

    componentWillUnmount() {
    
    }

  render () {
  	var images = this.props.images;
    var grid = this.state.grid;
  		return (
         
  			<div className="image_gallery">
  			
	    		  { grid ? (
              <Image_Grid    images={images} switch={this.switchMode}  active={this.state.grid}/>
            ) :  '' }

            { slider ? (
              <Image_Slider  images={images} switch={this.switchMode}  active={this.state.grid} initialImage={this.props.initialImage}/>
            ) :  '' }
         
  			</div>
  		);

  }
}
export default Image_Gallery;