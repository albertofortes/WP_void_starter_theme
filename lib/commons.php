<?php
/*
	@package WordPress
	@subpackage THEME NAME
*/

/**
 * Register menus
 *
 * @see http://codex.wordpress.org/Navigation_Menus and https://developer.wordpress.org/reference/functions/wp_nav_menu/
 *
 * @param none
 * @return 
 */
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Menu cabecera' ));
}
add_action( 'init', 'register_my_menu' );


/**
 * Register sidebar
 *
 * @see https://codex.wordpress.org/Function_Reference/register_sidebar
 *
 * @param array
 * @return 
 */
register_sidebar( array(
		'name'          => __( 'Sidebar widget 1' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Este widget es para el sidebar' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="section-heading">',
		'after_title'   => '</h3>',
) );

/** añadir custom image a los post
	* https://codex.wordpress.org/Function_Reference/the_post_thumbnail
	* https://codex.wordpress.org/Function_Reference/add_theme_support
	*/
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );


/** this can live in /themes/mytheme/functions.php, or maybe as a dev plugin?
	* usage: echo get_template_name();
	*/

function get_template_name () {
	foreach ( debug_backtrace() as $called_file ) {
		foreach ( $called_file as $index ) {
			if ( !is_array($index[0]) AND strstr($index[0],'/themes/') AND !strstr($index[0],'footer.php') ) {
				$template_file = $index[0] ;
			}
		}
	}
	$template_contents = file_get_contents($template_file) ;
	$template_name = trim($template_name[1][0]);
	if ( !$template_name ) { $template_name = '(default)' ; }
	$template_file = array_pop(explode('/themes/', basename($template_file)));
	return $template_file . ' > '. $template_name ;
}

/** truncate length of excerpt
	* @param $length (int)
	*/

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
