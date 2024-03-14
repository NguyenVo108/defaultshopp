<?php 
if ( ! class_exists( 'Markito_Theme_Footer_Section_Customizer' ) ) :

/**
   * Settings for customizer Footer Section 
**/
class Markito_Theme_Footer_Section_Customizer {

    public function __construct() {

        add_action( 'customize_register', array( $this, 'Markito_Footer_Section_customizer_options' ) );

    }

    /****
         * Customizer options
    ****/
    public function Markito_Footer_Section_customizer_options( $wp_customize ) {

        /*****
              * Markito Theme Footer Customizer Section 
        *****/
        $wp_customize->add_section(
            'Markito_Theme_Footer_Section',
            array(
                'title'    => esc_html__( 'Footer Section', 'markito' ),
                'priority' => 20,
            )
        );

        /*****
             * Footer Developed By Text
        *****/
        $wp_customize->add_setting(
            'markito_Developed_By_Text_Settings',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_Footer_Section_Sanitize_Text_Function',

            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Developed_By_Text_Settings',
                array(
                    'label'           => esc_html__( 'Footer Developed By Text', 'markito' ),
                    'type'            => 'text',
                    'section'         => 'Markito_Theme_Footer_Section',
                    'settings'        => 'markito_Developed_By_Text_Settings',
                    'priority'        => 1,
                )
            )
        );


        /*****
             * Footer developed by Link Text
        *****/
        $wp_customize->add_setting(
            'markito_Footer_developed_by_Link_Text_Settings',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_Footer_Section_Sanitize_Text_Function',

            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Footer_developed_by_Link_Text_Settings',
                array(
                    'label'           => esc_html__( 'Footer developed by Link Text', 'markito' ),
                    'type'            => 'text',
                    'section'         => 'Markito_Theme_Footer_Section',
                    'settings'        => 'markito_Footer_developed_by_Link_Text_Settings',
                    'priority'        => 1,
                )
            )
        );

        /*****
             * Footer developed by link
        *****/
        $wp_customize->add_setting(
            'markito_Footer_developed_by_Link_Settings',
            array(
                'transport'         => 'postMessage',
                'sanitize_callback' => 'markito_Footer_Section_Sanitize_Text_Function',

            )
        );

        $wp_customize->add_control(
            new WP_Customize_Control(
                $wp_customize,
                'markito_Footer_developed_by_Link_Settings',
                array(
                    'label'           => esc_html__( 'Footer Developed by link', 'markito' ),
                    'type'            => 'text',
                    'section'         => 'Markito_Theme_Footer_Section',
                    'settings'        => 'markito_Footer_developed_by_Link_Settings',
                    'priority'        => 1,
                )
            )
        );

        // Sanitize Text Function For Home Product Slider Section
        function markito_Footer_Section_Sanitize_Text_Function( $text ) {
            return sanitize_text_field( $text );
        }

    }

}
endif;
// Call Class 
new Markito_Theme_Footer_Section_Customizer(); 