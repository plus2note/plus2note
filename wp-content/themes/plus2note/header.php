<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plus2Note - Your ultimate destination for exam preparation, study notes, routine notices, exam notices, and class notes for Nepali Class 11 and 12 students. Get comprehensive notes for all subjects.">
    <meta name="keywords" content="Plus2Note, exam preparation, study notes, routine notices, exam notices, class notes, Nepali Class 11, Nepali Class 12, notes, subjects">
    <meta name="author" content="Your Name">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0073e6">
    <meta name="application-name" content="Plus2Note">
    <meta name="msapplication-TileColor" content="#0073e6">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms-icon-144x144.png">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <?php
            the_custom_logo();
            if (is_front_page() && is_home()) :
                ?>
                <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
            <?php
            else :
                ?>
                <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
            <?php
            endif;
            $plus2note_description = get_bloginfo('description', 'display');
            if ($plus2note_description || is_customize_preview()) :
                ?>
                <p class="site-description"><?php echo $plus2note_description; ?></p>
            <?php endif; ?>
        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'plus2note'); ?></button>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
            ));
            ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
