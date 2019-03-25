<?php
/**
 * svartechkom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package svartechkom
 */



/**
 * Enqueue scripts and styles.
 */
//echo 'gfgjfhjghjhgkjghkjhg1';




add_action( 'wp_enqueue_scripts', 'svartechkom_scripts' ); 

function svartechkom_scripts() {

	

	wp_enqueue_style( 'svartechkom-main-style', get_stylesheet_uri() );

	wp_enqueue_style( 'svartechkom-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

	wp_enqueue_style( 'svartechkom-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');

	wp_enqueue_style( 'svartechkom-styles', get_template_directory_uri() . '/assets/css/main-styles.css');


	// wp_enqueue_script( 'svartechkom-js-main', get_template_directory_uri() . '/js/main.js', true );

	// wp_enqueue_script( 'svartechkom-js-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', true );

}



/** 
 * Register Nav Menu
 */

add_action('after_setup_theme', 'svartechkom_menus');

function svartechkom_menus() {
	register_nav_menu('bottom', 'desktop_menu');


}

?>
