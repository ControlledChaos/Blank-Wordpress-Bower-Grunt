<?php
/**
 * The main template file. 
 * 
 * Loads all of the different post types. If post type is standard, format.php runs.
 */

?>

<?php get_header(); ?>

<main id="main">

	<?php if(have_posts()) :?> 

		<?php while(have_posts()) : the_post(); ?>

			<?php 
			/**
			 *  Will try to find a format-POST_TYPE.php file, if not, will just run format.php (ie, standard post);
			 */
			?>
			
			<!-- Get our the posts that are available -->
			<?php get_template_part( 'format', get_post_format() ); ?>

		<?php endwhile; else : ?>
		
			<!-- If there isn't any posts, load this one -->
			<?php get_template_part('format', 'none'); ?>

	<?php endif; ?>

	<?php post_nav_links(); ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
