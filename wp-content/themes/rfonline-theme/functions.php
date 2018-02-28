<?php

require get_template_directory() . '/inc/function-admin.php';


// Load Internal and External CSS and JS
function rf_load_wp_resources() {
    // External CSS
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

    // Internal CSS
    wp_enqueue_style('style', get_stylesheet_uri());
    
    // Built in JS in WP
    wp_enqueue_script('jquery');

    // External JS
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array('jquery'), true);


}

add_action('wp_enqueue_scripts', 'rf_load_wp_resources');


// Adding Navigation Menus

register_nav_menus(array(
    'primary' => __('Main Menu'),
    'footer' => __('Footer Menu')
));