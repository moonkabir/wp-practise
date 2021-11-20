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
        $this->setup_hooks();
    }

    protected function setup_hooks(){
        /*
        * Actions
        */

        assets::get_instance();
    }

}