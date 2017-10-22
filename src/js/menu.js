jQuery(document).ready(function($) {
	$('#menu-primary-items .dropdown > a').on("mouseover", function(e) {
		$(this).parent('li').addClass("open");
	});
	
	$( ".dropdown-menu" ).on("mouseleave", function(e) {
			$(this).parent('li').removeClass("open");
	});
});