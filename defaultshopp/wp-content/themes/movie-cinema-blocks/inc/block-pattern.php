<?php
/**
 * Patterns Handler.
 *
 * @since movie-cinema-blocks 1.0
 */

namespace movie_cinema_blocks;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package movie-cinema-blocks
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {

		$categories = array(
			'movie-cinema-blocks' => array( 'label' => __( 'Movie Cinema Blocks Patterns', 'movie-cinema-blocks' ) ),
		);

		$patterns = array(
			'header',
			'banner',
			'middle-section',
			'recommended-movie-section',
			'primary-sidebar',
			'404-page',
			'search',
			'search-header',
			'footer-default'
		);

		$this->categories = apply_filters( 'movie_cinema_blocks_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'movie_cinema_blocks_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */

	private function register_categories() {

		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}

	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */

	private function register_patterns() {

		foreach ( $this->patterns as $pattern ) {

			$file = get_theme_file_path( '/patterns/' . $pattern . '.php' );

			if ( ! is_file( $file ) ) {

				continue;

			}

			register_block_pattern( 'movie-cinema-blocks/' . $pattern, require $file );
		}
	}
}

new Block_Patterns();