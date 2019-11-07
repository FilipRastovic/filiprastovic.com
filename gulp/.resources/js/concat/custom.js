jQuery(document).ready(function($){/**
     * Exit modal 2.0
     */
    (function () {

        var guid = 0;

        //constructor
        var exitModalObj = function (element, options) {
            this.guid = guid++;
            this.settings = $.extend({}, exitModalInterface.defaults, options);
            this.$element = $(element);
            this.showCounter = 0;
            this.eventPrefix = '.exitModal'+this.guid;
            this.modalShowEvent = 'show.bs.modal'+this.eventPrefix;
            this.modalShownEvent = 'shown.bs.modal'+this.eventPrefix;
            this.modalHideEvent = 'hide.bs.modal'+this.eventPrefix;
            this.modalHiddenEvent = 'hidden.bs.modal'+this.eventPrefix;
        }

        exitModalObj.prototype = {
            init: function() {
                var plugin = this;
                plugin.$element.modal({
                    backdrop: plugin.settings.modalBackdrop,
                    keyboard: plugin.settings.modalKeyboard,
                    show: false
                });
                plugin.$element.on(plugin.modalShowEvent, function (e) {
                    plugin.showCounter++;
                    plugin.mouseOutEventUnbind();
                    plugin.settings.callbackOnModalShow.call(plugin);
                });
                plugin.$element.on(plugin.modalShownEvent, function (e) {
                    plugin.settings.callbackOnModalShown.call(plugin);
                });
                plugin.$element.on(plugin.modalHideEvent, function (e) {
                    plugin.settings.callbackOnModalHide.call(plugin);
                });
                plugin.$element.on(plugin.modalHiddenEvent, function (e) {
                    if( plugin.settings.numberToShown ) {
                        if (plugin.showCounter < plugin.settings.numberToShown) {
                            plugin.mouseOutEventBind();
                        }
                    } else {
                        plugin.mouseOutEventBind();
                    }
                    plugin.settings.callbackOnModalHidden.call(plugin);
                });
                plugin.mouseOutEventBind();
            },
            mouseOutEventBind: function() {
                var plugin = this;
                var oldY = 0;
                $(plugin.settings.viewportSelector).on("mousemove"+plugin.eventPrefix, function(e) {
                    if( (e.clientY <= plugin.settings.pageYValueForEventFired) && (e.pageY < oldY) ) {
                        plugin.showModal();
                    }
                    oldY = e.pageY;
                });
            },
            mouseOutEventUnbind: function() {
                var plugin = this;
                $(plugin.settings.viewportSelector).off("mousemove"+plugin.eventPrefix);
            },
            allEventsUnbind: function() {
                var plugin = this;
                $(plugin.settings.viewportSelector).off(plugin.eventPrefix);
                plugin.$element.off(plugin.eventPrefix);
            },
            showModal: function() {
                var plugin = this;
                plugin.$element.modal('show');
            },
            hideModal: function() {
                var plugin = this;
                plugin.$element.modal('hide');
            },
            destroy: function() {
                var plugin = this;
                plugin.allEventsUnbind();
                plugin.$element.data('exitModal', null);
            }
        };

        //plugin
        function exitModalInterface(methodOrOptions) {
            var methodsParameters = Array.prototype.slice.call( arguments, 1 );
            return this.each(function () {
                if (!$(this).data('exitModal')) {
                    var plugin = new exitModalObj(this, methodOrOptions);
                    $(this).data('exitModal', plugin);
                    plugin.init();
                } else if (typeof methodOrOptions === 'object') {
                    $.error( 'jQuery.exitModal already initialized' );
                } else {
                    var plugin = $(this).data('exitModal');
                    if ( plugin[methodOrOptions] ) {
                        plugin[methodOrOptions].apply(plugin, methodsParameters);
                    } else {
                        $.error( 'Method ' +  methodOrOptions + ' does not exist on jQuery.exitModal' );
                    }
                }
            })
        }

        //defaults options
        exitModalInterface.defaults = {
            viewportSelector:               document,
            showButtonClose:                true,
            showButtonCloseOnlyForMobile:   true,
            pageYValueForEventFired:        10,
            numberToShown:                  false,
            modalBackdrop:                  true,
            modalKeyboard:                  true,
            modalShowEvent:                 'show.bs.modal',
            modalShownEvent:                'shown.bs.modal',
            modalHideEvent:                 'hide.bs.modal',
            modalHiddenEvent:               'hidden.bs.modal',
            callbackOnModalShow:            function() {  },
            callbackOnModalShown:           function() {  },
            callbackOnModalHide:            function() {  },
            callbackOnModalHidden:          function() {  }
        };

		$.fn.exitModal = exitModalInterface;

		var timer;

		var exitModalParams = {
			numberToShown:                  5,
			callbackOnModalShow:            function() {
				// var counter = $('.exit-modal').data('exitModal').showCounter;
				// $('.exit-modal .modal-body p').text("Exit modal shown "+counter+" times");
			},
			callbackOnModalShown:           function() {
				timer = setTimeout(function(){
					window.location.href = "http://www.jqueryscript.net";
				}, 4000)
			},
			callbackOnModalHide:            function() {
				clearTimeout(timer);
			}
		}
		
		$('.exit-modal').exitModal(exitModalParams);
		if($('.exit-modal').data('exit-modal')) {
			$(".destroyed-state").hide();
			$(".initialized-state").show();
		}

    })();


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
  $(window).scroll(navbarCollapse);

  $( '.contact-link' ).on( 'click', function() {

    $( '#exampleModal' ).modal( 'show' );

  });
    

function verificationForm(){
	//jQuery time
	var current_fs, next_fs, previous_fs; //fieldsets
	var left, opacity, scale; //fieldset properties which we will animate
	var animating; //flag to prevent quick multi-click glitches

	$(".next").click(function () {
		if (animating) return false;
		animating = true;

		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//activate next step on progressbar using the index of next_fs
		$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

		//show the next fieldset
		next_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function (now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale current_fs down to 80%
				scale = 1 - (1 - now) * 0.2;
				//2. bring next_fs from the right(50%)
				left = (now * 50) + "%";
				//3. increase opacity of next_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
					'transform': 'scale(' + scale + ')',
					'position': 'absolute'
				});
				next_fs.css({
					'left': left,
					'opacity': opacity
				});
			},
			duration: 800,
			complete: function () {
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".previous").click(function () {
		if (animating) return false;
		animating = true;

		current_fs = $(this).parent();
		previous_fs = $(this).parent().prev();

		//de-activate current step on progressbar
		$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

		//show the previous fieldset
		previous_fs.show();
		//hide the current fieldset with style
		current_fs.animate({
			opacity: 0
		}, {
			step: function (now, mx) {
				//as the opacity of current_fs reduces to 0 - stored in "now"
				//1. scale previous_fs from 80% to 100%
				scale = 0.8 + (1 - now) * 0.2;
				//2. take current_fs to the right(50%) - from 0%
				left = ((1 - now) * 50) + "%";
				//3. increase opacity of previous_fs to 1 as it moves in
				opacity = 1 - now;
				current_fs.css({
					'left': left
				});
				previous_fs.css({
					'transform': 'scale(' + scale + ')',
					'opacity': opacity
				});
			},
			duration: 800,
			complete: function () {
				current_fs.hide();
				animating = false;
			},
			//this comes from the custom easing plugin
			easing: 'easeInOutBack'
		});
	});

	$(".submit").click(function () {
		return false;
	})
}; 

//* Add Phone no select
function phoneNoselect(){
	if ( $('#msform').length ){   
		$("#phone").intlTelInput(); 
		$("#phone").intlTelInput("setNumber", "+880"); 
	};
}; 
//* Select js
function nice_Select(){
	if ( $('.product_select').length ){ 
		$('select').niceSelect();
	};
}; 
/*Function Calls*/  
verificationForm ();
phoneNoselect ();
nice_Select ();

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
  });});