<?php
/**
 * Theme Social Customizer Options
 *
 * @package Markito WordPress theme
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
	// Exit if accessed directly.
}

if ( ! class_exists( 'Markito_Theme_Social_Customizer_Options' ) ) :

	/**
	   * Settings for Theme Social Csustomizer.
	**/
	class Markito_Theme_Social_Customizer_Options {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'markito_Theme_Social_Customizer_Options_Function' ) );

		}

		/****
		     * Markito Theme Social Customizer options.
		****/
		public function markito_Theme_Social_Customizer_Options_Function( $wp_customize ) {

			/*****
			      * Markito Theme Social Section Csustomizer.
			*****/
			$wp_customize->add_section(
				'markito_theme_social_section',
				array(
					'title'    => esc_html__( 'Social Section', 'markito' ),
					'priority' => 10,
				)
			);

			/*****
			     * Mobile Number
			*****/
			$wp_customize->add_setting(
				'markito_social_Mobile_Number_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_social_Mobile_Number_Setting',
					array(
						'label'           => esc_html__( 'Mobile Number', 'markito' ),
						'type'            => 'number',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_social_Mobile_Number_Setting',
						'priority'        => 1,
					)
				)
			);

			/*****
			     * Email Address
			*****/
			$wp_customize->add_setting(
				'markito_social_Email_Address_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_social_Email_Address_Setting',
					array(
						'label'           => esc_html__( 'Email Address', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_social_Email_Address_Setting',
						'priority'        => 1,
					)
				)
			);

			/*****
			     * Facebook Account Url
			*****/
			$wp_customize->add_setting(
				'markito_social_Facebook_Account_Url_Section',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_social_Facebook_Account_Url_Section',
					array(
						'label'           => esc_html__( 'Facebook Link', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_social_Facebook_Account_Url_Section',
						'priority'        => 1,
					)
				)
			);

			/*****
			     * Google Account Link
			*****/
			$wp_customize->add_setting(
				'markito_Social_Google_Account_Link_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Social_Google_Account_Link_Setting',
					array(
						'label'           => esc_html__( 'Google Plus Link', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_Social_Google_Account_Link_Setting',
						'priority'        => 1,
					)
				)
			); 

			/*****
			     * Twitter Account Link
			*****/
			$wp_customize->add_setting(
				'markito_Social_Twitter_Account_Link_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Social_Twitter_Account_Link_Setting',
					array(
						'label'           => esc_html__( 'Twitter Link', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_Social_Twitter_Account_Link_Setting',
						'priority'        => 1,
					)
				)
			); 

			/*****
			     * Linkedin Account Link
			*****/
			$wp_customize->add_setting(
				'markito_Social_Linkedin_Account_Link_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Social_Linkedin_Account_Link_Setting',
					array(
						'label'           => esc_html__( 'Linkedin Link', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_Social_Linkedin_Account_Link_Setting',
						'priority'        => 1,
					)
				)
			); 

            /*****
			     * Pinterest Account Link
			*****/
			$wp_customize->add_setting(
				'markito_Social_Pinterest_Account_Link_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Social_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Social_Pinterest_Account_Link_Setting',
					array(
						'label'           => esc_html__( 'Pinterest Link', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_theme_social_section',
						'settings'        => 'markito_Social_Pinterest_Account_Link_Setting',
						'priority'        => 1,
					)
				)
			); 
			
			// Sanitize Text Function For Social Section
			function markito_Social_Section_Sanitize_Text_Function( $text ) {
				return sanitize_text_field( $text );
			}
		}
	}
endif;
// Call Class Here
new Markito_Theme_Social_Customizer_Options();