
<!-- link post format file	 -->


<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

	<?php get_template_part('format','post_thumbnail'); ?>
	
	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	
	<div class="link-entry entry">
		<?php the_content(); ?>
	</div>
	
	<?php load_comment_template(); ?>

	
</article> <!-- .post -->
