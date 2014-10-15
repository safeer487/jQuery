var Img = new Array();

Img.push('img/osito1.jpg');
Img.push('img/osito2.jpg');
Img.push('img/osito3.jpg');
var $slider = $('#slider');
var iCount = 0
var iTiemTran = 1500

/**
 * Metodo que cambia la imagen del slider
 */
function cambiarSlider() {
	$slider.fadeOut(iTiemTran, function(){
		$slider.attr('src',Img[iCount])
		$slider.fadeIn(iTiemTran, function(){
			cambiarSlider()
		});
	});
	iCount++;
	if (iCount >= Img.length) iCount = 0;
}

$slider.attr('src', Img[iCount])
cambiarSlider();

	
    	
    	
