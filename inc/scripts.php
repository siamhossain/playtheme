<?php

//enqueue script
add_action( 'wp_enqueue_scripts', 'play_enqueue_scripts' );
function play_enqueue_scripts() {
    // Styles
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('custom_style', get_template_directory_uri() . '/assets/css/custom-style.css');
    wp_enqueue_style('google_font_style', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500&display=swap');
    
    // Scripts
    wp_enqueue_script('bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.min.js');
    
}