
    <?php get_header(); ?>
    	<div class="container">
	    <header class="py-5">
			<h1 class="heading"><?php the_title(); ?> </h1>
		</header>
		<article class="content px-3 py-5 p-md-5">
	    		<?php
				if(have_posts()){
					while(have_posts()){
						
						the_post();
						the_content();
					}
				}

			?>
	    </article>

	</div>
          <?php get_footer(); ?>
