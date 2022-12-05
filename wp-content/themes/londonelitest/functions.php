<?php

add_action( 'wp_enqueue_scripts', 'london_theme_enqueue_styles' , 20);
function london_theme_enqueue_styles() {
    wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_uri(),
        array( ),
        wp_get_theme()->get( 'Version' )
    );
//    wp_enqueue_script( 'gallery',
//        get_theme_file_uri() . '/assets/js/gallery.js',
//        array( ),
//        wp_get_theme()->get( 'Version' )
//    );

}


if( function_exists('acf_add_options_page') ) {

    acf_add_options_page();

}