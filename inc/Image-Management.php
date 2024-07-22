<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class Totoro_Custom_Class {

    public function __construct() {
        // Custom class initialization code here
    }

    public function run() {
        // Hook into WordPress actions and filters for custom functionality
        add_action('init', [$this, 'custom_functionality']);
        add_filter('the_content', [$this, 'add_webp_to_image_urls']);
    }

public function add_webp_to_image_urls($content) {
    // Regular expression to match image URLs ending with .jpeg, .jpg, or .png
    $pattern = '/(https?:\/\/[^\'" >]+)\.(jpeg|jpg|png)/i';
    // Replace matched URLs with .webp appended
    $replacement = '$1.$2.webp';
    $content = preg_replace($pattern, $replacement, $content);

    return $content;
}
}