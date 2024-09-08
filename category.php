<?php get_header(); ?>

<div class="container">
  <main>
    <h1>Category: <?php single_cat_title(); ?></h1>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', get_post_format());
      endwhile;

      the_posts_pagination();
    else :
      echo '<p>No posts found</p>';
    endif;
    ?>
  </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
