import Masonry from 'masonry-layout'
jQuery(document).ready(function($) {



const grid = document.querySelector('#main_images')
const msnry = new Masonry(grid, {
  itemSelector: '.grid-item',
  columnWidth: 25,
  gutter: 0,
  transitionDuration: 1,
  percentPosition: true,
  initLayout: true
})

msnry.once('layoutComplete', () => {
  grid.classList.add('load')
})

msnry.layout()

});