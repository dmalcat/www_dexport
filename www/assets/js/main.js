$(function() {
	replaceSVG();

	var scroll = new SmoothScroll('a[href*="#"]');

	$('#slider').slick({
		dots: true,
		infinite: true,
		speed: 500,
		vertical: true,
		swipe: false, 
		verticalSwiping: true,

	});
});
