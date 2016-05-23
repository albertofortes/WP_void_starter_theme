<?php
/*
	@package WordPress
	@subpackage THEME NAME
  @author: Alberto Fortes
  @date: 05/2016
*/

// añadir js al backoffice:
add_action( 'admin_print_scripts', 'my_admin_scripts' );
function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('my-upload', get_bloginfo('template_url') . '/lib/uploads.js', array('jquery','media-upload','thickbox'));
	wp_enqueue_script('my-upload');
}