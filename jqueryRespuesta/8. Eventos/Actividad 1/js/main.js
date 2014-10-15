var iCount = 0;
var $normal = $('#normal');
var $contador = $('#contador');
var $muerte = $('#muerte');
var $imgMuerte = $('#imgMuerte');


 $normal.on('click',function() {
    	iCount++;
    	$contador.text(iCount);
    });

  $muerte.on('click',function() {
    	iCount = 0
    	$contador.text(iCount);
    
    });

  $muerte.hover(function() {
		$imgMuerte.addClass('bgMuerte');
	}, function() {
		//Cuando sale
		$imgMuerte.removeClass('bgMuerte');
		
		
	});

