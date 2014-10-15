var $editor = $('#editor');
var iLim = 20;

var ampliar = function() {
	if(($editor.val().length % iLim) == 0) {
		$editor.attr('rows', $editor.val().length / iLim);
	}
}