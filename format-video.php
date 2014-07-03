
<!-- video post format file	 -->


<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>
	
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	
	<div class="video-entry entry">
		<?php the_content(); ?>
	</div>
	
	
</article> <!-- .post -->
