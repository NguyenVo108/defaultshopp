<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage movie-cinema-blocks
 * @since movie-cinema-blocks 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function movie_cinema_blocks_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Movie_Cinema_Blocks_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Movie Cinema Blocks Pro', 'movie-cinema-blocks' ),
		'button_text'      => __( 'Upgrade Pro', 'movie-cinema-blocks' ),
		'url'              => 'https://www.wpradiant.net/blocks/cinema-wordpress-theme/',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'movie_cinema_blocks_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function movie_cinema_blocks_custom_control_scripts() {
	wp_enqueue_script( 'movie-cinema-blocks-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'movie_cinema_blocks_custom_control_scripts' );