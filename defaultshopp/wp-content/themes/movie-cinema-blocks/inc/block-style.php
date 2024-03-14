<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage movie-cinema-blocks
 * @since movie-cinema-blocks 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since movie-cinema-blocks 1.0
	 *
	 * @return void
	 */
	function movie_cinema_blocks_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'movie-cinema-blocks-border',
				'label' => esc_html__( 'Borders', 'movie-cinema-blocks' ),
			)
		);

		
	}
	add_action( 'init', 'movie_cinema_blocks_register_block_styles' );
}