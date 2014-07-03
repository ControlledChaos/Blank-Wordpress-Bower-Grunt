<?php 
/**
 * This file will hold the post thumnbnail information and use it in an include rather than copy and paste into multuple themes.
 */

?>

	<!-- Grab the featured image -->
	<?php if ( '' != get_the_post_thumbnail() ) { ?>
		<a class="featured-image" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'large-image' ); ?></a>
	<?php } ?>