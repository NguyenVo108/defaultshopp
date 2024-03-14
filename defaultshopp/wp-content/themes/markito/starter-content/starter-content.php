<?php
/**
 * Markito Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Markito
 * @subpackage Markito
 * @since Markito

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `markito_starter_content` filter before returning.
 *
 * @since Markito
 *
 * @return array A filtered array of args for the starter_content.
*/
function markito_get_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'home' => require get_template_directory() . '/starter-content/home.php',
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "menu-1" location.
			'menu-1' => array(
				'name'  => esc_html__( 'menu-1', 'markito' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),

		'theme_mods'  => array(
			'custom_logo'                              => '{{featured-image-logo}}',
			'blogdescription'                          => '',
			'blogname'                                 => '',
			'blogname'                                 => '',

		),

		'attachments' => array(
			'featured-image-logo' => array(
				'post_title'   => 'Featured Logo',
				'post_content' => 'Attachment Description',
				'post_excerpt' => 'Attachment Caption',
				'file'         => '/starter-content/img/logo.png',
			),
		),

		'widgets'     => array(
			// Place one core-defined widgets in the first footer widget area.
			'footer-sidebar' => array(
				'text_about',
				'search',
			),
			// Place one core-defined widgets in the second footer widget area.
			'footer-sidebar-two' => array(
				'text_business_info',
			),
		),

	);

	/**
	 * Filters the array of starter content.
	 *
	 * @since markito
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'markito_starter_content', $starter_content );
}