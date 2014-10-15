
//Variables
$body = $('body');

$body.click(function(e) {
	var sColor = 'rgb('
            + (Math.floor(Math.random() * 256)) + ','
            + (Math.floor(Math.random() * 256)) + ','
            + (Math.floor(Math.random() * 256)) + ')';
	var $div = $('<div>');
	$div.css({
		'background-color' : sColor,
		'top': e.pageY + 'px',
		'left': e.pageX + 'px'
	});
	$('body').append($div);
	console.log(e.pageY);
});