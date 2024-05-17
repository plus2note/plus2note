
<?php get_header(); ?>
	    
	<div id="plus2note-post">
                        <?php
                              if(have_posts()){
                                    while(have_posts()){
                                          the_post();
                                          // the_content();
                                          get_template_part('template-parts/content', 'article');
                                    }
                              }

                        ?>
      </div>


<?php get_footer(); ?>
