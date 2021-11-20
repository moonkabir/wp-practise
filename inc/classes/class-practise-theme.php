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
        /** tag-title **/
        add_theme_support('title-tag');

        /** custom log **/
        add_theme_support('custom-logo', array(
            'header-text'          => ['site-title', 'site-description'],
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
        ));

        /** custom background **/
        add_theme_support('custom-background', array(
            'default-image'          => '',
            'default-color'          => '#fff',
            'default-repeat'          => 'no-repeat',
        ));

        /** post formats */
        $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
        add_theme_support('post-formats', $post_formats);

        /** post thumbnail **/
        add_theme_support('post-thumbnails');

        /** HTML5 support **/
        $html_support = array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script');
        add_theme_support('html5', $html_support);

        /** refresh widgest **/
        add_theme_support('customize-selective-refresh-widgets');

        /** automatic feed link*/
        add_theme_support('automatic-feed-links');
        
        /** automatic feed link*/
        add_theme_support('editor-styles');

        /** Wp block styles*/
        add_theme_support('wp-block-styles');

        /** align wide*/
        add_theme_support('align-wide');

        /** Max content width*/
        global $content_width;
        if( ! isset($content_width)){
            $content_width = 1240;
        } 
    }
}