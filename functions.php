<?php



function plus2note_setup() {
    // Theme support for various features
    add_theme_support( 'title-tag' );
    add_theme_support('custom-logo');
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header' );
    add_theme_support( 'custom-background' );
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register a primary menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'plus2note' ),
    ) );
}
add_action( 'after_setup_theme', 'plus2note_setup' );

function plus2note_scripts() {
    // Enqueue styles and scripts
    wp_enqueue_style( 'plus2note-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'plus2note_scripts' );

