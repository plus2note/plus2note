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
    <div class="container">
        <div class="footer-content">
        <div class="footer-info">
            <h3>Plus2Note</h3>
            <p>Comprehensive study notes and resources for Class 11 and 12 students. Unlock Your Academic Potential 👋</p>
            <ul>
                <li><a href=""><img src="" alt=""></a></li>
            </ul>
        </div>
        <div class="footer-info">
            <h3>Notes</h3>
            <?php
            // Get all categories
            $categories = get_categories();
            
            // Check if there are any categories
            if ($categories) {
                echo '<ul>';
                // Loop through each category
                foreach ($categories as $category) {
                    // Generate category link
                    $category_link = get_category_link($category->term_id);
                    // Output category name with link
                    echo '<li><a href="' . esc_url($category_link) . '">' . esc_html($category->name) . '</a></li>';
                }
                echo '</ul>';
                }
            ?>

        </div>
        <div class="footer-links">
            <div class="newsletter">
                <h3>Subscribe to Newsletter</h3>
                <form action="#">
                    <input type="email" placeholder="Enter your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div> 
        </div>
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
