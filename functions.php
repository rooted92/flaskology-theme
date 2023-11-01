<?php

add_filter( 'show_admin_bar', '__return_false' );


function flaskology_styles() {
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'flaskology_styles' );