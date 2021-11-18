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
        wp_die("hello");
        // load Class
        $this->set_hooks();
    }

    protected function set_hooks(){}
}