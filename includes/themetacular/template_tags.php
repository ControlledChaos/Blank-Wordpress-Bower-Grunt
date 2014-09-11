<?php 
/**
 * 
 * Custom template tags for this theme.
 * 
 */


if ( !function_exists( 'post_nav_links')) {
	
	function post_nav_links() {

?>
	<div class="post-navigation clear">
		<div class="left"><?php next_posts_link('&laquo; Older Entries') ?></div>
		<div class="right"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
	</div>
	

<?php
	}
}








?>