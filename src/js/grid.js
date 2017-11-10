import Masonry from 'masonry-layout'

const grid = document.querySelector('.masonry-grid')
const msnry = new Masonry(grid, {
  itemSelector: '.grid-item',
  columnWidth: 280,
  gutter: 20,
  transitionDuration: 0,
  initLayout: false
})

msnry.once('layoutComplete', () => {
  grid.classList.add('load')
})

msnry.layout()