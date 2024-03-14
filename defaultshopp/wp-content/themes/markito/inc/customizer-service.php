<?php
/**
 * Home Service Customizer Options
 *
 * @package Markito WordPress theme
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
	// Exit if accessed directly.
}

if ( ! class_exists( 'Markito_Home_Page_Service_Customizer' ) ) :

	/**
	   * Settings for Home Service
	**/
	class Markito_Home_Page_Service_Customizer {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'markito_home_service_customizer_options' ) );

		}

		/****
		     * Customizer options
		****/
		public function markito_home_service_customizer_options( $wp_customize ) {

			/*****
			      * Home Page Banner Section 
			*****/
			$wp_customize->add_section(
				'markito_Home_Service',
				array(
					'title'    => esc_html__( 'Home Service', 'markito' ),
					'priority' => 10,
				)
			);
			
			$wp_customize->add_setting( 'markito_enable_service', 
				array(
				 'type' => 'theme_mod',
				 'default'=>1,
				 'sanitize_callback' => 'markito_sanitize_checkbox',
			));
			
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'markito_enable_service', array(
			'type'=>'checkbox',
			'label'   => esc_html__('Enable Service Section on Homepage','markito'),
			'section' => 'markito_Home_Service',
			)));

			$wp_customize->add_setting( 'markito_service_repeater', 
				array(
				'default' => json_encode( array(
				array(
					"icon_value" => "fas fa-truck" ,
					"title" => "World Delivery", 
					"text" => "Available in most metros on selected in-stock products" ,
					"link" => "#", 
					"id" => "customizer_repeater_56d7ea7f40f56" ),
					array(
					"icon_value" => "fas fa-comments" ,
					"title" => "24/7 Support", 
					"text" => "Have a question? Call a Specialist or chat online for help" ,
					"link" => "#", 
					"id" => "customizer_repeater_56d7ea7f40f57" ),
					array(
					"icon_value" => "fas fa-money-check" ,
					"title" => "Secure Payment", 
					"text" => "Get 3% Daily Cash with special financing offers from us" ,
					"link" => "#", 
					"id" => "customizer_repeater_56d7ea7f40f58" ),
					) ),
				 'sanitize_callback' => 'customizer_repeater_sanitize'
			));
			
			$wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'markito_service_repeater', array(
			'label'   => esc_html__('Add Service','markito'),
			'section' => 'markito_Home_Service',
			'priority' => 1,
			'customizer_repeater_icon_control' => true,
			'customizer_repeater_title_control' => true,
			'customizer_repeater_text_control' => true,
			'customizer_repeater_link_control' => true
			) ) );

		}
		
		function markito_sanitize_checkbox( $checked ) {
			// Boolean check.
			return ( ( isset( $checked ) && true == $checked ) ? true : false );
		}

	}

endif;
// Call Class 
new Markito_Home_Page_Service_Customizer();