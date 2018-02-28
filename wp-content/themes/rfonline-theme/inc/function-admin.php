<?php

/*

@package rfonline-theme
============================
        ADMIN PAGE
============================

*/




// Generate RF Online admin page
function rfonline_add_menu_page() {
                add_menu_page(
                    'RF-Online General Theme Options', 
                    'RF-Online',
                    'manage_options',
                    'rfonline_theme',
                    'rf_online_theme_create_page',
                    'dashicons-sos',
                    110
                    // get_template_directory_URI() . '/img/rfonline-custom-icon.png'
                );
                
                add_submenu_page(
                    'rfonline_theme',
                    'RF-Online General Theme Options',
                    'General',
                    'manage_options',
                    'rfonline_theme',
                    'rf_online_theme_create_page'
                );
                add_submenu_page(
                    'rfonline_theme',
                    'RF-Online Settings Options',
                    'Settings',
                    'manage_options',
                    'rfonline_theme_settings',
                    'rf_online_theme_settings_page'
                );

                // Activate custom settings
                add_action('admin_init', 'rfonline_custom_settings');
        }


/*
======================
    Ivoking Hooks
======================
*/
add_action('admin_menu', 'rfonline_add_menu_page');




// Callback functions
function rfonline_custom_settings() {
    register_setting('rfonline-settings-group', 'first_name' );
}

function rf_online_theme_create_page() {
    
    require_once( get_template_directory() . '/inc/templates/rfonline-admin.php');
}
    
function rf_online_theme_settings_page() {
    echo '<h1>Settings</h1>';
}


