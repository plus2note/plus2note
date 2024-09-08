<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plus2Note - Your ultimate destination for exam preparation, study notes, routine notices, exam notices, and class notes for Nepali Class 11 and 12 students. Get comprehensive notes for all subjects.">
    <meta name="keywords" content="Plus2Note, exam preparation, study notes, routine notices, exam notices, class notes, Nepali Class 11, Class 11 Notes, Class 12 Notes, Nepali Class 12, notes, subjects">
    <meta name="author" content="Pradip Chaudhary">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#0073e6">
    <meta name="application-name" content="Plus2Note">
    <meta name="msapplication-TileColor" content="#0073e6">
    <meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/ms-icon-144x144.png">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    
    <!-- Google fonts -->
   
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body <?php body_class('plus2note-theme-body'); ?>>

    <header class="plus2note-theme-header">
        <div class="plus2note-theme-container">
            <div class="plus2note-header-content">
                <!-- Logo here... -->
                    <?php if (get_theme_mod('plus2note_logo')) : ?>
                    <img src="<?php echo esc_url(get_theme_mod('plus2note_logo')); ?>" alt="<?php bloginfo('name'); ?>">
                    <?php else : ?>
                    <h1><?php bloginfo('name'); ?></h1>
                    <?php endif; ?>
                
                <!-- Navbar -->
                <nav>
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </nav>
            </div>
            
        </div>
    </header>