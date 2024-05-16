<?php


// Enqueue and Register stylesheets and scripts
function plus2note_enqueue_scripts() {
    // Enqueue stylesheet
    wp_enqueue_style('plus2note-style', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('plus2note-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('plus2note-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '1.0', 'all');

    // Enqueue script
    wp_enqueue_script('plus2note-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('plus2note-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('plus2note-bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('plus2note-script', get_template_directory_uri() . '/assets/js/custom.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'plus2note_enqueue_scripts');


// Register navigation menus
function plus2note_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'plus2note'),
        'footer'  => __('Footer Menu', 'plus2note'),
        'policy'  => __('Policy Menu', 'plus2note')
    ));
}
add_action('init', 'plus2note_register_menus');

// Add theme support
function plus2note_theme_support() {
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'plus2note_theme_support');



// Front Page Posts length excerpt 999
function custom_excerpt_length( $length ) {
    if ( is_front_page() ) {
        return 20; // Custom excerpt length for the front page
    } elseif ( is_single() ) {
        return 40; // Custom excerpt length for single posts
    } else {
        return 55; // Default excerpt length for other pages
    }
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
