<?php

/**
 * Theme Functions.
 *
 * @package Practise
 */

if( ! defined( 'PRACTISE_DIR_PATH' ) ) {
	define( 'PRACTISE_DIR_PATH', untrailingslashit(get_template_directory() ) );
}

if( ! defined( 'PRACTISE_DIR_URI' ) ) {
	define('PRACTISE_DIR_URI', untrailingslashit(get_template_directory_uri() ) );
}

require_once PRACTISE_DIR_PATH . '/inc/helpers/autoloader.php';

function practice_get_theme_instance(){
	\PRACTISE_THEME\Inc\PRACTISE_THEME::get_instance();
}
practice_get_theme_instance();