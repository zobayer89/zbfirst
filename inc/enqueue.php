<?php

function zb_css_js_file_call(){
    wp_enqueue_style('zb-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.1.3', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array(), '5.1.3', true);
    wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'zb_css_js_file_call');


// Google font enqueue
function zb_add_google_fonts(){
    wp_enqueue_style('zb_google_fonts', 'https://fonts.googleapis.com/css2?family=Oswald&display=swap', false);
}
add_action( 'wp_enqueue_scripts', 'zb_add_google_fonts');