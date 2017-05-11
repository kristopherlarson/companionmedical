;( function( $ ) {

	'use strict';

	var el = document.getElementsByClassName('featured-slider'),
		$el = $( el );


	var init = function() {

		if ( el.length ) {
			runSlick();
			console.info( 'Initialized homepage slick fullscreen.' );
		}

	};


	var runSlick = function() {

		/****** NOTE: if options are changed don't forget to match in mobile-nav.js slick initializer. ******/

		$el.slick({
			autoplay: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplaySpeed: 4500,
			speed: 2500,
			fade: true,
			arrows: false,
			dots: true,
			pauseOnHover: false,
			responsive: [
				{
					breakpoint: 640,
					settings: {
						dots: false
					}
				}
			]
		}).on('afterChange', function(event, slick, currentSlide, nextSlide){
			$('.slick-active').next().find('.lazyload').addClass('lazypreload');
		});
	};

	// Remove styling
	var removeStyles = function() {
		$elImage.removeAttr('style');
		$el.removeAttr('style');
	};


	init();

} )( jQuery );






;( function( $ ) {

	'use strict';

	var el = document.getElementsByClassName('testi-wrap'),
		$el = $( el );


	var init = function() {

		if ( el.length ) {
			runSlick();
			console.info( 'Initialized testimonial slider.' );
		}

	};


	var runSlick = function() {

		/****** NOTE: if options are changed don't forget to match in mobile-nav.js slick initializer. ******/

		$el.slick({
			autoplay: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			autoplaySpeed: 14500,
			speed: 2500,
			fade: true,
			arrows: false,
			dots: true,
			pauseOnHover: true
		});
	};

	// Remove styling
	var removeStyles = function() {
		$elImage.removeAttr('style');
		$el.removeAttr('style');
	};


	init();

} )( jQuery );