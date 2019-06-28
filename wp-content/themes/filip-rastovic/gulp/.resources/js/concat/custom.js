jQuery(document).ready(function($){
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


  // Collapse Navbar
  var navbarCollapse = function() {
    if ( $( "#mainNav" ).offset().top > 100 ) {

	  $( "#mainNav" ).addClass( "navbar-shrink" );
	  
    } else {

	  $( "#mainNav" ).removeClass( "navbar-shrink" );
	  
    }
  };
  
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $( window ).scroll( navbarCollapse );});