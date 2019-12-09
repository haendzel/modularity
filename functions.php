<?php

function modularity_files() {
    wp_enqueue_style('modularity_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'modularity_files');
