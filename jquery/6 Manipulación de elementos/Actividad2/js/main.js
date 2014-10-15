var $pokemonSelec;
var $seleccion = $('#seleccion');
var iSelec = 0;

var anyadirPokemon = function() {
	if(iSelec < 3) {
		$pokemonSelec = $('#pokemons').find(':selected');
		var $pokeImg = $('<img>', {
			src : 'img/' + $pokemonSelec.val() + '.png',
			alt: $pokemonSelec.text()
		});
		$seleccion.append($pokeImg);
		iSelec++;
		console.log('Pokemon ' + $pokemonSelec.text() + ' añadido.');

	} else {
		console.log('Imposible añadir');
	}
}

var quitarPokemon = function() {
	if(iSelec > 0) {
		var iPos = $('#quitar').find(':selected').val() - 1;
		$('#seleccion').find('img').eq(iPos).remove();

		iSelec--;
		console.log('Pokemon quitado.');
	}
}