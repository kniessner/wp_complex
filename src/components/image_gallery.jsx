import React, {Component} from 'react';
import {render} from 'react-dom';
import Image_Grid from './image_grid.jsx';
import Image_Slider from './image_slider.jsx';

class Image_Gallery extends React.Component {

  constructor(props) {
    super(props);
    this.state = {
      count: 0,
      got_to_slide: 2,
      grid: true,
      slider: false
    };
    this.switchMode = this.switchMode.bind(this);
    this.onClick = this.onClick.bind(this);
  }
  onClick() {
    //this.slickGoTo(x).slide_to('4');  do stuff
  }

  switchMode(data, id, i) {
    this.setState({got_to_slide: id});

    var fokus_slider = $('.fokus_slider');
    fokus_slider.slick();

    //slideIndex = $(this).index();
    fokus_slider.slick('slickGoTo', 4);
    //this.setState({slider:true});
    //this.setState({grid:false});

    console.log("hello", data, 'id' + id, 'index ' + i);
  }

  componentDidMount() {
    //console.log(this.img_slider);
    //this.img_slider;
  }

  componentWillUnmount() {}

  render() {

    //
    // TODO: dfdfdf
    //https://huddle.github.io/Resemble.js/
    //http://colorify.rocks/index.html#installation
    //http://lokeshdhakar.com/projects/color-thief/
    //http://camanjs.com/examples/
    //https://mgechev.github.io/jscapture/
    //https://github.com/oliver-moran/jimp
    //http://camanjs.com/examples/
    //https://github.com/evanw/glfx.js
    //https://blog.webkid.io/image-processing-in-javascript/

    var to_slide = this.state.got_to_slide;
    var images = this.props.images;
    var grid = this.state.grid;
    var slider = this.state.slider;

    return (<div className="image_gallery">
      {// <Image_Slider   images={images} switch={this.switchMode}  active={this.state.grid} got_to_slide={to_slide}/>}
      <Image_Grid images={images} switch={this.switchMode} active={this.state.grid}/>

    </div>);

  }
}
export default Image_Gallery;
