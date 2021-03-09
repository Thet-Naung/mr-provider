/*!
 *	Author: B360 Digital Marketing
	name: script.js	
	requires: jquery	
 */

$(document).ready(function() {  

	// Mobile responsive nav
	$('.stellarnav').stellarNav({
		theme: 'plain',
		menuLabel: '',
		breakpoint: 991,
		position: 'right',
		openingSpeed: 250,
		closingSpeed: 250,
	});

	var products = new Swiper('.product-slide', {
		slidesPerView: 3,
		slidesPerColumn: 2,
		slidesPerGroup: 3,
		spaceBetween: 20,
		slidesPerColumnFill: 'row',
		direction: 'horizontal',
		loop: true,
		navigation: {
			nextEl: '.product-next',
			prevEl: '.product-prev',
		},
		breakpoints: {
        	1199: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                spaceBetween: 20
            },
            991: {
				slidesPerView: 3,
				slidesPerGroup: 3,
                spaceBetween: 30
            },
        	575: {
				slidesPerView: 2,
				slidesPerGroup: 2,
                spaceBetween: 50
			},
			200: {
				slidesPerView: 1,
				slidesPerColumn: 1,
				slidesPerGroup: 1,
                spaceBetween: 20
			}
        }
	});

	var galleryThumbs = new Swiper('.gallery-thumbs', {
		spaceBetween: 10,
		slidesPerView: 4,
		freeMode: true,
		watchSlidesVisibility: true,
		watchSlidesProgress: true,
	  });
	  var galleryTop = new Swiper('.gallery-top', {
		spaceBetween: 10,
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
		thumbs: {
		  swiper: galleryThumbs
		}
	  });

	// AOS Animate
	AOS.init();
});