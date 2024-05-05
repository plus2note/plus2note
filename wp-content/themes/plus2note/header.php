<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Plus2Note - Your ultimate destination for exam preparation, study notes, routine notices, exam notices, and class notes for Nepali Class 11 and 12 students. Get comprehensive notes for all subjects.">
    <meta name="keywords" content="Plus2Note, exam preparation, study notes, routine notices, exam notices, class notes, Nepali Class 11, Nepali Class 12, notes, subjects">
    <meta name="author" content="Pradip Chaudhary">
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
  


    <header class="page-header">	    
	<div class="container plus2note_header">
		<h1 class="page-logo">
			<a class="site-title pt-lg-4 mb-0" href="index.html">plus2note</a>
		</h1>
		<nav class="navbar">
		<?php
			wp_nav_menu(array(
			'theme_location' => 'primary',
			'menu_class' => 'navbar-menu',
			));
			?>

		</nav>
	</div>
        
	    
    </header>