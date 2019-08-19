jQuery(document).ready(function($){
var flag;

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

new WOW().init();
  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);});