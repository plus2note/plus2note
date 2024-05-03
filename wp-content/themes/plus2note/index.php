<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Plus2Note
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">
        <?php
        if (have_posts()) :

            /* Start the Loop */
            while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', get_post_type());

            endwhile;

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>
    </div><!-- .container -->
</main><!-- #main -->

<?php
get_footer();
