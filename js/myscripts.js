// JavaScript Document

$(document).ready(function(){
  $('.banner-slider').slick({
   dots: false,
	 infinite: true,
   slidesToShow: 1,
   slidesToScroll: 1,
	 autoplay: true,
   autoplaySpeed: 5000,
	 speed: 500,
  fade: true,
  cssEase: 'linear',
	  centerMode: true,
         arrows: false,
      
        centerPadding: '40px',
				lazyLoad:'on demand'
      
  });
});