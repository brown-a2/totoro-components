<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Totoro_Components {
    
    public function __construct() {
        // Plugin initialization code here
    }

    public function run() {
        // Hook into WordPress actions and filters
        add_action('wp_enqueue_scripts', [$this, 'enqueue_scripts']);

        // Initialize the custom class
        $this->initialize_image_management();
    }

    public function enqueue_scripts() {
        // Enqueue styles and scripts
        wp_enqueue_style('totoro-components-style', plugin_dir_url(__FILE__) . '../assets/css/style.css');
        wp_enqueue_script('totoro-components-script', plugin_dir_url(__FILE__) . '../assets/js/script.js', ['jquery'], null, true);
    }

    private function initialize_image_management() {
        $image_management_class = new Image_Management();
        $image_management_class->run();
    }
}
