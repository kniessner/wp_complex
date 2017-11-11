
$(document).ready(function(){
  $('.slider').slick({
		  slidesToShow: 1,
		  autoplay:true,
		  arrows:false,
		  fade: true,
  		  cssEase: 'linear'
		 
  });

  	     $('.mansory_slider').slick({
				  slidesToShow: 5,
				  autoplay:true,
				  arrows:true,
				  fade: true,
		  		  cssEase: 'linear'
				 
		  });
  $('#main_images').find( "img" ).on('click', function(e){
  	
  			$('#main_images').toggleClass('masonry-grid');
  			$('#main_images').toggleClass('mansory_slider');
	    //e.preventDefault();
	   		   
	   		    $('.mansory_slider').slick({
				  slidesToShow: 5,
				  autoplay:true,
				  arrows:true,
				  fade: true,
				  cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
				 
		  		});
	});

});