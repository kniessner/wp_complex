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
	    var that = this;
        var childElements = this.props.images.map(function(image, i){
           return (
                <div key={image.id}>

                    <img src={image.sizes.full} id={image.id} />
                    <div className="caption">
                    	{i}
                    </div>
                </div>
            );
        });

	  	return (
	  		<div className="image_slider">
	  			<Slider {...settings}>
			      {childElements}
			     </Slider>
	  		</div>
	  	);

	}
}
export default Image_Slider;