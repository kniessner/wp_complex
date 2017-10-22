console.log('script win.js loaded');

function setHeights() {
	winHeight = $(window).height();
	documentHeight = $(document).height();
	console.log('window Height',winHeight);
	console.log('document Height',documentHeight);
}



jQuery(document).ready(function($) {
	setHeights();
	$(window).on('resize',setHeights);
});