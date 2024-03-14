<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package markito
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses markito_header_style()
 */
function markito_custom_header_setup() {
	$args = apply_filters(
		'markito_custom_header_args',array(
		'default-image'      => '',
		'default-text-color' => '000',
		'width'              => 1000,
		'height'             => 250,
		'flex-height'        => true,
		'wp-head-callback'   => 'markito_header_style',
	));
	add_theme_support( 'custom-header',$args );
}
add_action( 'after_setup_theme', 'markito_custom_header_setup' );

if ( ! function_exists( 'markito_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see markito_custom_header_setup().
	 */
	function markito_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image      = get_header_image();

		$custom_css = "";

	    if ( ! display_header_text() ) {
	    	$custom_css .= "
	            .logo h1,.logo h1:hover {
				color: rgba(241, 241, 241, 0);
				position:absolute;
				clip: rect(1px 1px 1px 1px);
				}
				.logo p {
				color: rgba(241, 241, 241, 0);
				position:absolute;
				clip: rect(1px 1px 1px 1px);
				}";
	    } else {
	    	$custom_css .= ".site-title a, .site-description {
				color: #".esc_attr( $header_text_color ).";
			}";
	    }

	    if ( has_header_image() ) { 
	    	$custom_css .= ".header-one{
	    		background-image: url(".$header_image.");
	    		background-size:cover;
			}";
	    } 

	    wp_enqueue_style(
	        'custom-header-style1',
	        get_template_directory_uri() . '/assets/css/custom-header-style.css'
	    );
	    wp_add_inline_style( 'custom-header-style1', $custom_css );	
		?>
		
	<?php
	}
endif;