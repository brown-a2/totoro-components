<?php
/*
Plugin Name: Totoro Components
Plugin URI: http://example.com/totoro-components
Description: A plugin that provides various components for your WordPress site.
Version: 1.0
Author: Adam
Author URI: http://example.com
License: GPL2
*/

// Prevent direct access to the file
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

// Include necessary files
include_once(plugin_dir_path(__FILE__) . 'inc/Totoro-Components.php');
include_once(plugin_dir_path(__FILE__) . 'inc/Image-Management.php');

// Initialize the plugin
function totoro_components_init() {
    $plugin = new Totoro_Components();
    $plugin->run();
}

add_action('plugins_loaded', 'totoro_components_init');
