import React, {Component} from 'react';
import {render} from 'react-dom';
import Masonry from 'react-masonry-component'; //https://github.com/eiriklv/react-masonry-component

const masonryOptions = {
    transitionDuration: 0
};
   
class Image_Grid extends React.Component {

  render () {
       
        var childElements = this.props.photos.map(function(image){
           return (
                <li className="image-element-class">
                    <img src={image.sizes.medium} />
                </li>
            );
        });

        return (
            <Masonry
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
