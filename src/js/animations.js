jQuery(document).ready(function($) {
  var w = window.innerWidth;

  $(window).scroll(function() {

    var scrollTop = $(window).scrollTop();
    var parallax_speed_x1 = scrollTop / 2 + 'px';

    var parallax_speed_x2 = scrollTop / 4 + 'px';
    var parallax_speed_x3 = scrollTop / 6 + 'px';

  });

});