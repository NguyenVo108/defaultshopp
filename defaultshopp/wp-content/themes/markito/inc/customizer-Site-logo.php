<?php
/**
 * Site Logo Customizer Options
 *
 * @package Markito WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
	// Exit if accessed directly.
}

if ( ! class_exists( 'Markito_site_logo_Customizer' ) ) :

	/**
	   * Settings For Markito Site Logo
	**/
	class Markito_site_logo_Customizer {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'markito_site_logo_customizer_options' ) );

		}

		/****
		     * Customizer options
		****/
		public function markito_site_logo_customizer_options( $wp_customize ) {

			/*****
			     * Markito Theme Logo Heigth
			*****/
			$wp_customize->add_setting(
				'markito_Logo_Site_Height_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Logo_Site_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Logo_Site_Height_Setting',
					array(
						'label'           => esc_html__( 'Logo Height', 'markito' ),
						'type'            => 'number',
						'section'         => 'title_tagline',
						'settings'        => 'markito_Logo_Site_Height_Setting',
					)
				)
			);

			/*****
			     * Markito Theme Logo Width 
			*****/
			$wp_customize->add_setting(
				'markito_Logo_Site_Width_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Logo_Site_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Logo_Site_Width_Setting',
					array(
						'label'           => esc_html__( 'Logo Width', 'markito' ),
						'type'            => 'number',
						'section'         => 'title_tagline',
						'settings'        => 'markito_Logo_Site_Width_Setting',
					)
				)
			);

			// Sanitize Text Function For Home Banner
			function markito_Logo_Site_Sanitize_Text_Function( $text ) {
				return sanitize_text_field( $text );
			}
		}
	}

endif;
// Call Class 
new Markito_site_logo_Customizer();