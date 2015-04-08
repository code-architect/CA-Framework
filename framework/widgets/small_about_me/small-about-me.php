<?php
/*
Plugin Name: Small About Me
Plugin URI: https://github.com/code-architect
Description: A small widget for small introduction of self, or small about me.
Version: 1.0
Author: Code-Architect
Author URI: http://codearchitect.in/
License: Small about me widget for wordpress.
Copyright (C) 2015  Code-Architect

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

class Small_About_Me extends WP_Widget {

    function __construct(){

        // Localizing our human readable strings
        add_action('init', array( $this, 'widget_textdomain'));

        parent::__construct(
            'small-about-me',
            __('Small About Me', 'small-about-me'),       // For human readable
            array(
                'classname'   => 'small-about-me',     // This class name can be used in the markup of the widget from stylesheet
                'description' => __('A small widget for small introduction of self, or small about me.', 'small-about-me')
            )
        );

        // Register Stylesheets
        add_action('admin_print_styles', array($this, 'register_admin_styles'));
        add_action('wp_enqueue_scripts', array($this, 'register_widget_styles'));

        // Register JavaScripts
        add_action('admin_enqueue_scripts', array($this, 'register_admin_scripts'));
        add_action('wp_enqueue_scripts', array($this, 'register_widget_scripts'));

    }

    /**
     * Admin View
     * @param array $instance
     * @return string|void
     */
    function form($instance){

        $instance = wp_parse_args(
            (array)$instance,
            array(
                'name'          => '',
                'bio'           => '',
                'position'      => 'above',
                'homepage-only' => ''
            )
        );

        include(plugin_dir_path(__FILE__).'/views/admin.php');
    }

    /**
     * Updating the widget
     * @param array $new_instance
     * @param array $old_instance
     * @return array
     */
    function update($new_instance, $old_instance){

        $old_instance['name'] = strip_tags(stripcslashes($new_instance['name']));
        $old_instance['bio'] = strip_tags(stripcslashes($new_instance['bio']));
        $old_instance['position'] = strip_tags(stripcslashes($new_instance['position']));
        $old_instance['homepage-only'] = $new_instance['homepage-only'];
        return $old_instance;
    }

    /**
     * Front end view
     * @param array $args
     * @param array $instance
     */
    function widget($args, $instance){

        extract($args, EXTR_SKIP);

        echo $before_widget;
        include(plugin_dir_path(__FILE__).'/views/widget.php');
        echo $after_widget;
    }

//------------------------------ Registering functions ------------------------------------------------//

    /**
     * Localizaing strings using poedit
     */
    function widget_textdomain(){
        load_plugin_textdomain( 'small-about-me', false, plugin_dir_path(__FILE__).'/lang/' );
    }


    /**
     * Registering admin stylesheet
     */
    function register_admin_styles(){
        wp_enqueue_style( 'small-about-me-admin', plugins_url( 'small_about_me/css/css/admin.css' ) );
    }


    /**
     * register widget(front-end) stylesheet
     */
    function register_widget_styles(){
        wp_enqueue_style( 'small-about-me-widget', plugins_url( 'small_about_me/css/css/widget.css' ) );
    }


    /**
     * Register admin scripts/javascript
     */
    function register_admin_scripts(){
        wp_enqueue_script( 'small-about-me-admin', plugins_url( 'small_about_me/js/dev/admin-dist.js' ) );
    }


    /**
     * Register widget(front-end) scripts/ javascript
     */
    function register_widget_scripts(){
        wp_enqueue_script( 'small-about-me-widget', plugins_url( 'small_about_me/js/dev/widget-dist.js' ) );
    }
}




// Registering widget
function register_small_about_me(){
    register_widget('Small_About_Me');
}
add_action('widgets_init', 'register_small_about_me');
















