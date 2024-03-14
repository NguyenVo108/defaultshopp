<?php 
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function markito_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'markito_content_width', 640 );
}
add_action( 'after_setup_theme', 'markito_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function markito_widgets_init() {
    
    /* Blog / Post Page Sidebar */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'markito' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'markito' ),
			'before_widget' => '<section id="%1$s" class="widget sidebar-Categories %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	/* Footer Widget Sidebar One */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Fooetr Sidebar First', 'markito' ),
			'id'            => 'footer-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'markito' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	/* Footer Widget Sidebar Two */
	register_sidebar(
		array(
			'name'          => esc_html__( 'Fooetr Sidebar Two', 'markito' ),
			'id'            => 'footer-sidebar-two',
			'description'   => esc_html__( 'Add widgets here.', 'markito' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'markito_widgets_init' );