<?php
/*
Plugin Name: Business Time
Plugin URI: https://github.com/code-architect
Description: A small widget for showing business time and some extra information.
Version: 1.0
Author: Code-Architect
Author URI: http://codearchitect.in/
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
?>

<?php
/**
 * Include Class
 */
include('class.business-time.php');

/**
 * Register the widget
 */
function register_business_time_widget(){
    register_widget('Business_Time');
}
add_action('widgets_init', 'register_business_time_widget');