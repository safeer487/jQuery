$(document).ready(function() {
	var $itemMenu = $('nav').find('ul').find('li');
	var iTiem = 1000;
	$itemMenu.hover(function() {
		$(this).find('ul').stop();
		$(this).find('ul').slideDown(iTiem);
	}, function() {
		$(this).find('ul').stop();
		$(this).find('ul').slideUp(iTiem);
	});
});