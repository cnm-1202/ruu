<?php
function ruu_enqueue_styles() {
    wp_enqueue_style(
        'ruu-custom-style',
        get_template_directory_uri() . '/css/style.css',
        array(),
        filemtime(get_template_directory() . '/css/style.css'),
        'all'
    );
}
add_action('wp_enqueue_scripts', 'ruu_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function remove_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'remove_block_library_css' );

function add_google_fonts() {
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&family=Zen+Kaku+Gothic+New:wght@300;400;500&family=Darumadrop+One&family=Mohave:ital,wght@0,300..700;1,300..700&family=Nanum+Gothic&family=Noto+Serif+Display:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'add_google_fonts');