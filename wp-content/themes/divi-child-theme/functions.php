<?php

// Parent theme styles enqueue
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

// Enqueue SVG Support function, allowing the upload of .svg files, assuming they have the correct <xml> meta.
require get_theme_file_path() . '/includes/functions/svg-support.php';

// Remove Divi Projects post type
require get_theme_file_path() . '/includes/functions/remove-divi-projects.php';
