<?php
/**
 * Home About Customizer Options
 *
 * @package Markito WordPress theme
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
	// Exit if accessed directly.
}

if ( ! class_exists( 'Markito_Home_Page_About_Customizer' ) ) :

	/**
	   * Settings for Home About
	**/
	class Markito_Home_Page_About_Customizer {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'markito_home_about_customizer_options' ) );

		}

		/****
		     * Customizer options
		****/
		public function markito_home_about_customizer_options( $wp_customize ) {

			$wp_customize->add_section(
				'markito_Home_About',
				array(
					'title'    => esc_html__( 'Home About', 'markito' ),
					'priority' => 10,
				)
			);
			
			$wp_customize->add_setting( 'markito_enable_about', 
				array(
				 'type' => 'theme_mod',
				 'default'=>1,
				 'sanitize_callback' => 'markito_sanitize_checkbox',
			));
			
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'markito_enable_about', array(
			'type'=>'checkbox',
			'label'   => esc_html__('Enable About Section on Homepage','markito'),
			'section' => 'markito_Home_About',
			)));

			$wp_customize->add_setting(
				'markito_Home_About_Title_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_About_Title_Setting',
					array(
						'label'           => esc_html__( 'About Section Title', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_About',
						'settings'        => 'markito_Home_About_Title_Setting',
						'priority'        => 1,
					)
				)
			);

			$wp_customize->add_setting(
				'markito_Home_About_Sub_Title_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Home_About_Sub_Title_Setting',
					array(
						'label'           => esc_html__( 'About Sub Title', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_About',
						'settings'        => 'markito_Home_About_Sub_Title_Setting',
						'priority'        => 1,
					)
				)
			);

			$wp_customize->add_setting(
				'markito_About_Section_Content',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_About_Section_Content',
					array(
						'label'           => esc_html__( 'About Content', 'markito' ),
						'type'            => 'textarea',
						'section'         => 'markito_Home_About',
						'settings'        => 'markito_About_Section_Content',
						'priority'        => 1,
					)
				)
			);

			//  ============================================================
			//       Home Page Banner Section Image Upload         
			//  ============================================================
			$wp_customize->add_setting( 
				'markito_About_Image_Upload', 
				array( 
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
			)); 
					
			$wp_customize->add_control( new WP_Customize_Image_Control( 
				$wp_customize, 'markito_About_Image_Upload_Id', array(
				'label'    => ' About Section Image ',
				'priority' => 1,
				'section'  => 'markito_Home_About',
				'settings' => 'markito_About_Image_Upload',
				'button_labels' => array(
							// All These labels are optional
							'select' => __( 'Select Image', 'markito' ),
							'remove' => __( 'Remove Image', 'markito' ),
							'change' => __( 'Change Image', 'markito' )


				)
			)));

			$wp_customize->add_setting(
				'markito_About_Button_Link',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_About_Button_Link',
					array(
						'label'           => esc_html__( 'About Button Link', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_About',
						'settings'        => 'markito_About_Button_Link',
						'priority'        => 1,
					)
				)
			);
			

			// Sanitize Text Function For Home Banner
			function markito_About_Sanitize_Text_Function( $text ) {
				return sanitize_text_field( $text );
			}
			
		}
		
		function markito_sanitize_checkbox( $checked ) {
			// Boolean check.
			return ( ( isset( $checked ) && true == $checked ) ? true : false );
		}

	}

endif;
// Call Class 
new Markito_Home_Page_About_Customizer();