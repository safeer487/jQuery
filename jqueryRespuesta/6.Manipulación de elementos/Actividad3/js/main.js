
var iLim = 10;
var iCont = 1;
function detectar(){
	if ($('#messege').val().length > (iCont * iLim)) {
		$('#messege').attr('rows', 5 * iCont);
		iCont++;
	}
	if ($('#messege').val().length == 0) {
		$('#messege').attr('rows', 2)
	};

}