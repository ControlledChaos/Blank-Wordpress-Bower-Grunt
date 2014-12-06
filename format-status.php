
<!-- status post format file	 -->


<article id="post-<?php the_ID(); ?>"  <?php post_class(); ?>>

	<?php get_template_part('format','post_thumbnail'); ?>
	

	<!-- Wrap the title etc in a header for html5 goodness -->
	<header class="post-header">
		<h1>
			<a href="<?php the_permalink() ?>">
				<?php the_title(); ?>
			</a>
		</h1>
	</header>

	
	<!-- Get the content for out post -->
	<div class="status-entry entry">
		<?php the_content(); ?>
	</div>


	<!-- Load the comments template -->
	<?php themetacular_load_comments_template(); ?>

	
</article> <!-- .post -->
