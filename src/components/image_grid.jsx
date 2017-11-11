import React, {Component} from 'react';
import {render} from 'react-dom';
import Masonry from 'react-masonry-component'; //https://github.com/eiriklv/react-masonry-component

var styles = {
  color:'red',
  backgroundColor:'black',
  fontWeight:'bold'
};


const masonryOptions = {
    transitionDuration: 0,
    itemSelector: '.grid-item',
    columnWidth: 25,
    gutter: 0,
    percentPosition: true,
};
   

class Image_Grid extends React.Component {
  
    constructor(props){
      super(props);
      this.state = {count: 0};
      this.handleClick = this.handleClick.bind(this)
    }
   
    handleClick = (ev) => {
        if (ev.keyCode === 13) {
            console.log('Enter!');
        }
    }
    


    handleLayoutComplete() { 
        console.log('layout complete');
   }

   componentDidMount() {
       this.masonry.on('layoutComplete', this.handleLayoutComplete);
   }

   componentWillUnmount() {
       this.masonry.off('layoutComplete', this.handleLayoutComplete);
   }

  render () {
        var that = this;
        var childElements = this.props.images.map(function(image, i){
           return (
                <div onClick={that.props.switch.bind(that,image.id,i)} className="grid-item" key={image.id}>
                    <img src={image.sizes.medium} id={image.id} />
                </div>
            );
        });

        return (
            <Masonry
                ref={function(c) {this.masonry = this.masonry || c.masonry;}.bind(this)}
                className={'grids'} // default ''
                options={masonryOptions} // default {}
                disableImagesLoaded={false} // default false
                updateOnEachImageLoad={false} // default false and works only if disableImagesLoaded is false
            >
                {childElements}
            </Masonry>
        );
    
  }
}


export default Image_Grid;
