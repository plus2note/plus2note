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


<footer class="site-footer">
    <div class="container footer-content">
        <div class="footer-info">
            <h3>Plus2Note</h3>
            <p>Briefly introduce your website and your team. Explain your mission, vision, and goals.</p>
        </div>
        <div class="footer-info">
            <h3>Subjects</h3>
            <ul>
                <li>Nepali</li>
                <li>English</li>
                <li>Account</li>
            </ul>
        </div>
        <div class="footer-links">
        <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id'        => 'footer-menu',
                    'container'      => false,
                ));
                ?>
        </div>
        
    </div>
    
</footer>
<section id="copyright">
    <div class="container">
        <div class="copyright">
            <div class="site-info">
                    <?php printf(esc_html__('© %s Plus2Note. All rights reserved.', 'plus2note'), date('Y')); ?>
            </div>
            <div class="policy-menu">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'policy',
                        'menu_id' => 'policy-menu',
                        'container' => false,
                    ))
                ?>
            </div>
        </div>
    </div>
</section>

</main><!-- #main -->


<?php wp_footer(); ?>

</body>
</html>
