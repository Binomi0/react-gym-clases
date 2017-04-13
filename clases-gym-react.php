<?php
/*
Plugin Name: Clases Gym React
Description: Plugin para mostrar las clases de GymNoray!
Author: Adolfo Onrubia
Author URI: http://adolfo.onrubia.es
*/

// Shortcode to output needed markup
add_shortcode( 'wpshout_react_clases', 'wpshout_react_clases_show_clases' );
function wpshout_react_clases_show_clases() {
	return '<div id="clase"></div>';
}

add_action( 'wp_enqueue_scripts', 'wpshout_react_clases_enqueue_scripts' );
function wpshout_react_clases_enqueue_scripts() {
	if( ! is_front_page() || ! is_page( 587 )) {
		return;
	}
	wp_enqueue_script( 'react', 'https://unpkg.com/react@15/dist/react.min.js', '', null, true);
	wp_enqueue_script( 'react-dom', 'https://unpkg.com/react-dom@15/dist/react-dom.min.js', '', null, true);
	wp_enqueue_script( 'babel', 'https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.min.js', '', null, true);
	wp_enqueue_script( 'wpshout-react-clases', plugin_dir_url( __FILE__ ) . 'static/js/main.c79d9171.js', '', null, true );
	wp_enqueue_style( 'wpshout-react-clases', plugin_dir_url( __FILE__ ) . 'static/css/main.1c8adc0c.css' );
}
/*
// Add "babel" type to clases script
add_filter( 'script_loader_tag', 'wpshout_react_clases_add_babel_type', 10, 3 );
function wpshout_react_clases_add_babel_type( $tag, $handle, $src ) {
	if ( $handle !== 'wpshout-react-clases' ) {
		return $tag;
	}
	return '<script src="' . $src . '" ></script>' . "\n";
}*/