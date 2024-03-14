<?php
/**
 * Home Banner Customizer Options
 *
 * @package Markito WordPress theme
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
	// Exit if accessed directly.
}

if ( ! class_exists( 'Markito_Home_Page_Banner_Customizer' ) ) :

	/**
	   * Settings for Home Banner
	**/
	class Markito_Home_Page_Banner_Customizer {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'markito_home_banner_customizer_options' ) );

		}

		/****
		     * Customizer options
		****/
		public function markito_home_banner_customizer_options( $wp_customize ) {

			/*****
			      * Home Page Banner Section 
			*****/
			$wp_customize->add_section(
				'markito_Home_Banner',
				array(
					'title'    => esc_html__( 'Home Banner', 'markito' ),
					'priority' => 10,
				)
			);

			/*****
			     * Home Banner Title
			*****/
			$wp_customize->add_setting(
				'markito_Home_Banner_Title_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Home_Banner_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_Banner_Title_Setting',
					array(
						'label'           => esc_html__( 'Banner Title', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_Banner',
						'settings'        => 'markito_Home_Banner_Title_Setting',
						'priority'        => 1,
					)
				)
			);

			/*****
			     * Home Banner Sub Title
			*****/
			$wp_customize->add_setting(
				'markito_Home_Banner_Sub_Title_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Home_Banner_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_Banner_Sub_Title_Setting',
					array(
						'label'           => esc_html__( 'Banner Sub Title', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_Banner',
						'settings'        => 'markito_Home_Banner_Sub_Title_Setting',
						'priority'        => 1,
					)
				)
			);

			/*****
			     * Home Banner Sub Title
			*****/
			$wp_customize->add_setting(
				'markito_Home_Page_Banner_Section_Content',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Home_Banner_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_Page_Banner_Section_Content',
					array(
						'label'           => esc_html__( 'Banner Content', 'markito' ),
						'type'            => 'textarea',
						'section'         => 'markito_Home_Banner',
						'settings'        => 'markito_Home_Page_Banner_Section_Content',
						'priority'        => 1,
					)
				)
			);

			//  ============================================================
			//       Home Page Banner Section Image Upload         
			//  ============================================================
			$wp_customize->add_setting( 
				'markito_Setting_For_Home_Banner_Section_Image_Upload', 
				array( 
					'sanitize_callback' => 'markito_Home_Banner_Section_Sanitize_Text_Function',
			)); 
					
			$wp_customize->add_control( new WP_Customize_Image_Control( 
				$wp_customize, 'markito_Home_Banner_Section_Image_Upload_Id', array(
				'label'    => ' Banner Image ',
				'priority' => 1,
				'section'  => 'markito_Home_Banner',
				'settings' => 'markito_Setting_For_Home_Banner_Section_Image_Upload',
				'button_labels' => array(
							// All These labels are optional
							'select' => __( 'Select Image', 'markito' ),
							'remove' => __( 'Remove Image', 'markito' ),
							'change' => __( 'Change Image', 'markito' )


				)
			)));

			/*****
			     * Home Banner Sub Title
			*****/
			$wp_customize->add_setting(
				'markito_Home_Banner_Button_Text_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Home_Banner_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_Banner_Button_Text_Id_Setting',
					array(
						'label'           => esc_html__( 'Banner Button Text', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_Banner',
						'settings'        => 'markito_Home_Banner_Button_Text_Setting',
						'priority'        => 1,
					)
				)
			);

			/*****
			     * Home Banner Sub Title
			*****/
			$wp_customize->add_setting(
				'markito_Home_Banner_Button_Url_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Home_Banner_Section_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_Banner_Button_Custom_Url_Path_Id_Setting',
					array(
						'label'           => esc_html__( 'Banner Button Url', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_Banner',
						'settings'        => 'markito_Home_Banner_Button_Url_Setting',
						'priority'        => 1,
					)
				)
			);			

			// Sanitize Text Function For Home Banner
			function markito_Home_Banner_Section_Sanitize_Text_Function( $text ) {
				return sanitize_text_field( $text );
			}

		}

	}

endif;
// Call Class 
new Markito_Home_Page_Banner_Customizer();