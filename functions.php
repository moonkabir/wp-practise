<?php

/**
 * Theme Functions.
 *
 * @package Practise
 */

 /**
 * Essential theme supports
 */
function theme_setup(){
	/** tag-title **/
	add_theme_support( 'title-tag' );
}
add_action('after_setup_theme','theme_setup');

function wp_practise_enqueue_scripts() {
	// Register styles.
	wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], false, 'all' );
	wp_register_style( 'fontawesome-css', get_template_directory_uri() . '/assets/css/all.min.css', [], false, 'all' );
	wp_register_style( 'responsive-css', get_template_directory_uri() . '/assets/css/responsive.min.css', [], false, 'all' );

	// Register scripts.
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/js/main.js' ), true );
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', ['jquery'], false, true );

	// Enqueue Styles.
	wp_enqueue_style( 'style-css' );
	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'fontawesome-css' );
	wp_enqueue_style( 'responsive-css' );
	// Enqueue Scripts.
	wp_enqueue_script( 'main-js' );
	wp_enqueue_script( 'bootstrap-js' );
}
add_action( 'wp_enqueue_scripts', 'wp_practise_enqueue_scripts' );