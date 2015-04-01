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


/**
 * ----------------------------------------------------------------------------------------------------------
 * 5.0 - Display meta information for specific post
 * ----------------------------------------------------------------------------------------------------------
 */
if( !function_exists('ca_post_meta') ){
    function ca_post_meta(){
        echo '<ul class="list-inline entry-meta">';

        // check if the post type is post, not a page
        if(get_post_type() === 'post'){
            // If there is a sticky post, mark it.
            if( is_sticky() ){
                echo '<li class="meta-featured-post"><i class="fa fa-thumb-tack"></i>' . __('Sticky', 'architect') .'</li>';
            }
            // Get the post author details.
            printf(
                '<li class="meta-author"><a href="%1$s" rel="author">%2$s</a></li>',
                esc_url(get_author_posts_url( get_the_author_meta('ID') )),
                get_the_author()
            );
            // The date
            echo '<li class="meta-date">'. get_the_date() .'</li>';

            // The categories
            $cat_list = get_the_category_list( ', ' );
            if($cat_list){
                echo '<li class="meta_categories">'. $cat_list .'</li>';
            }

            // The tags
            $tag_list = get_the_tag_list( '',', ' );
            if($tag_list){
                echo '<li class="meta_tags">'. $tag_list .'</li>';
            }

            // Comments Link
            if( comments_open() ) {
                echo '<li>';
                echo '<span class="meta-reply">';
                comments_popup_link(__('Leave a comment', 'architect'),
                                    __('One comment so far', 'architect'),
                                    __('View all % comments', 'architect')
                );
                echo '</span>';
                echo '</li>';
            }

            // Edit Link
            if( is_user_logged_in() ){
                echo '<li>';
                edit_post_link( __('Edit', 'architect'), '<span class="meta-edit">','</span>' );
                echo '</li>';
            }
        }
    }
}




