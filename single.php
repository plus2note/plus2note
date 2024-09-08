<?php get_header(); ?>

<div class="container">
  <main>
    <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        get_template_part('template-parts/content', 'single');
      endwhile;
    endif;
    ?>
  </main>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
