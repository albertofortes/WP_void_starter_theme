<?php
/*
	@package WordPress
	@subpackage THEME NAME
	* Custom theme options
*/

/**
 * Custom logo
 * https://codex.wordpress.org/Class_Reference/WP_Customize_Image_Control
 */
function custom_theme_options( $wp_customize ) {
    $wp_customize->add_setting( 'site_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'site_logo', array(
        'label'    => __( 'Subir Logo'),
        'section'  => 'title_tagline',
        'settings' => 'site_logo',
    ) ) );
}
add_action( 'customize_register', 'custom_theme_options' );
