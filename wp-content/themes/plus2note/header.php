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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class('plus2note'); ?>>
  
<main id="primary" class="site-main">
    <div id="plus2note_bg"> </div>  <!-- // background image with color -->
    <!-- Header Section  -->
    <header id="page-header">	    
        <div class="container plus2note_header">
            <h1 class="plus2note_logo">
                <?php ?>
                <a class="site-title pt-lg-4 mb-0" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
            </h1>
            <nav id="custom-menu">
            <div id="menu-toggle" class="menu-toggle">
                <span class="line"></span>
            </div>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id' => 'primary-menu',
                        'container' => false
                    ));
                ?>
            </nav>
        </div>	    
    </header>