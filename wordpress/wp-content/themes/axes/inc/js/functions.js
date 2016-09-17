/**
 * Functions and definitions
 *
 * @package WordPress
 * @subpackage Axes
 * @since Axes 1.0
 */

(function($) {
	
	"use strict";
	
	$(".menu-item-has-children").addClass("dropdown");
	$(".menu-item-has-children > a").addClass("dropdown-toggle");
	$(".menu-item-has-children > a").attr("data-hover","dropdown");
	$(".menu-item-has-children > a").attr("data-toggle","dropdown");
	$(".menu-item-has-children > a").attr("aria-expanded","false");
	$(".sub-menu").addClass("dropdown-menu");
	
	$(".pr-cl-default a.pr-button").addClass("btn-style3");
	$(".pr-cl-green a.pr-button").addClass("btn-style6");
	$(".pr-cl-accent a.pr-button").addClass("btn-style1");
	$(".pr-cl-purple a.pr-button").addClass("btn-style4");
	$(".pr-cl-orange a.pr-button").addClass("btn-style2");
		
		
	$(document).ready(function(){	
	
		// Scroll buttons
		$('.scroll').click(function(event) {
			event.preventDefault();
			var target = "#" + $(this).data('target');
			$('html, body').animate({scrollTop:$(target).offset().top}, 600);
		})
	
		// Wp admin bar fix
		if ( $(".vc_row")[0] ) 
		{
			$("div.page-content").removeClass("container");
			$("div.page-content > div").removeClass("row");
			$("div.page-content > div > div").removeClass("col-md-12");
			$(".page-content").css("padding","0");
		} 
		else 
		{
			
		}
		
		// Visual Composer
		if ( $("#wpadminbar")[0] ) 
		{
			$("nav").css('top','32px');
		} 
		else 
		{
			
		}
		
		// Moblie Menu resize
		$(".navbar-fixed-top .navbar-collapse").css("max-height", $(window).height() - $(".navbar-header").height() );
		
		// Search
 		$('#search .search-trigger').on('click',function(){
        	$('.search-bar').animate({height: 'toggle'},500);
    	});
		
		// Closes the Responsive Menu on Menu Item Click
		$('.navigation.overlay .navbar-collapse ul li a').on('click',function() {
			$('.navbar-toggle:visible').click();
		});

		// jQuery to collapse the navbar on scroll
		$(window).scroll(function(){
			if(window.scrollY > 60){
				$('nav').addClass("sticky");
			}else{
				$('nav').removeClass("sticky");
			}
			
		});
			
		// Parallax Effect
		$('.parallax').css('background-size','cover');
		
		$('.parallax').css('background-attachment','fixed');
		
		$('.parallax').css('background-position','center center');
		
		$('.parallax').css('position','relative');
		
		$('.one-menu li.internal > a').addClass('internal');
		
		// Responsive video
		$('.container').fitVids();
		
		// Check if an internal link is enabled
		if ( $(".internal")[0] ) 
		{
			
		} 
		else 
		{
			$("div.main-menu").removeClass("one-menu");
		}
		
		$('.one-menu').singlePageNav({
			offset: 60,
			filter: ':not(.external)',
			currentClass: 'scroll-link',
			speed: 800 ,
		});
	
	});
	
	$(window).bind("load", function() {
		
		$('.timer').countTo();
		
		// Owl Carousel Rotator
		$('#owlslider').owlCarousel({
			nav : false,
			scrollPerPage : true,
			mouseDrag: true,
			touchDrag: true,
			loop:true,
			dots : true,
			autoplay: true,
			autoplayTimeout: 4000,
			items:1,
			margin:0
		})
	
	});
	
})(jQuery);

// Scroll to Top

(function() {
	"use strict";

	var docElem = document.documentElement,
		didScroll = false,
		changeHeaderOn = 550;
		document.querySelector( '#back-to-top' );
	function init() {
		window.addEventListener( 'scroll', function() {
			if( !didScroll ) {
				didScroll = true;
				setTimeout( scrollPage, 50 );
			}
		}, false );
	}
	
})(jQuery);

jQuery(window).scroll(function(event){
	var scroll = jQuery(window).scrollTop();
if (scroll >= 50) {
    jQuery("#back-to-top").addClass("show");
} else {
    jQuery("#back-to-top").removeClass("show");
}
});

jQuery('a.backToTop').click(function(event) {	
				
	event.preventDefault();		
	
	jQuery('html, body').animate({scrollTop: 0}, 610);
			
})

jQuery(window).load(function() {
// Preloader
		jQuery('#status').fadeOut();
		jQuery('#preloader').delay(350).fadeOut('slow');
});



