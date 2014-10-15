var iVideo = 0;
var aVideosURL = new Array();
aVideosURL.push('video/dilation.mp4');
aVideosURL.push('video/radar.mp4');
aVideosURL.push('video/tides.mp4');
$reproductor = $('#reproductor');

var pasar = function() {
	//Pasa marcador
	if(iVideo < aVideosURL.length) {
		iVideo++;
	} else {
		iVideo = 0;
	}

	//Cambiar url video
	$reproductor.attr('src', aVideosURL[iVideo]);
}

var quitarControles = function() {
	$reproductor.removeAttr('controls');
}