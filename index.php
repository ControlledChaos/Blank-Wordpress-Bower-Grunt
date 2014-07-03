<?php
/**
 * The main template file. 
 * 
 * Loads all of the different post types. If post type is standard, format.php runs.
 */

?>

<?php get_header(); ?>

<?php if(have_posts()) :?> 

	<?php while(have_posts()) : the_post(); ?>

		<?php 

		/**
		 *  Will try to find a format-POST_TYPE.php file, if not, will just run format.php (ie, standard post);
		 */

		?>

		<?php get_template_part( 'format', get_post_format() ); ?>


	<?php endwhile; else : ?>

	<?php get_template_part('format', 'none'); ?>

<?php endif; ?>

<div class="navigation clear">
	<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>



<?php get_sidebar(); ?>

<?php get_footer(); ?>
