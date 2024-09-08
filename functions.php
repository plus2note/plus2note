<?php


// Enqueue styles and scripts
function plus2note_enqueue_scripts() {
    wp_enqueue_style('plus2note-style', get_stylesheet_uri());
    wp_enqueue_script('plus2note-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'plus2note_enqueue_scripts');

// Theme supports
function plus2note_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'plus2note')
    ));
}
add_action('after_setup_theme', 'plus2note_theme_setup');

// Sidebar
function plus2note_widgets_init() {
    register_sidebar(array(
        'name' => __('Sidebar', 'plus2note'),
        'id' => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'plus2note_widgets_init');
?>
