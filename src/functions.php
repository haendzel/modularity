<?php

function link_css_stylesheet() {
    wp_enqueue_style('style', get_bloginfo('template_directory').'/style.css');
}
add_action('wp_head', 'link_css_stylesheet');
?>