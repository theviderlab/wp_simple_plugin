<?php
/*
Plugin Name: WP Simple Plugin
Description: A simple WordPress plugin with basic structure (PHP, CSS, JS).
Version: 1.0
Author: ViderLab
*/

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit;
}

// Function to enqueue CSS and JS
function wp_simple_plugin_enqueue_assets() {
    // Enqueue CSS file
    wp_enqueue_style('wp-simple-plugin-css', plugins_url('/style.css', __FILE__));
    
    // Enqueue JS file
    wp_enqueue_script('wp-simple-plugin-js', plugins_url('/script.js', __FILE__), array('jquery'), null, true);
}

// Hook to load the scripts in the front-end
add_action('wp_enqueue_scripts', 'wp_simple_plugin_enqueue_assets');