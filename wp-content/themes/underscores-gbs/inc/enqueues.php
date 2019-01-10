<?php

/**
 * Enqueue scripts and styles.
 */
function ugwps_scripts() {
	// STYLES

	// bootstrap
	wp_enqueue_style( 'underscores-gbs-style-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );

	// Font
	wp_enqueue_style( 'underscores-gbs-style-font', 'https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Merriweather+Sans:300,300i,400,400i,700,700i,800,800i' );


	// swiper slider - uncomment when needed
	wp_enqueue_style( 'underscores-gbs-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/css/swiper.min.css' );
	

	// Main css file
	wp_enqueue_style( 'underscores-gbs-style', get_stylesheet_uri() );

	// JAVASCRIPT
	
	// jQuery CDN
	wp_enqueue_script( 'underscores-gbs-jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), false, true );

	// bootstrap
	wp_enqueue_script( 'underscores-gbs-bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), false, true );
	

	// googlemaps
	wp_enqueue_script( 'underscores-gbs-maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyCEaEiRFdFLHS2WUTYyOA7D8C2ncaZWTnE', array(), false, true );


	// swiper slider - uncomment when needed
	wp_enqueue_script( 'underscores-gbs-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js', array(), false, true );
	
	// Main js file
	wp_enqueue_script( 'underscores-gbs-main', get_template_directory_uri() . '/js/main.js?v=0.036', array(), false, true );
	
	// jQuery Date Picker CDN
	wp_enqueue_script('jquery-datepicker', 'https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.js', array(), false, true);
	wp_enqueue_style('jquery-datepicker-style', 'https://cdnjs.cloudflare.com/ajax/libs/datepicker/0.6.5/datepicker.min.css');
}


add_action( 'wp_enqueue_scripts', 'ugwps_scripts' );