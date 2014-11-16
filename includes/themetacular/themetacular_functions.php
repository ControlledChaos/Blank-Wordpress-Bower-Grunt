<?php 
/**
 * 
 * This file holds custom functions for changing the output of tags. No output for these tags unless echoed.
 * 
 * @package awesome
 * 
*/


/**
 *  Change the output of wordpress menu i.e
 * 	remove the ul and li tags and replace with simple
 * 	HTML 5 nav and a tags
 */
if ( !function_exists('themetacular_nav_menu')) {

	function themetacular_nav_menu( $menu, $allowed_tags ) {


		$args = array(

			'theme_location' => $menu,
			'container'       => 'nav',
			'container_id' => 'navigation',
			'echo'            => false,
			'items_wrap'      => '%3$s',
			'depth'           => 0
		);


		echo strip_tags( wp_nav_menu( $args ), $allowed_tags);


	}
}