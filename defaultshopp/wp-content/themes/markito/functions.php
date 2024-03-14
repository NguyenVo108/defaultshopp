<?php
	/**
		* Markito functions and definitions
		*
		* @link https://developer.wordpress.org/themes/basics/theme-functions/
		*
		* @package Markito
	*/

	/**
	 * Initialize Theme.
	 */
	require get_template_directory() . '/inc/theme-setup.php';


	/**
	 * Theme Enqueue script And style.
	 */
	require get_template_directory() . '/inc/enqueue-script-style.php';

	/**
	 * Theme Sidebar.
	 */
	require get_template_directory() . '/inc/widgets-sidebar.php';

	/**
	 * Implement the Custom Header feature.
	 */
	require get_template_directory() . '/inc/custom-header.php';

	/**
	 * Custom template tags for this theme.
	 */
	require get_template_directory() . '/inc/template-tags.php';

	/**
	 * Functions which enhance the theme by hooking into WordPress.
	 */
	require get_template_directory() . '/inc/template-functions.php';
	
	/* customizer repeater */
	require get_template_directory() . '/customizer-repeater/functions.php';

	/**
	 * Customizer additions.
	 */
	require get_template_directory() . '/inc/customizer.php';

/**
 * Typography Options.
*/
require get_template_directory() . '/typography.php';
	/**
	 * Customizer additions For Theme Social Accouunt details.
	 */
	require get_template_directory() . '/inc/customizer-social-section.php';

	/**
	 * Customizer additions For Theme Footer Section.
	 */
	require get_template_directory() . '/inc/customizer-footer.php';

	/**
	 * Customizer additions For Theme Footer Section.
	 */
	require get_template_directory() . '/inc/customizer_404_page.php';

	/**
	 * Customizer additions For Theme Site logo.
	 */
	require get_template_directory() . '/inc/customizer-Site-logo.php';

	/**
	 * Home Banner Customizer Additions.
	 */
	require get_template_directory() . '/inc/customizer-banner.php';
	
	/**
	 * Home About Customizer Additions.
	**/
	require get_template_directory() . '/inc/customizer-about.php';
	
	/* Home Service Customizer */
	require get_template_directory() . '/inc/customizer-service.php';
	
	/* Home Category */
	require get_template_directory() . '/inc/customizer-category.php';

	/**
	 * TGM Plugin activation..
	*/
	require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

	/**
	 * Install Plugins File.
	*/
	require_once get_template_directory(). '/inc/Install-Plugins.php';

	/**
	 * Theme Navigation / Menu Call Back Function File.
	*/
	require_once get_template_directory(). '/inc/navigation-function.php';

	/**
	 * Theme Markito Option Page File.
	*/
	require_once get_template_directory(). '/inc/markito_theme_option_page.php';

	/*****
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
	*****/
	if ( is_customize_preview() ) {
		require get_template_directory() . '/starter-content/starter-content.php';
		add_theme_support( 'starter-content', markito_get_starter_content() );
	}

if ( is_admin() ) {
	require_once('core/admin/admin-themes.php');
}




/* theme style */
function markito_theme_style(){
		
		/* Web Fonts Typography Settings code start */		

        wp_enqueue_style('markito-google-fonts',esc_url(markito_scripts2()));
		
		$font_var          = '300,400,600,700,900,300italic,400italic,600italic,700italic,900italic';
        $http              = ( ! empty( $_SERVER['HTTPS'] ) ) ? "https" : "http";
        $main_heading_font = str_replace( ' ' , '+', get_theme_mod( 'main_heading_font', 'Open Sans' ) );
        $menu_font         = str_replace( ' ' , '+', get_theme_mod( 'menu_font', 'Open Sans' ) );
        $theme_title       = str_replace( ' ' , '+', get_theme_mod( 'theme_title', 'Open Sans' ) );
        $desc_font_all     = str_replace( ' ' , '+', get_theme_mod( 'desc_font_all', 'Open Sans' ) );

        wp_enqueue_style('main_heading_font', $http . '://fonts.googleapis.com/css?family=' . $main_heading_font . ':' . $font_var);	
        wp_enqueue_style('menu_font', $http . '://fonts.googleapis.com/css?family=' . $menu_font . ':' . $font_var);	
        wp_enqueue_style('theme_title', $http . '://fonts.googleapis.com/css?family=' . $theme_title . ':' . $font_var);
        wp_enqueue_style('desc_font_all', $http . '://fonts.googleapis.com/css?family=' . $desc_font_all . ':' . $font_var);
		
}
add_action( 'wp_enqueue_scripts', 'markito_theme_style' );


/* Add Typography Settings code start */	
add_action('wp_enqueue_scripts', 'markito_custom_css');
function markito_custom_css()
{
    $output = '';
	
	$output .= '.site-title a, .site-description {
		font-family: ' . get_theme_mod('main_heading_font', 'Open Sans') . '!important;
		}
		 ul.navbar-nav li>a, ul.navbar-nav .sub-menu li a {
			font-family: ' . get_theme_mod('menu_font', 'Open Sans') . '!important ;
		}
		h1, h2, h3, h4, h5, h6, span, .blog-content, .date, .blog-card a{
			font-family: ' . get_theme_mod('theme_title', 'Open Sans') . ';
		}
       
		
		 a.slider-btn, html, body, p, ul.meta-tag li, p.woocommerce-mini-cart__empty-message, table, caption, tbody, tfoot, thead, tr, th, td, input, button, select, textarea, a:-webkit-any-link, ul.detail-meta-tag li  {
			font-family: ' . get_theme_mod('desc_font_all', 'Open Sans') . ';
		}';

    
    $output     .='
    .logo img{
        height:'.esc_attr(get_theme_mod('logo_height','100')).'px;
        width:'.esc_attr(get_theme_mod('logo_width','100')).'px;
    }';
    //custom css
    $custom_css = get_theme_mod('custom_css') ; 
    if (!empty ($custom_css)) {
        $output .= get_theme_mod('custom_css') . "\n";
    }

    wp_register_style('custom-header-style', false);
    wp_enqueue_style('custom-header-style', get_template_directory_uri() . '/css/custom-header-style.css');
    wp_add_inline_style('custom-header-style', $output);
}
/* Add Typography Settings code end */




add_action( 'wp_enqueue_scripts', 'markito_scripts2' );


function markito_scripts2() {
	// Include google webfont locally Typography Settings //
	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );
	
	$font_families = array(
		'Poppins:wght@100;200;300;400;500;600;700;800;900'
		
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
		'subset' => 'latin,latin-ext',
	), 'https://fonts.googleapis.com/css2' );
	
	$contents = wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
	
	// Load the webfont.
	wp_enqueue_style(
		'googlewebfonts_local',
		$contents,
		array(),
		'1.0'
);}

/* Web Fonts Typography Settings code end */








