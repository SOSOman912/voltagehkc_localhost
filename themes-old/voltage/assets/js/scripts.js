// JavaScript Document
(function($) {
	"use strict";
    
    $('#page-content').addClass('active');
    
    setTimeout(function(){ 
        
        $('#page-content').addClass('gokeyburn');
    
    }, 3000);
    
	$('.testimonial-carousel').owlCarousel({
		singleItem: true,
		slideSpeed: 500,
		autoPlay: true,
		stopOnHover: false,
		navigation: false,
		pagination: true,
		mouseDrag: false,
		touchDrag: true,
		transitionStyle: "fade"
	});

	$('.content-portfolio-detail').owlCarousel({
		singleItem: true,
		slideSpeed: 500,
		autoPlay: true,
		stopOnHover: false,
		navigation: true,
		navigationText: false,
		pagination: true,
		mouseDrag: false,
		touchDrag: true,
		transitionStyle: "fade"
	});

	$('.custom-content-casestudy-rwd').owlCarousel({
		singleItem: true,
		slideSpeed: 500,
		autoPlay: true,
		stopOnHover: false,
		navigation: false,
		pagination: true,
		mouseDrag: false,
		touchDrag: true,
		transitionStyle: "fade"
	});

})(jQuery);

$(window).scroll(function() {

});

$(window).load(function() {

});