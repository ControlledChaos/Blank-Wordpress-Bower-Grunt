<?php 
/**
	This file is runs as the standard post format.
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php get_template_part('format','post_thumbnail'); ?>

<h2><?php the_title() ?></h2>

<?php the_content(); ?>

</article