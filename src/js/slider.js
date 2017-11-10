
$(document).ready(function(){
  $('.slider').slick({
		  slidesToShow: 1,
		  autoplay:true,
		  arrows:false,
		  fade: true,
  		  cssEase: 'linear'
		 
  });

  	
  $('#main_images').find( "img" ).on('click', function(e){
	    e.preventDefault();
	        $('.mansory_slider').slick({
				  slidesToShow: 5,
				  autoplay:true,
				  arrows:false,
				  fade: true,
		  		  cssEase: 'linear'
				 
		  });
	});

});