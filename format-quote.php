<?php
/**
 * This file is runs as the Quote post format.
 *
 * @package
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<!-- Get the featured image of the post -->
	<?php get_template_part('format','post_thumbnail'); ?>
	
	<!-- Wrap the title in a header tag -->
	<header class="post-header">
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>	
	</header>

	<!-- The content of our post -->
	<div class="quote-entry entry">
		<?php the_content(); ?>
	</div>

	<!-- Get the comments of our post type if we are in single -->
	<?php load_comment_template(); ?>
	
</article> <!-- .post -->
