<?php

/**
 * Enqueue theme scripts
 * 
 * @package Practise
 */

namespace PRACTISE_THEME\Inc;
use PRACTISE_THEME\Inc\Traits\Singleton;

class assets{
    use Singleton;

    protected function __construct(){
        // load Class
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*
        * Actions
        */

        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles'] );
        add_action( 'wp_enqueue_scripts', [ $this, 'register_scripts'] );
    }
    public function register_styles(){
        // Register styles.
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(PRACTISE_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', PRACTISE_DIR_URI . '/assets/css/bootstrap.min.css', [], false, 'all');
        wp_register_style('fontawesome-css', PRACTISE_DIR_URI . '/assets/css/all.min.css', [], false, 'all');
        wp_register_style('responsive-css', PRACTISE_DIR_URI . '/assets/css/responsive.css', [], false, 'all');
        
         // Enqueue Styles.
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('fontawesome-css');
        wp_enqueue_style('responsive-css');
    }
    public function register_scripts(){
        // Register scripts.
        wp_register_script('main-js', PRACTISE_DIR_URI . '/assets/main.js', [], filemtime(PRACTISE_DIR_PATH . '/assets/js/main.js'), true);
        wp_register_script('bootstrap-js', PRACTISE_DIR_URI . '/assets/js/bootstrap.min.js', ['jquery'], false, true);

        // Enqueue Scripts.
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}