<?php 
/**
	This file is runs as the standard post format.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part('format','post_thumbnail'); ?>

	<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>

	<?php the_content(); ?>


	<?php load_comments_template(); ?>

</article>