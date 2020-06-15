<?php 

function porto_design_resources(){
    wp_enqueue_script('porto_type-animate_js', get_theme_file_uri('/assets/js/typed.min.js'), NULL, '0.3', true);
    wp_enqueue_script('porto_main_js', get_theme_file_uri('/assets/js/main.js'), NULL, '0.4', true);
    wp_enqueue_style('porto_main_styles', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('porto_fontawesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css');
    wp_enqueue_style('porto_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'porto_design_resources');
function porto_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'porto_features');