
<?php get_header(); ?>
    	<main id="plus2note-page">
		<div class="container">
			<article class="content py-5">
					<?php
					if(have_posts()){
						while(have_posts()){
							the_post();
							get_template_part('template-parts/content', 'page');
						}
					}

				?>
			</article>
		</div>
	</main>


          <?php get_footer(); ?>
