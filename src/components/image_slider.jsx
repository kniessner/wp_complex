import React, {Component} from 'react';
import {render} from 'react-dom';
import Slider from 'react-slick';




class Image_Slider extends React.Component {


 	constructor(props){
      super(props);
      this.next = this.next.bind(this);
      this.previous = this.previous.bind(this);
       
      this.changeHandler = this.changeHandler.bind(this);
      this.slide_to = this.slide_to.bind(this);
    }
    changeHandler(e) {
	    this.refs.slider.slickGoTo(e.target.value)
	}
    previous() {
	    this.slider.slickPrev()
	}

    next() {
	    this.slider.slickNext()
	}
	
	slide_to(x) {
		console.log('slide to');
	    
	}
	
	componentDidMount(){
		
	}
	componentReceiveProps(){
		
	}
	componentDidMount(){
		if(this.props.got_to_slide){
			this.main_slider.slickGoTo(this.props.got_to_slide);
		   // this.refs.slider.slickGoTo(this.props.got_to_slide);
		}
	}

	render () {

	    var settings = {
	      className: 'slider slider_fokus',
	      dots: true,
	      infinite: true,
	      speed: 500,
	      slidesToShow: 1,
	      slidesToScroll: 1,
	      arrows:false,
	      lazyLoad:true,
	      initialSlide:this.props.got_to_slide,
	      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
	      adaptiveHeight:true,
	      asNavFor: '.nav_slider',
	    };

	   	var nav_settings = {
	   	  className: 'slider_thumbs',
	      infinite: true,
	      speed: 500,
	      slidesToShow: 3,
	      slidesToScroll: 1,
	      //arrows:true,
		  //fade: true,
	      variableWidth:true,
		  asNavFor: '.fokus_slider',
		  dots: true,
		  //centerMode: true,
		  //focusOnSelect: true,
		  initialSlide:this.props.got_to_slide,
	
	    };

	    var that = this;
        
        var childElementsBig = this.props.images.map(function(image, i){
        	console.log(image);
           return (
                <div style={{width: image.sizes.large_width+"px" }}  key={image.id}>

                    <img src={image.sizes.large} id={image.id} />
                    <div className="caption">
                    	{i}
                    </div>
                </div>
            );
        });

 
        var childElementsSmall = this.props.images.map(function(image, i){
        	console.log(image);
           return (
                <div style={{width: image.sizes.medium_width+"px" }} key={image.id}>

                    <img src={image.sizes.medium} id={image.id} />
                    <div className="caption">
                    	{i}
                    </div>
                </div>
            );
        });
		
	  	return (
	  		<div className="image_slider">
	  			
	  			<Slider className="fokus_slider" ref={c => this.main_slider = c } {...settings}>
			      {childElementsBig}
			    </Slider>

			    <Slider className="nav_slider" ref={c => this.slider = c } {...nav_settings}>
			      {childElementsSmall}
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