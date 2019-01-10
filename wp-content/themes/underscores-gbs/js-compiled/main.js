/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

( function( $ ) {

	// Site title and description.
	wp.customize( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );
	wp.customize( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Header text color.
	wp.customize( 'header_textcolor', function( value ) {
		value.bind( function( to ) {
			if ( 'blank' === to ) {
				$( '.site-title, .site-description' ).css( {
					'clip': 'rect(1px, 1px, 1px, 1px)',
					'position': 'absolute'
				} );
			} else {
				$( '.site-title, .site-description' ).css( {
					'clip': 'auto',
					'position': 'relative'
				} );
				$( '.site-title a, .site-description' ).css( {
					'color': to
				} );
			}
		} );
	} );
} )( jQuery );

function homeSlider() {
	if ( $('.home-slider').length ) {
		$('.home-slider').slick({
			infinite: true,
		  speed: 1000,
		  autoplay: true,
		  cssEase: 'cubic-bezier(0.645, 0.045, 0.355, 1)',
		  autoplaySpeed: 4000,
		});
	}

}


function headerFn() {
	var scrollTop = $(window).scrollTop(),
		  offsetTop = 40;

	if(scrollTop >= offsetTop) {
		$('.header').addClass('js-header');
	} else {
		$('.header').removeClass('js-header');
	}
}



function scrollToSection() {
	$('.slide-to-section').find('a').on('click', function(e) {
		e.preventDefault();

		var scrollTop = $(window).scrollTop();
		var $target   = $(this).attr('href');

		$('html,body').animate({
        scrollTop: $( $target ).offset().top - 120
      },
        'slow');
	});
}


function servicesCards() {
  $('.services-card').mouseover(function() {
    $('.sec--img-txt__txt').scrollTop = 0;

    var serviceId = $(this).attr('id').split('-')[2];
    $(this).addClass('js-is-active').siblings().removeClass('js-is-active');
    $('#services-content-' + serviceId).addClass('js-is-active').siblings().removeClass('js-is-active');
  });
}


function scrollToSectionPosition() {

	if (($('#section--overview').offset().top - $(window).scrollTop() - $(".header").height() <=  $(".header").height()) && $(window).width() > 767) {
    $(".slide-to-section").addClass("fixed");
    scrollToSectionActiveClass();
	} else {
    $(".slide-to-section").removeClass("fixed");
    $('.pageSection').removeClass('active');
	}
}


function scrollToSectionActiveClass() {
	var y = $(this).scrollTop();

	$('.pageSection').each(function (event) {
    if (y >= $($(this).attr('href')).offset().top - 150) {
        $('.pageSection').not(this).removeClass('active');
        $(this).addClass('active');
    }else if(y <= 400) {
  		$('.pageSection').removeClass('active');
  	}
	});
}


// set active class to menu links when 
//user scrolls to that section of the page
// function navigationFn() {
// 	var headerOffset = 140,
//       scrollTop    = $(this).scrollTop();

//   $('.pageSection').each(function() {
//   	if( ($(this).offset().top) <= (scrollTop + headerOffset) ) {
//   		$('[data-active-part='+ $(this).attr('id') +']').addClass('active')
//   			.siblings('[data-active-part]').removeClass('active');
//   	} else if(scrollTop <= 400) {
//   		$('[data-active-part]').removeClass('active');
//   	}

//   	if( (scrollTop < 700) && ($('#gites').offset().top <=(scrollTop + 240)) ) {
//   		$('[data-active-part="gites"]').addClass('active')
//   		 .siblings('[data-active-part]').removeClass('active');
//   	}
//   });
// }


        





function toggleNavOnMobile() {

	$('.navbar-toggler').on('click', function() {
		if( !$('.header').hasClass('js-mob-menu-is-open') ) {
			$('.header').addClass('js-mob-menu-is-open');
		} else {
			$('.header').removeClass('js-mob-menu-is-open');
		}
	});

}


function sliderVar1() {
	var swiper = new Swiper('.slider-var1', {
    loop: true,
	  autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
	});
}



function sliderHero() {
	var swiper = new Swiper('.slider-hero', {
    loop: true,
    effect: 'fade',
	  autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
	});
}






// Home map
function initMap(lat, lng) {
	const mapOptions = {
    zoom: 16,
    center: new google.maps.LatLng(lat, lng),
    styles: [
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "poi",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      },
      {
        "featureType": "transit",
        "stylers": [
          {
            "visibility": "off"
          }
        ]
      }
    ]
}

const map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

const marker = new google.maps.Marker({
    map:map,
    // draggable:true,
    animation: google.maps.Animation.DROP,
    position: new google.maps.LatLng(lat, lng),
    icon: null // null = default icon
  });
}
// end Home map












$(document).ready(function() {
  if ( $('.services-card').length ) {
    servicesCards();
  }

	// homemap 
	if ( $('body').hasClass('home') ) {
		initMap(42.3660435, -71.1042804);
	}

	// parking map 
	if ( $('body').hasClass('single-airport-parking') ) {
    var parkingLat = $('#lat').val();
    var parkingLng = $('#lng').val();
		initMap(parkingLat, parkingLng);
	}	

	sliderVar1();

	sliderHero();

	if ( $('.slide-to-section').length ) {
		scrollToSection();
	}

	if ( $('.navbar-toggler').length ) {
		toggleNavOnMobile();
	}

});




$(window).on('scroll', function() {

	headerFn();

  if ( $('#section--overview').length ) {
	 scrollToSectionPosition();
  }

	// navigationFn();
	
});



$(window).on('resize', function() {
  if ( $('#section--overview').length ) {
   scrollToSectionPosition();
  }

	headerFn();
});
/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
( function() {
	var isIe = /(trident|msie)/i.test( navigator.userAgent );

	if ( isIe && document.getElementById && window.addEventListener ) {
		window.addEventListener( 'hashchange', function() {
			var id = location.hash.substring( 1 ),
				element;

			if ( ! ( /^[A-z0-9_-]+$/.test( id ) ) ) {
				return;
			}

			element = document.getElementById( id );

			if ( element ) {
				if ( ! ( /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) ) {
					element.tabIndex = -1;
				}

				element.focus();
			}
		}, false );
	}
} )();
