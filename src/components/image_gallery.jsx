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
  
     this.setState({slider:true});
     this.setState({grid:false});

     console.log("hello",data,'id'+id,'index '+i);
    }

  	componentDidMount() {

    }

    componentWillUnmount() {
    
    }

  render () {
    var initialImage = this.state.initialImage;
  	var images = this.props.images;
    var grid = this.state.grid;
    var slider = this.state.slider;
    console.log(initialImage,grid,slider);
	return (
         
  			<div className="image_gallery">
  			     <Image_Slider  images={images} switch={this.switchMode}  active={this.state.grid} initialImage={this.props.initialImage}/> 
	    		  { grid ? ( <Image_Grid    images={images} switch={this.switchMode}  active={this.state.grid}/>
            ) :  '' }

            { slider ?  <Image_Slider  images={images} switch={this.switchMode}  active={this.state.grid} initialImage={this.props.initialImage}/> :  '' }
         
  			</div>
  		);

  }
}
export default Image_Gallery;