$(document).ready(function(){
  $('.food').slick({
  	autoplay:true,
  	autoplaySpeed: 3000,
  	slidesToShow: 4,
  	slidesToScroll: 1,
  	dots: true,
  	responsive:[
  	{
  		breakpoint:768,
  		settings:
  		{
  			slidesToShow:1,
  			slidesToScroll:1,
  		}
  	}
  	]
  });
});





