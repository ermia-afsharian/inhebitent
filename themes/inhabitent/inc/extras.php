<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

function my_login_logo_one() { 
	?> 
	<style> 
	#login h1 a {
	 background-image: url(<?php echo get_stylesheet_directory_uri() . '/images/logos/inhabitent-logo-tent.svg';
?>);  
	} 
	</style>
	 <?php 
	} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );




	

	function my_login_url() { 

	add_filter( 'login_headerurl', 'custom_loginlogo_url' );

		function custom_loginlogo_url($url) {

    	 return get_home_url();

} 
		} add_action( 'login_enqueue_scripts', 'my_login_url' );