<?php
// Enqueue the parent theme's styles
function aseel_enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'aseel_enqueue_parent_styles');
