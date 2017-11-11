jQuery(document).ready(function($) {
  var w = window.innerWidth;

  $(window).scroll(function() {

    var scrollTop = $(window).scrollTop();
    var parallax_speed_x1 = scrollTop / 2 + 'px';

    var parallax_speed_x2 = scrollTop / 4 + 'px';
    var parallax_speed_x3 = scrollTop / 6 + 'px';

  });






		$selector = $("#logo");
		XAngle = 0;
		YAngle = 0;
		Z = 50;
		
		$selector.on("mousemove",function(e){
			var $this = $(this);
			var XRel = e.pageX - $this.offset().left;
			var YRel = e.pageY - $this.offset().top;
			var width = $this.width();
		
			YAngle = -(0.5 - (XRel / width)) * 4; 
			XAngle = (0.5 - (YRel / width)) * 4;
			updateView($this);
		});
		
		$selector.on("mouseleave",function(){
			ele = $(this);
			ele.css({"transform":"perspective(525px) translateZ(0) rotateX(0deg) rotateY(0deg)","transition":"all 150ms linear 0s","-webkit-transition":"all 150ms linear 0s"});
			ele.find("strong").css({"transform":"perspective(525px) translateZ(0) rotateX(0deg) rotateY(0deg)","transition":"all 150ms linear 0s","-webkit-transition":"all 150ms linear 0s"});
		});
	
	
	function updateView(ele)
	{
		ele.css({"transform":"perspective(525px) translateZ(" + Z + "px) rotateX(" + XAngle + "deg) rotateY(" + YAngle + "deg)","transition":"none","-webkit-transition":"none"});
		ele.find("strong").css({"transform":"perspective(525px) translateZ(" + Z + "px) rotateX(" + (XAngle / 0.66) + "deg) rotateY(" + (YAngle / 0.66) + "deg)","transition":"none","-webkit-transition":"none"});
	}

});