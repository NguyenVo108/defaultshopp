<?php 
/**
 *
 * @package markito
 * 
 * @since 1.0.5
 * 
*/
if ( ! class_exists( 'Markito_Theme_404_Page_Section_Customizer' ) ) :

/**
   * Settings for customizer 404 Page Section 
**/
class Markito_Theme_404_Page_Section_Customizer {

    public function __construct() {

        add_action( 'customize_register', array( $this, 'Markito_404_Page_Section_customizer_options' ) );

    }

    /****
        * Customizer options
    ****/
    public function Markito_404_Page_Section_customizer_options( $wp_customize ) {

        /*****
            * Markito Theme 404 Page Customizer Section 
        *****/
        $wp_customize->add_section(
            'Markito_Theme_404_Page_Section',
            array(
                'title'    => esc_html__( '404 Page Section', 'markito' ),
                'priority' => 20,
            )
        );

        /*****
             * 404 Page Main Title
        *****/
        $wp_customize->add_setting(
            'markito_Developed_404_Page_Main_Title',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_404_Page_Section_Sanitize_Text_Function',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Developed_404_Page_Main_Title',
                array(
                    'label'           => esc_html__( '404 Page Main Title', 'markito' ),
                    'type'            => 'text',
                    'section'         => 'Markito_Theme_404_Page_Section',
                    'settings'        => 'markito_Developed_404_Page_Main_Title',
                    'priority'        => 1,
                )
            )
        );

        /*****
            * 404 Page Sub Title
        *****/
        $wp_customize->add_setting(
            'markito_Developed_404_Page_Sub_Title',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_404_Page_Section_Sanitize_Text_Function',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Developed_404_Page_Sub_Title',
                array(
                    'label'           => esc_html__( '404 Page Sub Title', 'markito' ),
                    'type'            => 'text',
                    'section'         => 'Markito_Theme_404_Page_Section',
                    'settings'        => 'markito_Developed_404_Page_Sub_Title',
                    'priority'        => 1,
                )
            )
        );

        /*****
            * Button Label
        *****/
        $wp_customize->add_setting(
            'markito_Developed_404_Page_Button_Label',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_404_Page_Section_Sanitize_Text_Function',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Developed_404_Page_Button_Label',
                array(
                    'label'           => esc_html__( 'Button Label', 'markito' ),
                    'type'            => 'text',
                    'section'         => 'Markito_Theme_404_Page_Section',
                    'settings'        => 'markito_Developed_404_Page_Button_Label',
                    'priority'        => 1,
                )
            )
        );

        /*****
            * 404 Page Description
        *****/
        $wp_customize->add_setting(
            'markito_Footer_404_Page_Description_Settings',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_404_Page_Section_Sanitize_Text_Function',
            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Footer_404_Page_Description_Settings',
                array(
                    'label'           => esc_html__( '404 Page Description', 'markito' ),
                    'type'            => 'textarea',
                    'section'         => 'Markito_Theme_404_Page_Section',
                    'settings'        => 'markito_Footer_404_Page_Description_Settings',
                    'priority'        => 1,
                )
            )
        );

        // Add Settings For 404 Page Button background
		$wp_customize->add_setting( 'Markito_404_Page_Button_background', array(
			'default' => '#f05036',
			'sanitize_callback' => 'Markito_404_Page_sanitize_color',
		));

		// Add Controls For 404 Page Button background
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'Markito_404_Page_Button_background', array(
			'label' => '404 Page Button background',
			'section' => 'Markito_Theme_404_Page_Section',
			'settings' => 'Markito_404_Page_Button_background'
		)));

		/**
		 * Color sanitization callback
		*/
		function Markito_404_Page_sanitize_color( $color ) {
			if ( empty( $color ) || is_array( $color ) ) {
				return '';
			}

			// If string does not start with 'rgba', then treat as hex.
			// sanitize the hex color and finally convert hex to rgba
			if ( false === strpos( $color, 'rgba' ) ) {
				return sanitize_hex_color( $color );
			}

			// By now we know the string is formatted as an rgba color so we need to further sanitize it.
			$color = str_replace( ' ', '', $color );
			sscanf( $color, 'rgba(%d,%d,%d,%f)', $red, $green, $blue, $alpha );

			return 'rgba('.$red.','.$green.','.$blue.','.$alpha.')';
		}

        // Sanitize Text Function For Home Product Slider Section
        function markito_404_Page_Section_Sanitize_Text_Function( $text ) {
            return sanitize_text_field( $text );
        }

    }

}
endif;
// Call Class 
new Markito_Theme_404_Page_Section_Customizer(); 