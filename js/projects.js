jQuery(document).ready(function($){
	var animation = $.browser.msie ? 'fade' : 'scrollLeft';
    $('.featured-projects-widget').flexslider({
        animation: animation,
        slideshowSpeed: 8000,
        animationSpeed: 300,
        selectors: 'ul > li',
        directionNav: true,
        slideshow: true,

		pauseOnAction: false,
		controlNav: false,
		touch: true
		
    });
});
