
var flag;

console.log( flag );

$( '#haircut' ).on( 'click', function() {

	var string = $( '.filipo' ).attr( 'src' );

	if ( string === '/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg' ) {

		string = '/wp-content/themes/filip-rastovic/assets/img/profilna.jpg';

		$( '#haircut' ).text( 'Put hair back on!' );

	} else {

		string = '/wp-content/themes/filip-rastovic/assets/img/long-hair.jpg';

		$( '#haircut' ).text( 'Click to cut my hair!' );

	}

	$( '.filipo' ).attr( 'src', string );

});