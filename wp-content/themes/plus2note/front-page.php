
<?php
/**
 * Template Name: Front Page
 * Description: A custom template for the front page of "plus2note" theme.
 */

get_header(); ?>


<!-- Hero Section -->
<section id="hero">
        <div class="hero-content">
            <h1>Create Effective Notes </br>with Plus<span>2</span>Note</h1>
            <p>omprehensive study notes and resources for Class 11 and 12 students. Unlock Your Academic Potential 👋</p>
            <a href="#" class="hero_btn">Explore Note</a>
            
            </div>
        </div>
        <div class="hero-sep">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path fill="#FFF" d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path>
            </svg>
        </div>
</section>

<section id="plus2note-video">
    <div class="container">
        <div class="plus2note-youtube-videos">

        </div>
    </div>
</section>

        <section class="latest-posts-section">
            <div class="container">
                <h2 class="title">Latest Notes</h2>
                <div class="latest-posts">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3, // Number of posts to display initially
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                            ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('latest-post'); ?>>
                                <header class="entry-header">
                                  

                                    <?php if ( has_post_thumbnail() ) {  ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                                <?php the_post_thumbnail('thumbnail'); ?>
                                            </a>
                                        </div><!-- .post-thumbnail -->
                                        <?php
                                    } else { ?>
                                        <div class="post-thumbnail">
                                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <img width="150" height="127" src="<?php bloginfo('template_directory'); ?>/assets/images/default-image.png" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" decoding="async" alt="<?php the_title(); ?>">
                                            </a>
                                        </div><!-- .post-thumbnail -->
                                      
                                    <?php } ?>

                                    <h2 class="entry-title">
                                        <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                    </h2>

                                    <div class="entry-meta">
                                        <span class="posted-on">
                                            <?php echo get_the_date(); ?>
                                        </span>
                                    </div><!-- .entry-meta -->
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                    <?php the_excerpt(); ?>
                                </div><!-- .entry-content -->

                                <div class="entry-footer">
                                    <a href="<?php the_permalink(); ?>" class="read-more" title="<?php the_title_attribute(); ?>">
                                        <?php esc_html_e('Read More', 'your-text-domain'); ?>
                                    </a>
                                </div><!-- .entry-footer -->
                            </article><!-- #post-<?php the_ID(); ?> -->
                            <?php
                        endwhile;

                        // Display "Load More" button
                        // 

                        wp_reset_postdata();
                    else :
                        echo 'No posts found';
                    endif;
                    ?>
                </div><!-- .latest-posts -->
            </div><!-- .container -->
        </section><!-- .latest-posts-section -->
   


<?php get_footer(); ?>
