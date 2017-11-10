import Masonry from 'masonry-layout'
jQuery(document).ready(function($) {

console.log('Masonry',Masonry);


const grid = document.querySelector('.masonry-grid')
const msnry = new Masonry(grid, {
  itemSelector: '.grid-item',
  columnWidth: 33,
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