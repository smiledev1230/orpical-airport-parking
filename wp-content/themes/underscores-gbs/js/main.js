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
  $('.services-card').click(function() {
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






// Home map.....
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

    const map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    
    // this is not used
    
    const marker = new google.maps.Marker({
        map:map,
        draggable:true,
        animation: google.maps.Animation.DROP,
        position: new google.maps.LatLng(lat, lng),
        icon: "http://orpical.com/parkplus/wp-content/uploads/2018/10/marker-image.png",
        url: "https://www.google.com/maps/search/?api=1&query=" + lat + "," + lng
    });
    
    google.maps.event.addListener(marker, 'click', function() {
        window.open(this.url);
    });
    
}
		


// end Home map












$(document).ready(function() {
  if ( $('.services-card').length ) {
    servicesCards();
  }

	// homemap 
	if ( $('body').hasClass('home') ) {
	    
	    
        var locations = [
    		{ "name": "John F. Kennedy International Airport", "lat": "40.664626", "long": "-73.817530" },
    		{ "name": "Newark Airport Bessemer Parking", "lat": "40.699165", "long": "-74.189328" },
    		{ "name": "Newark Airport Park Plus Parking (Rt 1&9)", "lat": "40.698566", "long": "-74.187725" },
    		{ "name": "Newark Airport Renaissance Hotel", "lat": "40.683531", "long": "-74.194022" },
    		{ "name": "Wyndham Garden Philadelphia Airport Hotel", "lat": "39.867887", "long": "-75.303794" },
    		{ "name": "LaGuardia Airport Marriott Hotel", "lat": "40.768953", "long": "-73.867718" },
    		{ "name": "Westchester Airport Overflow/Long Term Lot", "lat": "41.079169", "long": "-73.712529" }
    	];
        
        const mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(locations[0]["lat"], locations[0]["long"]),
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
        };
        
        const map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
    	
    	for (var i=0; i<locations.length; i++) {
    	    console.log(locations[i]["name"]);
    	    lat = locations[i]["lat"];
    	    lng = locations[i]["long"];
    	    const marker = new google.maps.Marker({
                map:map,
                // draggable:true,
                animation: google.maps.Animation.DROP,
                position: new google.maps.LatLng(lat, lng),
                icon: 'http://orpical.com/parkplus/wp-content/uploads/2018/10/marker-image.png',
                url: "https://www.google.com/maps/search/?api=1&query=" + lat + "," + lng
              });
              google.maps.event.addListener(marker, 'click', function() {
                window.open(this.url);
                });
        }
	}

	// parking map 
	if ( $('body').hasClass('page-template-templ-single-parking') ) {
    var parkingLat = $('#lat').val();
    var parkingLng = $('#lng').val();
    var parkingPid = $('#pid').val();
    console.log("Initing map center " + parkingLat + ", " + parkingLng);
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



