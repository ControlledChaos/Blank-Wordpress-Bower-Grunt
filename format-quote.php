
<!-- quote post format file	 -->


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part('format','post_thumbnail'); ?>
	
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	
	<div class="quote-entry entry">
		<?php the_content(); ?>
	</div>

	<?php load_comment_template(); ?>
	
	
</article> <!-- .post -->
