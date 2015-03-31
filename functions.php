<?php 
 /**
  * functions.php
  * 
  * The themes functions.
  */

 /**
  * ----------------------------------------------------------------------------------------------------------
  * 1.0 - Define constants.
  * ----------------------------------------------------------------------------------------------------------
  */
 define( 'THEMEROOT', get_stylesheet_directory_uri() );
 define( 'IMAGES', THEMEROOT .'/images' );
 define( 'SCRIPTS', THEMEROOT .'/js' );
 define( 'FRAMEWORK', get_template_directory() . '/framework' );


 /**
  * ----------------------------------------------------------------------------------------------------------
  * 2.0 - Load Framework.
  * ----------------------------------------------------------------------------------------------------------
  */
 require_once(FRAMEWORK .'/init.php');

/**
 * ----------------------------------------------------------------------------------------------------------
 * 3.0 - Set up the content width value based on the theme's design.
 * ----------------------------------------------------------------------------------------------------------
 */
 if( !isset( $content_width ) ){
     $content_width = 800;
 }


/**
 * ----------------------------------------------------------------------------------------------------------
 * 4.0 - Set up theme default and register various supported features and functions.
 * ----------------------------------------------------------------------------------------------------------
 */
if(!function_exists('ca_setup')){
    function ca_setup(){
        //make the theme available for translation
        $lang_dir = THEMEROOT . '/languages';
        load_theme_textdomain( 'architect', $lang_dir );

        // Post formats
        add_theme_support( 'post-formats',
            array(
                'gallery',
                'link',
                'image',
                'quote',
                'video',
                'audio',
                'aside'
            )
        );

        // Support for automatic feed links
        add_theme_support( 'automatic-feed-links' );

        // Support for post thumbnails
        add_theme_support( 'post-thumbnails' );

        // TODO: Add support for custom header , background
        // TODO: see Theme_Features in wordpress.org

        // Register Nav menus
        register_nav_menus(
            array(
                'main-menu' => __('Main Menu', 'architect')
            )
        );

        // Support for theme markup
        add_theme_support( 'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'widgets'
            )
        );
    }

    add_action('after_theme_setup', 'ca_setup');
}






