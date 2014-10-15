 //  var $body = $('body')
 //  $body.keydown(function(e) {
 //    	console.log(e.which);
 //     	if (e.which == 39) {
 //    	$('#tank').css({
 //    		'left':'+=20px',
 //    		'transform' : 'rotate(90deg)'
 //    	});
 //    	}
	// });

 //  $body.keydown(function(e) {
 //    	console.log(e.which);
 //     	if (e.which == 37) {
	//     	$('#tank').css({
	//     		'left':'-=20px',
	//     		'transform' : 'rotate(270deg)'
	//     	});
 //    	}
	//  });
 //   $body.keydown(function(e) {
 //    	console.log(e.which);
 //     	if (e.which == 38) {
	//     	$('#tank').css({
	//     		'top':'-=20px',
	//     		'transform' : 'rotate(360deg)'
	//     	});
 //    	}
	//  })
 //   $body.keydown(function(e) {
 //    	console.log(e.which);
 //     	if (e.which == 40) {
	//     	$('#tank').css({
	//     		'top':'+=20px',
	//     		'transform' : 'rotate(180deg)'
	//     	});
 //    	}
	//  })
	//  
	//  
	//2 manera
 	var $body = $('body')
   $body.keydown(function(e) {
   		switch(e.which){
   			case 39:
	   			$('#tank').css({
	    		'left':'+=20px',
	    		'transform' : 'rotate(90deg)'
	    		});
    		break;
    		case 37:
	    		$('#tank').css({
		    		'left':'-=20px',
		    		'transform' : 'rotate(270deg)'
		    	});
	    	break;
	    	case 38:
		    	$('#tank').css({
		    		'top':'-=20px',
		    		'transform' : 'rotate(360deg)'
		    	});
	    	break;
	    	case 40:
		    	$('#tank').css({
		    		'top':'+=20px',
		    		'transform' : 'rotate(180deg)'
				});
			break;





   		}

   });


	
    	
    	
