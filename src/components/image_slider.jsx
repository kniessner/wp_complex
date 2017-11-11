import React, {Component} from 'react';
import {render} from 'react-dom';
import Slider from 'react-slick';




class Image_Slider extends React.Component {
 	
 	constructor(props){
      super(props);
    }


	render () {

	    var settings = {
	      dots: true,
	      infinite: true,
	      speed: 500,
	      slidesToShow: 3,
	      slidesToScroll: 1,
	      initialSlide: this.props.initialImage 
	    };
	  	return (
	  		<div className="image_slider">
	  			<Slider {...settings}>
			        <div><h3>1</h3></div>
			        <div><h3>2</h3></div>
			        <div><h3>3</h3></div>
			        <div><h3>4</h3></div>
			        <div><h3>5</h3></div>
			        <div><h3>6</h3></div>
			     </Slider>
	  		</div>
	  	);

	}
}
export default Image_Slider;