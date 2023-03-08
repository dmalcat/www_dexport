$(function() {
	replaceSVG();

	var scroll = new SmoothScroll('a[href*="#"]');

	$('#slider').slick({
		dots: true,
		infinite: true,
		//autoplay: true,
		speedSpeed: 2000,
		arrows: false,
		vertical: true,
		swipe: false, 
		verticalSwiping: true,

	});
});
