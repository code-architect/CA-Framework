<?php
/**
 *
 */

class Business_Time extends WP_Widget{

    // Basic Info construct
    function __construct(){

        parent::__construct(
            'widget-business-time',
            __('Business Time', 'architect'),
            array(
                'classname'     =>  'widget-business-time',
                'description'   =>  __('A small widget for showing business time', 'architect')
            )
        );
    }



    // Admin view
    public function form($instance){
        // default widget settings
        $instance = wp_parse_args(
            (array) $instance,
            array(
            'title'                     => __('Business Hours','architect'),
            'hour_description'          => '',
            'hours_monday_to_friday'    => '9am TO 6pm',
            'hours_saturday'            => '',
            'hours_sunday'              => 'Closed',
            'on_homepage'               => ''
        )
    );

    include(plugin_dir_path(__FILE__).'/views/admin.php');
    }


    // Updating the widget
    function update($new_instance, $old_instance){
        $old_instance['title'] = strip_tags(stripcslashes($new_instance['title']));
        $old_instance['hour_description'] = strip_tags(stripcslashes($new_instance['hour_description']));
        $old_instance['hours_monday_to_friday'] = strip_tags(stripcslashes($new_instance['hours_monday_to_friday']));
        $old_instance['hours_saturday'] = strip_tags(stripcslashes($new_instance['hours_saturday']));
        $old_instance['hours_sunday'] = strip_tags(stripcslashes($new_instance['hours_sunday']));
        $old_instance['on_homepage'] = $new_instance['on_homepage'];

        return $old_instance;
    }


    // Front end view
    function widget($args, $instance){

        extract($args, EXTR_SKIP);

        echo $before_widget;
        include(plugin_dir_path(__FILE__).'/views/widget.php');
        echo $after_widget;
    }
}