<?php
/**
 * Bootstraps the Theme
 * 
 * @package Practise
 */

namespace PRACTISE_THEME\Inc;
use PRACTISE_THEME\Inc\Traits\Singleton;

class PRACTISE_THEME{
    use Singleton;

    protected function __construct(){
        // load Class
        assets::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*
        * Actions
        */

        add_action('after_setup_theme', [ $this, 'setup_theme'] );
    }

    public function setup_theme(){
        add_theme_support('title-tag');
    }
}