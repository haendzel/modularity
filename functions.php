<?php

function modularity_files() {
    wp_enqueue_script('main-modularity-js', get_theme_file_uri('/js/main.min.js'), NULL, microtime(), true);
    wp_enqueue_style('modularity_main_styles', get_stylesheet_uri(), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'modularity_files');

function modularity_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'modularity_features');

function modularity_post_types() {
    register_post_type('event', array(
    'support' => array('title', 'editor'),
    'public' => true, 
    'labels' => array(
        'name' => 'Landing Pages',
        'add_new_item' => 'Add New Page',
        'edit_item' => 'Edit Page',
        'all_items' => 'All Pages',
        'singular_name' => 'Land Page'
    ),
    'menu_icon' => 'dashicons-welcome-view-site'
    ));
}
    add_action('init', 'modularity_post_types');
?>