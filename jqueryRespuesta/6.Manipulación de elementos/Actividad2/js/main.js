

var iLimit = 3;

function anadir(){
	//variable
	var Imagen = $('#fotos option:selected').val();
	var sSrc = "<img class='pokemon' src="+"img/"+ Imagen + ".png" +">";
	$('#container').append(sSrc);
	if ($('#container').find('.pokemon').length >= iLimit){
		$('#anadir').attr('disabled','disabled');
	}
}
function eliminar(){
	$('#container img').remove();
	$('#anadir').removeAttr('disabled');



}