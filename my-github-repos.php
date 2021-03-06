<?php 
/*
Plugin Name: My Github Repos     
Description: Widget for displaying users github repo info
Version: 1.0
Author: Adam Champagne
Auther URI: https://adamchampagne.com/
*/

// Exit if Accessed Directly
if(!defined('ABSPATH')){
    exit;
}

// Load Scripts
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-scripts.php');

// Load Class
require_once(plugin_dir_path(__FILE__) . '/includes/my-github-repos-class.php');

// Register Widget
function mgr_register_widget(){
    register_widget('WP_My_Github_Repos');
}

add_action('widgets_init', 'mgr_register_widget');


