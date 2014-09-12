<?php 

/**
 * 
 *  Functions for the theme
 * 
 * 	@package awesome
 */


/**
 * Setup default parts of the theme (menues, post types etc)
 */
function tt_theme_setup() {

	/**
	 * Add Featured image support
	 */
	add_theme_support( 'post-thumbnails' );



	/**
	 * Add post format support link for main post types
	 */

	add_theme_support( 'post-formats',array('image','quote','video','gallery','status','link') );



	/**
	 * Define Header/Main menu area
	 */
	register_nav_menu('header_menu','The menu for the header/main menu of the website.');


	/**
	 * Define Header/Main menu area
	 */

	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

}


add_action('after_setup_theme', 'tt_theme_setup');




/**
 * 	Load all Javascipt and CSS files
 */
function tt_theme_scripts() {

	if (is_admin()) return;

	/**
	 *  Register jQuery
	 */

	wp_enqueue_script( 'jquery' );

	/**
	 *  Register and enqueue Bookstrap JS
	 */
	wp_register_script('bootstrap_js', get_template_directory_uri() . '/includes/js/sass-bootstrap.min.js', false, false , false );
	wp_enqueue_script('bootstrap_js');


	/**
	 *  Register and enqueue Custom JS file
	 */
	wp_register_script( 'custom_js', get_template_directory_uri() . '/includes/js/custom.js', false, false, true );
	wp_enqueue_script( 'custom_js' );



	/**
	 *  Register and enqueue Bookstrap CSS
	 */
	wp_register_style('bootstrap_css', get_template_directory_uri() . '/includes/stylesheets/bootstrap.min.css');
	wp_enqueue_style('bootstrap_css');



	/**
	 *  Register and enqueue Custrom CSS
	 */
	wp_register_style('wp_default_stylesheet', get_stylesheet_uri() );
	wp_enqueue_style('wp_default_stylesheet');

}


add_action('wp_enqueue_scripts','tt_theme_scripts');





/**
 * Load the comments template if the page is single
 */

function load_comments_template() {

	if ( is_single() )	 {

		comments_template();
	}

}




/**
* 	Include all of the custom functionality
*/

include('includes/themetacular/post_format_meta_boxes.php');
include('includes/themetacular/custom_post_types.php');
include('includes/themetacular/recent_portfolio_widget.php');
include('includes/themetacular/shortcodes.php');
include('includes/themetacular/template_tags.php');




/* ******************************************
	Silly 404 Excuse
	*********************************************/

	function exclamation() {

		$excuse_array = ['By the hammer of Thor!','Well bake my potatoes!','By Jango!','Twist my nipple nuts and send me to Alaska'];
		$array_size = count($excuse_array) -1;
		$random_number = rand(0,$array_size);

		echo $excuse_array[$random_number];
	}

	function exclamation_descrtiption() {

		$excuse_array = ['By the hammer of Thor!','Well bake my potatoes!','By Jango!','Twist my nipple nuts and send me to Alaska'];
		$array_size = count($excuse_array) -1;
		$random_number = rand(0,$array_size);

		echo $excuse_array[$random_number];
	}








	?>