<?php
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
function add_theme_scripts(){
    //wp_enqueue_script("jquery-ui");
    wp_enqueue_script( 'jquery-ui', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_style( 'jquery-ui-css', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css', array(), '1.1', 'all');
    wp_enqueue_style( 'ui-slider-css', get_stylesheet_directory_uri() . '/assest/css/jquery-ui-slider-pips.min.css', array(), '1.1', 'all');
    wp_enqueue_script( 'ui-slider-js', get_stylesheet_directory_uri() . '/assest/js/jquery-ui-slider-pips.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/assest/js/script.js', array ( 'jquery' ), 1.1, true);
}