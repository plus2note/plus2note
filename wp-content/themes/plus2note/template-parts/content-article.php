<article class="content px-3 py-5">
	<div class="container">
		<header class="content-header">
			<h1 class="post-title mb-4"><?php the_title(); ?></h1>
			<div class="meta mb-3">
				<span class="date"> Published <?php the_date(); ?>  </span>
				<?php 
					the_tags('<span class="tag"> <i class="fa fa-tag px-1"></i>', '</span> <span class="tag"> <i class="fa fa-tag px-1"></i>', "</span>");
				?>
				
				<span class="comment ml-4"><a href="#comments"><i class='fa fa-comment'></i> <?php comments_number(); ?> </a></span></div>
		</header>
		<?php the_content(); ?>
		<?php comments_template(); ?>
	</div>
</article>