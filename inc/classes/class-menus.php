<?php

/**
 * Register Menus
 * 
 * @package Practise
 */

namespace PRACTISE_THEME\Inc;
use PRACTISE_THEME\Inc\Traits\Singleton;

class Menus{
    
    use Singleton;

    protected function __construct(){
        // load Class
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*
        * Actions
        */

        add_action( 'init', [ $this, 'register_menus'] );
    }
    public function register_menus(){
        register_nav_menus( array(
            'practise_Header_menu' => esc_html__('Header Menu', 'practise' ),
            'practise_footer_menu'  => esc_html__( 'Footer Menu', 'practise' ),
        ) );
    }
}