// IMPORTS ::
	// PREPENDS ::
		// /js/src/gallery/fancybox.js
		// /js/src/gallery/buttons.js
		// /js/src/gallery/slick.js

$(document).ready(function(){
	$('.slider-for').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
		slidesToShow: 3,
		slidesToScroll: 1,
		asNavFor: '.slider-for',
		centerMode: true,
		centerPadding: '30px',
		focusOnSelect: true
	});
	$('.slides').slick();
});


