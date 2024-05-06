<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Plus2Note
 */
?>


    <footer id="colophon" class="site-footer footer text-center py-4 theme-bg-dark" role="contentinfo">
        <div class="container">
            <nav class="footer-navigation" role="navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                ));
                ?>
            </nav><!-- .footer-navigation -->

            <div class="site-info">
                <?php printf(esc_html__('© %s Plus2Note. All rights reserved.', 'plus2note'), date('Y')); ?>
            </div><!-- .site-info -->
        </div><!-- .container -->
    </footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
