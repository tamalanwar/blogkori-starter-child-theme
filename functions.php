<?php

// Linking to the BlogKori stylesheet
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css' );
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
 
}






