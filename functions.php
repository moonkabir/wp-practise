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