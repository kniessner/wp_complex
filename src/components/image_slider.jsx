import React, {Component} from 'react';
import {render} from 'react-dom';
import Slider from 'react-slick';




class Image_Slider extends React.Component {


 	constructor(props){
      super(props);
      this.next = this.next.bind(this);
      this.previous = this.previous.bind(this);
    }
    previous() {
	    this.slider.slickPrev()
	}

    next() {
	    this.slider.slickNext()
	}
	 slide_to() {
	    this.slider.slickGoTo()
	}
	render () {

	    var settings = {
	      className: 'slider_fokus',
	      dots: true,
	      infinite: true,
	      speed: 500,
	      slidesToShow: 1,
	      slidesToScroll: 1,
	      arrows:false,
		  fade: true,
	      variableWidth:true,
	      //lazyLoad:true,
	      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	      adaptiveHeight:true,
	      initialSlide: this.props.initialImage 
	    };

	   	var nav_settings = {
	   	  className: 'slider_thumbs',
	      dots: true,
	      infinite: true,
	      speed: 500,
	      slidesToShow: 1,
	      slidesToScroll: 1,
	      arrows:false,
		  fade: true,
	      variableWidth:true,
	      //lazyLoad:true,
	      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	      adaptiveHeight:true,
	      initialSlide: this.props.initialImage 
	    };

	    var that = this;
        var childElements = this.props.images.map(function(image, i){
           return (
                <div key={image.id}>

                    <img src={image.sizes.large} id={image.id} />
                    <div className="caption">
                    	{i}
                    </div>
                </div>
            );
        });

	  	return (
	  		<div className="image_slider">
	  			
	  			<Slider ref={c => this.slider = c } {...settings}>
			      {childElements}
			    </Slider>

			    <Slider ref={c => this.slider = c } {...nav_settings}>
			      {childElements}
			    </Slider>
			     <div style={{position: 'relative'}}>
		          <button className='button' onClick={this.previous}>Previous</button>
		          <button className='button' onClick={this.next}>Next</button>
		        </div>
	  		</div>
	  	);

	}
}
export default Image_Slider;