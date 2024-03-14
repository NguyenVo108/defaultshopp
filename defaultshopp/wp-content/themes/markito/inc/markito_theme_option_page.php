<?php
    /**
        * 
        * Markito Theme options Page.
        *
        * @package Markito WordPress theme
        * 
        * @since Markito 1.0.3
        * 
    */

    if ( ! defined( 'ABSPATH' ) ) {
        exit;
        // Exit If Accessed Directly.
    }

    class markito_theme_option {

        function __construct(){

            add_action( 'admin_enqueue_scripts', array($this,'admin_scripts'));
            add_action('admin_menu', array($this,'menu_tab'));

        }

        function menu_tab() {
            $menu_title = esc_html__('Markito Options', 'markito');
            add_theme_page( esc_html__( 'Markito Options', 'markito' ), $menu_title, 'edit_theme_options', 'markito_options',array($this,'tab_page'));
        }

        /**
        * Enqueue scripts for admin page only: For markito options Theme info page...
        */
        function admin_scripts( $hook ) {

            if ($hook === 'appearance_page_markito_options'  ) {

                wp_enqueue_style( 'admin-markito-started-css', get_template_directory_uri() . '/assets/css/started.css' );
        
            } 
            
        }

        function tab_constant(){
            $theme_data = wp_get_theme();
            $tab_array = array();
            $tab_array['header'] = array('theme_brand' => __('Infigo Software','markito'),
            'theme_brand_url' => esc_url($theme_data->get( 'AuthorURI' )),
            'welcome'=>sprintf(esc_html__('Welcome To %1s Theme', 'markito'), esc_html__($theme_data->get( 'Name' )), $theme_data->get( 'Version' ) ),
            'welcome_desc' => esc_html__($theme_data->get( 'Name' ).' is an eCommerce WordPress theme specially made for shopping websites.', 'markito' ),
            'v'=> 'Version '.$theme_data->get( 'Version' )
            );
            return $tab_array;
        }

        function tab_page() {
            $text_array = $this->tab_constant();
            $theme_header =$text_array['header'];
            require get_template_directory() . '/inc/tab-html.php';
        }
    
    } // class end
    $boj = new markito_theme_option(); 