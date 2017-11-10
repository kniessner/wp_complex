import Masonry from 'masonry-layout'
jQuery(document).ready(function($) {


console.log('strJson',strJson);

const grid = document.querySelector('.masonry-grid')
const msnry = new Masonry(grid, {
  itemSelector: '.grid-item',
  columnWidth: 25,
  //gutter: 10,
  transitionDuration: 0,
  percentPosition: true,
  initLayout: false
})

msnry.once('layoutComplete', () => {
  grid.classList.add('load')
})

msnry.layout()

});