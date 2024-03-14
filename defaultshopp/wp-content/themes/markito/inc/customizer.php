<?php
/**
 * markito Theme Customizer
 *
 * @package markito
*/

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function markito_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'markito_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'markito_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'markito_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function markito_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function markito_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function markito_customize_preview_js() {
	wp_enqueue_script( 'markito-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'markito_customize_preview_js' );


if ( ! class_exists( 'Markito_Home_Product_Slider_Customizer' ) ) :

	/**
	   * Settings for Home Woo Product Slider 
	**/
	class Markito_Home_Product_Slider_Customizer {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'Markito_Product_Slider_customizer_options' ) );

		}

		/****
		     * Customizer options
		****/
		public function Markito_Product_Slider_customizer_options( $wp_customize ) {

			/*****
			      * Home Woo Product Slider Section 
			*****/
			$wp_customize->add_section(
				'markito_Home_Woo_product_Slider',
				array(
					'title'    => esc_html__( 'Home Product Slider ', 'markito' ),
					'priority' => 10,
					'description' => esc_html__( ' Note :-  Please Add Minimum 5 WooCommerce Products. Show For WooCommerce Products On Home Page Template. ', 'markito' ),
				)
			);

			/*****
			     * Home Product Slider Heading
			*****/
			$wp_customize->add_setting(
				'markito_Home_Product_Slider_Heading_Settings',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Home_Product_Slider_Section_Sanitize_Text_Function',

				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_Product_Slider_Heading_Settings',
					array(
						'label'           => esc_html__( 'Product Slider Heading', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_Woo_product_Slider',
						'settings'        => 'markito_Home_Product_Slider_Heading_Settings',
						'priority'        => 1,
					)
				)
			);

			// Sanitize Text Function For Home Product Slider Section
			function markito_Home_Product_Slider_Section_Sanitize_Text_Function( $text ) {
				return sanitize_text_field( $text );
			}

		}

	}

endif;
// Call Class 
new Markito_Home_Product_Slider_Customizer();