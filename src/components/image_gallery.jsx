import React, {Component} from 'react';
import {render} from 'react-dom';
import Image_Grid from './image_grid.jsx';
import Image_Slider from './image_slider.jsx';

class Image_Gallery extends React.Component {
	
	constructor(props){
      super(props);
      this.state = {
      	count: 0,
      	got_to_slide:2,
      	grid: true,
      	slider:false
      };
      this.switchMode = this.switchMode.bind(this);
      this.onClick = this.onClick.bind(this);
    }
     onClick(){
        this.slickGoTo(x).slide_to('4'); // do stuff
      }
    switchMode(data,id,i){
     this.setState({got_to_slide:id});
      
    // this.setState({slider:true});
    // this.setState({grid:false});

     console.log("hello",data,'id'+id,'index '+i);
    }

  	componentDidMount() {
        //console.log(this.img_slider);
        //this.img_slider;
    }

    componentWillUnmount() {
    
    }

  render () {

    


    var got_to_slide = this.state.got_to_slide;
//this.child.got_to_slide('4');

  	var images = this.props.images;
    var grid = this.state.grid;
    var slider = this.state.slider;
    console.log('got_to_slide', got_to_slide,grid,slider);
	return (
         
  			<div className="image_gallery">
  			     <Image_Slider   images={images} switch={this.switchMode}  active={this.state.grid} got_to_slide={this.state.got_to_slide}/> 
	    		  { grid ? ( <Image_Grid images={images} switch={this.switchMode}  active={this.state.grid}/>
            ) :  '' }

            { slider ?  <Image_Slider  images={images} switch={this.switchMode}  active={this.state.grid} got_to_slide={this.props.got_to_slide}/> :  '' }
         
  			</div>
  		);

  }
}
export default Image_Gallery;