<?php

add_action( 'wp_enqueue_scripts', 'london_theme_enqueue_styles' , 20);
function london_theme_enqueue_styles() {
    wp_dequeue_style( 'twenty-twenty-one-style' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_uri(),
        array( ),
        wp_get_theme()->get( 'Version' )
    );

}


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}

/* Custom Post Type Start */
function create_posttype() {
    $supports = array(
        'title',
        'editor',
        'author',
        'thumbnail',
        'excerpt',
        'custom-fields',
        'revisions',
    );

    $labels = array(
        'name' => _x('Services', 'plural'),
        'singular_name' => _x('Service', 'singular'),
        'menu_name' => _x('Services', 'admin menu'),
        'name_admin_bar' => _x('Services', 'admin bar'),
        'add_new' => _x('Add New', 'add new'),
        'add_new_item' => __('Add New Service'),
        'new_item' => __('New Service'),
        'edit_item' => __('Edit Service'),
        'view_item' => __('View Service'),
        'all_items' => __('All Services'),
        'search_items' => __('Search Service'),
        'not_found' => __('No services found.'),
    );

    $args = array(
        'supports' => $supports,
        'labels' => $labels,
        'public' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'hierarchical' => false,
    );

    register_post_type('service', $args);

}

add_action( 'init', 'create_posttype' );
/* Custom Post Type End */

function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
}


//add_action( 'init', 'register_acf_blocks' );
//function register_acf_blocks() {
//    register_block_type( __DIR__ . '/blocks/services' );
//}

function _s_acf_init() {
    $supports = array(
        'align'  => array( 'wide', 'full' ),
        'anchor' => true,
    );

    acf_register_block_type(
        array(
            'name'            => 'wds-services',
            'title'           => esc_html__( 'Services', '_s' ),
            'description'     => esc_html__( 'A custom set of service items.', '_s' ),
            'category'        => 'wds-blocks',
            'keywords'        => array( 'services', 'wds' ),
            'mode'            => 'preview',
            'align'           => 'wide',
            'render_template' => 'template-parts/blocks/services/services.php',
            'supports'        => $supports,
        )

    );

}


add_action( 'acf/init', '_s_acf_init' );