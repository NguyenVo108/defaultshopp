<?php
/**
 * Home Category Customizer Options
 *
 * @package Markito WordPress theme
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
	// Exit if accessed directly.
}

if ( ! class_exists( 'Markito_Category_Customizer' ) ) :

	/**
	   * Settings for Home About
	**/
	class Markito_Category_Customizer {

		public function __construct() {

			add_action( 'customize_register', array( $this, 'markito_category_customizer_options' ) );

		}

		/****
		     * Customizer options
		****/
		public function markito_category_customizer_options( $wp_customize ) {
			
			require_once get_template_directory() . '/inc/dropdown-category.php';

			$wp_customize->add_section(
				'markito_Home_Category',
				array(
					'title'    => esc_html__( 'Home Category', 'markito' ),
					'priority' => 10,
				)
			);
			
			$wp_customize->add_setting( 'markito_enable_category', 
				array(
				 'type' => 'theme_mod',
				 'default'=>1,
				 'sanitize_callback' => 'markito_sanitize_checkbox',
			));
			
			$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'markito_enable_category', array(
			'type'=>'checkbox',
			'label'   => esc_html__('Enable Category Section on Homepage','markito'),
			'section' => 'markito_Home_Category',
			)));

			$wp_customize->add_setting(
				'markito_Category_Title_Setting',
				array(
					'transport'         => 'postMessage',
					'sanitize_callback' => 'markito_Category_Sanitize_Text_Function',
				)
			);

			$wp_customize->add_control(
				new WP_Customize_Control(
					$wp_customize,
					'markito_Category_Title_Setting',
					array(
						'label'           => esc_html__( 'Category Section Title', 'markito' ),
						'type'            => 'text',
						'section'         => 'markito_Home_Category',
						'settings'        => 'markito_Category_Title_Setting',
						'priority'        => 1,
					)
				)
			);
			
			if(class_exists( 'WooCommerce' )) {
			$wp_customize->add_setting( 'markito_category_one', array(
				'default'           => 0,
				'sanitize_callback' => 'absint',
			) );

			$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'markito_category_one', array(
				'section'       => 'markito_Home_Category',
				'label'         => esc_html__( 'Product category section 1', 'markito' )
			) ) );
			}
			
			$wp_customize->add_setting( 
				'markito_Category_Image_One', 
				array( 
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
			)); 
					
			$wp_customize->add_control( new WP_Customize_Image_Control( 
				$wp_customize, 'markito_Category_Image_One', array(
				'label'    => ' Category Section Image One ',
				'priority' => 1,
				'section'  => 'markito_Home_Category',
				'settings' => 'markito_Category_Image_One',
				'button_labels' => array(
							// All These labels are optional
							'select' => __( 'Select Image', 'markito' ),
							'remove' => __( 'Remove Image', 'markito' ),
							'change' => __( 'Change Image', 'markito' )


				)
			)));
			
			if(class_exists( 'WooCommerce' )) {
			$wp_customize->add_setting( 'markito_category_two', array(
				'default'           => 0,
				'sanitize_callback' => 'absint',
			) );

			$wp_customize->add_control( new My_Dropdown_Category_Control( $wp_customize, 'markito_category_two', array(
				'section'       => 'markito_Home_Category',
				'label'         => esc_html__( 'Product category section 2', 'markito' )
			) ) );
			}
			
			$wp_customize->add_setting( 
				'markito_Category_Image_Two', 
				array( 
					'sanitize_callback' => 'markito_About_Sanitize_Text_Function',
			)); 
					
			$wp_customize->add_control( new WP_Customize_Image_Control( 
				$wp_customize, 'markito_Category_Image_Two', array(
				'label'    => ' Category Section Image Two ',
				'priority' => 1,
				'section'  => 'markito_Home_Category',
				'settings' => 'markito_Category_Image_Two',
				'button_labels' => array(
							// All These labels are optional
							'select' => __( 'Select Image', 'markito' ),
							'remove' => __( 'Remove Image', 'markito' ),
							'change' => __( 'Change Image', 'markito' )


				)
			)));

			// Sanitize Text Function For Home Banner
			function markito_Category_Sanitize_Text_Function( $text ) {
				return sanitize_text_field( $text );
			}

			function markito_sanitize_checkbox( $checked ) {
				// Boolean check.
				return ( ( isset( $checked ) && true == $checked ) ? true : false );
			}
		}

	}

endif;
// Call Class 
new Markito_Category_Customizer();