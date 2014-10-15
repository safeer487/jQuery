/* Con CSS */

var $slideCSS = $('#slideCSS');
var aImg = new Array();
aImg.push('img/osito1.jpg');
aImg.push('img/osito2.jpg');
aImg.push('img/osito3.jpg');
var iCont = 0;
var iTiem = 3000;



var cambiarImgCSS = function() {
	$slideCSS.css('background-image', 'url("' + aImg[iCont] + '")');

	if(iCont < aImg.length - 1) {
		iCont++;
	} else {
		iCont = 0;
	}
}

cambiarImgCSS();
setInterval('cambiarImgCSS()', iTiem);

/* Con JQuery */

var $slideJQuery = $('#slideJQuery');
var aImg2 = new Array();
aImg2.push('img/osito1.jpg');
aImg2.push('img/osito2.jpg');
aImg2.push('img/osito3.jpg');
var iCont2 = 0;
var iTiem2 = 3000;



var cambiarImgJQuery = function() {
	$slideJQuery.fadeOut('0.5', function() {
		$slideJQuery.css('background-image', 'url("' + aImg2[iCont2] + '")').fadeIn('0.5');
	});

	if(iCont2 < aImg2.length - 1) {
		iCont2++;
	} else {
		iCont2 = 0;
	}
}

cambiarImgJQuery();
setInterval('cambiarImgJQuery()', iTiem2);