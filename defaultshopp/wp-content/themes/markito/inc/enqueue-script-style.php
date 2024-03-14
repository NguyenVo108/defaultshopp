<?php 
/**
   * markito Theme Enqueue Scripts And Styles File.
   *
   * @package markito
   *
**/

/**
 * Enqueue scripts and styles.
 */
function markito_scripts() {
	

	wp_enqueue_style( 'bootstrap',  get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'animate',  get_template_directory_uri() . '/assets/css/animate.css' );
	wp_enqueue_style( 'fontawesome6.4.0',  get_template_directory_uri() . '/assets/fontawesome6.5.1/css/all.css' );  
	wp_enqueue_style( 'slicknav',  get_template_directory_uri() . '/assets/css/slicknav.css' );

	wp_enqueue_style( 'slick-theme',  get_template_directory_uri() . '/assets/css/slick-theme.css' );
	wp_enqueue_style( 'slick',  get_template_directory_uri() . '/assets/css/slick.css' );
	wp_enqueue_style( 'lity',  get_template_directory_uri() . '/assets/css/lity.css' );
	wp_enqueue_style('woocommerce', get_stylesheet_directory_uri()   . '/assets/css/woocommerce.css');
	/* Web Fonts */		
    wp_enqueue_style('markito-google-fonts',esc_url(markito_fonts_url()));
    wp_enqueue_style( 'markito-custom-style',  get_template_directory_uri() . '/assets/css/custom-style.css' );
	wp_enqueue_style( 'markito-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'markito-style-rtl', 'rtl', 'replace' );

	wp_enqueue_style( 'markito-responsive',  get_template_directory_uri() . '/assets/css/responsive.css' );
    
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ), _S_VERSION, true );
    wp_enqueue_script( 'jquery-slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'lity', get_template_directory_uri() . '/assets/js/lity.js',array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), _S_VERSION, true );

	wp_enqueue_script( 'markito-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), _S_VERSION, true );


	wp_enqueue_script( 'markito-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), _S_VERSION, true );
	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'markito_scripts' );

if ( ! function_exists( 'markito_fonts_url' ) ) :
    /**
     * Register Google fonts.
     *
     * Create your own markito_fonts_url() function to override in a child theme.
     *
     * @since league 1.0
     *
     * @return string Google fonts URL for the theme.
     */
    function markito_fonts_url()
    {
        $fonts_url = '';
        $fonts     = array();
        $subsets   = 'latin,latin-ext';

        if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'markito' ) )
        {
            $fonts[] = 'Poppins:wght@100;200;300;400;500;600;700;800;900';
        }
        

        if ( $fonts ) {
            $fonts_url = add_query_arg( array(
                'family' => urlencode( implode( '|', $fonts ) ),
                'subset' => urlencode( $subsets ),
            ), 'https://fonts.googleapis.com/css' );
        }
        return esc_url_raw( $fonts_url );
    }
endif;