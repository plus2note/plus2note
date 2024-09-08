<?php
// Add Customizer settings here

function plus2note_customize_register($wp_customize) {
    // Add a section for the theme options
    $wp_customize->add_section('plus2note_theme_options', array(
        'title'    => __('Theme Options', 'plus2note'),
        'priority' => 30,
    ));

    // Logo Upload Setting
    $wp_customize->add_setting('plus2note_logo', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Logo Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'plus2note_logo', array(
        'label'    => __('Upload Logo', 'plus2note'),
        'section'  => 'plus2note_theme_options',
        'settings' => 'plus2note_logo',
    )));

    // Background Color Setting
    $wp_customize->add_setting('plus2note_bg_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Background Color Control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'plus2note_bg_color', array(
        'label'    => __('Background Color', 'plus2note'),
        'section'  => 'colors',
        'settings' => 'plus2note_bg_color',
    )));

    // Footer Text Setting
    $wp_customize->add_setting('plus2note_footer_text', array(
        'default'           => '© 2024 Plus2Note. All rights reserved.',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    // Footer Text Control
    $wp_customize->add_control('plus2note_footer_text', array(
        'label'    => __('Footer Text', 'plus2note'),
        'section'  => 'plus2note_theme_options',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'plus2note_customize_register');

// Output custom styles based on Customizer settings
function plus2note_customizer_css() {
    $bg_color = get_theme_mod('plus2note_bg_color', '#ffffff');
    ?>
    <style type="text/css">
        body {
            background-color: <?php echo esc_attr($bg_color); ?>;
        }
    </style>
    <?php
}

add_action('wp_head', 'plus2note_customizer_css');
?>
