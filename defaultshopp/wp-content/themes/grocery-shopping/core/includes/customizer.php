<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'grocery_shopping_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'grocery-shopping' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'grocery-shopping' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
		'partial_refresh'    => [
		'grocery_shopping_display_header_title' => [
			'selector'        => '.logo a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'grocery-shopping' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
		'partial_refresh'    => [
		'grocery_shopping_display_header_text' => [
			'selector'        => '.logo-content span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

		// FONT STYLE TYPOGRAPHY

		Kirki::add_panel( 'grocery_shopping_panel_id', array(
				'priority'    => 10,
				'title'       => esc_html__( 'Typography', 'grocery-shopping' ),
		) );

		Kirki::add_section( 'grocery_shopping_font_style_section', array(
			'title'      => esc_attr__( 'Typography Option',  'grocery-shopping' ),
			'priority'   => 2,
			'capability' => 'edit_theme_options',
		) );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'custom',
			'settings'    => 'grocery_shopping_all_headings_typography',
			'section'     => 'grocery_shopping_font_style_section',
				'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'grocery-shopping' ) . '</h3>',
			'priority'    => 10,
		] );

		Kirki::add_field( 'global', array(
			'type'        => 'typography',
			'settings'    => 'grocery_shopping_all_headings_typography',
			'label'       => esc_attr__( 'Heading Typography',  'grocery-shopping' ),
			'description' => esc_attr__( 'Select the typography options for your heading.',  'grocery-shopping' ),
			'section'     => 'grocery_shopping_font_style_section',
			'priority'    => 10,
			'default'     => array(
				'font-family'    => '',
				'variant'        => '',
			),
			'output' => array(
				array(
					'element' => array( 'h1','h2','h3','h4','h5','h6', ),
				),
			),
		) );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'custom',
			'settings'    => 'grocery_shopping_body_content_typography',
			'section'     => 'grocery_shopping_font_style_section',
				'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'grocery-shopping' ) . '</h3>',
			'priority'    => 10,
		] );

		Kirki::add_field( 'global', array(
			'type'        => 'typography',
			'settings'    => 'grocery_shopping_body_content_typography',
			'label'       => esc_attr__( 'Content Typography',  'grocery-shopping' ),
			'description' => esc_attr__( 'Select the typography options for your content.',  'grocery-shopping' ),
			'section'     => 'grocery_shopping_font_style_section',
			'priority'    => 10,
			'default'     => array(
				'font-family'    => '',
				'variant'        => '',
			),
			'output' => array(
				array(
					'element' => array( 'body', ),
				),
			),
		) );

	// PANEL

	Kirki::add_panel( 'grocery_shopping_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'grocery-shopping' ),
	) );

	// Additional Settings

	Kirki::add_section( 'grocery_shopping_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'grocery-shopping' ),
	    'description'    => esc_html__( 'Scroll To Top', 'grocery-shopping' ),
	    'panel'          => 'grocery_shopping_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_shopping_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default'     => '1',
		'priority'    => 10,
		'partial_refresh'    => [
		'grocery_shopping_scroll_enable_setting' => [
			'selector'        => '.scroll-up a',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'grocery_shopping_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'grocery-shopping' ),
			'Center' => esc_html__( 'Center', 'grocery-shopping' ),
			'Right'  => esc_html__( 'Right', 'grocery-shopping' ),
		],
	]
	);

	new \Kirki\Field\Select([
		'settings'    => 'menu_text_transform_grocery_shopping',
		'label'       => esc_html__( 'Menus Text Transform', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'grocery-shopping' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'grocery-shopping' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'grocery-shopping' ),

		],
	]);

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'None' => __('None','grocery-shopping'),
            'Zoominn' => __('Zoom Inn','grocery-shopping'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'grocery_shopping_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );


	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_shopping_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','grocery-shopping'),
            'Right Sidebar' => __('Right Sidebar','grocery-shopping'),
            'One Column' => __('One Column','grocery-shopping')
		],
	] );

	if ( class_exists("woocommerce")){

	// Woocommerce Settings

	Kirki::add_section( 'grocery_shopping_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'grocery-shopping' ),
		'description'    => esc_html__( 'Shop Page', 'grocery-shopping' ),
		'panel'          => 'grocery_shopping_panel_id',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_shopping_shop_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_shopping_product_sidebar',
		'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_shopping_related_product_setting',
		'label'       => esc_html__( 'Here you can enable or disable your related products.', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_woocommerce_settings',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Number(
	[
		'settings' => 'grocery_shopping_per_columns',
		'label'    => esc_html__( 'Product Per Row', 'grocery-shopping' ),
		'section'  => 'grocery_shopping_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'grocery_shopping_product_per_page',
		'label'    => esc_html__( 'Product Per Page', 'grocery-shopping' ),
		'section'  => 'grocery_shopping_woocommerce_settings',
		'default'  => 9,
		'choices'  => [
			'min'  => 1,
			'max'  => 15,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number_per_row',
		'label'    => esc_html__( 'Related Product Per Column', 'grocery-shopping' ),
		'section'  => 'grocery_shopping_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 4,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Number(
	[
		'settings' => 'custom_related_products_number',
		'label'    => esc_html__( 'Related Product Per Page', 'grocery-shopping' ),
		'section'  => 'grocery_shopping_woocommerce_settings',
		'default'  => 3,
		'choices'  => [
			'min'  => 1,
			'max'  => 10,
			'step' => 1,
		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_shop_page_layout',
		'label'       => esc_html__( 'Shop Page Layout Setting', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','grocery-shopping'),
            'Right Sidebar' => __('Right Sidebar','grocery-shopping')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_product_page_layout',
		'label'       => esc_html__( 'Product Page Layout Setting', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_woocommerce_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','grocery-shopping'),
            'Right Sidebar' => __('Right Sidebar','grocery-shopping')
		],
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'grocery_shopping_woocommerce_pagination_position',
		'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_woocommerce_settings',
		'default'     => 'Center',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'grocery-shopping' ),
			'Center' => esc_html__( 'Center', 'grocery-shopping' ),
			'Right'  => esc_html__( 'Right', 'grocery-shopping' ),
		],
	]
	);
}

	// POST SECTION

	Kirki::add_section( 'grocery_shopping_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'grocery-shopping' ),
	    'description'    => esc_html__( 'Here you can get different post settings', 'grocery-shopping' ),
	    'panel'          => 'grocery_shopping_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_post_heading',
		'section'     => 'grocery_shopping_section_post',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Post Settings.', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
		'partial_refresh'    => [
		'grocery_shopping_enable_post_heading' => [
			'selector'        => 'h3.post-title',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_blog_admin_enable',
		'label'       => esc_html__( 'Post Author Enable / Disable Button', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_blog_comment_enable',
		'label'       => esc_html__( 'Post Comment Enable / Disable Button', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'grocery_shopping_post_excerpt_number',
		'label'       => esc_html__( 'Post Content Range', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default'     => 30,
		'choices'     => [
			'min'  => 0,
			'max'  => 50,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_shopping_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','grocery-shopping'),
            'Right Sidebar' => __('Right Sidebar','grocery-shopping')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','grocery-shopping'),
            'Right Sidebar' => __('Right Sidebar','grocery-shopping')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','grocery-shopping'),
            'Right Sidebar' => __('Right Sidebar','grocery-shopping')
		],
	] );

	Kirki::add_field( 'grocery_shopping_config', [
		'type'        => 'select',
		'settings'    => 'grocery_shopping_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'grocery-shopping' ),
				'2' => __( '2 Column', 'grocery-shopping' ),
				'3' => __( '3 Column', 'grocery-shopping' ),
				'4' => __( '4 Column', 'grocery-shopping' ),
			],
	] );


	// HEADER SECTION

	Kirki::add_section( 'grocery_shopping_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'grocery-shopping' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'grocery-shopping' ),
	    'panel'          => 'grocery_shopping_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_discount_heading',
		'section'     => 'grocery_shopping_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Discount', 'grocery-shopping' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_shopping_header_discount',
		'section'  => 'grocery_shopping_section_header',
		'default'  => '',
		'partial_refresh'    => [
		'grocery_shopping_header_discount' => [
			'selector'        => '.topheader p',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_location_heading',
		'section'     => 'grocery_shopping_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Location', 'grocery-shopping' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_shopping_header_location',
		'section'  => 'grocery_shopping_section_header',
		'default'  => '',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_email_heading',
		'section'     => 'grocery_shopping_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Email Address', 'grocery-shopping' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_shopping_header_email',
		'section'  => 'grocery_shopping_section_header',
		'default'  => '',
		'sanitize_callback' => 'sanitize_email',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_header_phone_number_heading',
		'section'     => 'grocery_shopping_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Add Phone Number', 'grocery-shopping' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_shopping_header_phone_number',
		'section'  => 'grocery_shopping_section_header',
		'default'  => '',
		'sanitize_callback' => 'grocery_shopping_sanitize_phone_number',
		'partial_refresh'    => [
		'grocery_shopping_header_phone_number' => [
			'selector'        => '.topheader span',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_search',
		'section'     => 'grocery_shopping_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_search_box_enable',
		'section'     => 'grocery_shopping_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
		'partial_refresh'    => [
		'grocery_shopping_search_box_enable' => [
			'selector'        => '.header-search',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_socail_link',
		'section'     => 'grocery_shopping_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'grocery-shopping' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'repeater',
		'section'     => 'grocery_shopping_section_header',
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Social Icon', 'grocery-shopping' ),
			'field' => 'link_text',
		],
		'button_label' => esc_html__('Add New Social Icon', 'grocery-shopping' ),
		'settings'     => 'grocery_shopping_social_links_settings',
		'default'      => '',
		'fields' 	   => [
			'link_text' => [
				'type'        => 'text',
				'label'       => esc_html__( 'Icon', 'grocery-shopping' ),
				'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'grocery-shopping' ),
				'default'     => '',
			],
			'link_url' => [
				'type'        => 'url',
				'label'       => esc_html__( 'Social Link', 'grocery-shopping' ),
				'description' => esc_html__( 'Add the social icon url here.', 'grocery-shopping' ),
				'default'     => '',
			],
		],
		'choices' => [
			'limit' => 5
		],
		'partial_refresh'    => [
		'grocery_shopping_social_links_settings' => [
			'selector'        => '.social-links i',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	// SLIDER SECTION

	Kirki::add_section( 'grocery_shopping_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'grocery-shopping' ),
        'description'    => esc_html__( 'You have to select post category to show slider.', 'grocery-shopping' ),
        'panel'          => 'grocery_shopping_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_heading',
		'section'     => 'grocery_shopping_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_title_unable_disable',
		'label'       => esc_html__( 'Slide Title Enable / Disable', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_slide_text_unable_disable',
		'label'       => esc_html__( 'Slide Text Enable / Disable', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_button_unable_disable',
		'label'       => esc_html__( 'Slide Button Enable / Disable', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_slider_heading',
		'section'     => 'grocery_shopping_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'grocery_shopping_blog_slide_number',
		'label'       => esc_html__( 'Number of slides to show', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => 0,
		'choices'     => [
			'min'  => 1,
			'max'  => 5,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'settings'    => 'grocery_shopping_blog_slide_category',
		'label'       => esc_html__( 'Select the category to show slider ( Image Dimension 1600 x 600 )', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => '',
		'placeholder' => esc_html__( 'Select an category...', 'grocery-shopping' ),
		'priority'    => 10,
		'choices'     => grocery_shopping_get_categories_select(),
		'partial_refresh'    => [
		'grocery_shopping_blog_slide_category' => [
			'selector'        => '.blog_box h3',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'grocery_shopping_slider_extra_text' ,
        'label'    => esc_html__( 'Extra Heading Text',  'grocery-shopping' ),
        'section'  => 'grocery_shopping_blog_slide_section',
    ] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_heading_22',
		'section'     => 'grocery_shopping_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content Alignment', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
[
	'settings'    => 'grocery_shopping_slider_content_alignment',
	'label'       => esc_html__( 'Slider Content Alignment', 'grocery-shopping' ),
	'section'     => 'grocery_shopping_blog_slide_section',
	'default'     => 'LEFT-ALIGN',
	'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
	'choices'     => [
		'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'grocery-shopping' ),
		'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'grocery-shopping' ),
		'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'grocery-shopping' ),

	],
] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_slider_opacity_color',
		'label'       => esc_html__( 'Slider Opacity Option', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => '0.6',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'0' => esc_html__( '0', 'grocery-shopping' ),
			'0.1' => esc_html__( '0.1', 'grocery-shopping' ),
			'0.2' => esc_html__( '0.2', 'grocery-shopping' ),
			'0.3' => esc_html__( '0.3', 'grocery-shopping' ),
			'0.4' => esc_html__( '0.4', 'grocery-shopping' ),
			'0.5' => esc_html__( '0.5', 'grocery-shopping' ),
			'0.6' => esc_html__( '0.6', 'grocery-shopping' ),
			'0.7' => esc_html__( '0.7', 'grocery-shopping' ),
			'0.8' => esc_html__( '0.8', 'grocery-shopping' ),
			'0.9' => esc_html__( '0.9', 'grocery-shopping' ),
			'1.0' => esc_html__( '1.0', 'grocery-shopping' ),
			

		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_overlay_option',
		'label'       => esc_html__( 'Enable / Disable Slider Overlay', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

	 Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'grocery_shopping_slider_image_overlay_color',
		'label'       => __( 'choose your Appropriate Overlay Color', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_blog_slide_section',
		'default'     => '',
	] );

	//DEAL OF DAY SECTION

	Kirki::add_section( 'grocery_shopping_deal_of_day_section', array(
	    'title'          => esc_html__( 'Deal Of Day Settings', 'grocery-shopping' ),
	    'description'    => esc_html__( 'Here you can add different type of social icons.', 'grocery-shopping' ),
	    'panel'          => 'grocery_shopping_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_enable_heading',
		'section'     => 'grocery_shopping_deal_of_day_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Deal Of Day',  'grocery-shopping' ) . '</h3>',
		'priority'    => 1,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_deal_of_day_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable',  'grocery-shopping' ),
		'section'     => 'grocery_shopping_deal_of_day_section',
		'default'     => false,
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable',  'grocery-shopping' ),
			'off' => esc_html__( 'Disable',  'grocery-shopping' ),
		],
		'partial_refresh'    => [
		'grocery_shopping_deal_of_day_section_enable' => [
			'selector'        => '#deal-of-day h2',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'grocery_shopping_deal_of_day_heading' ,
        'label'    => esc_html__( 'Heading',  'grocery-shopping' ),
        'section'  => 'grocery_shopping_deal_of_day_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'grocery_shopping_deal_of_day_heading_text' ,
        'label'    => esc_html__( 'Heading Text',  'grocery-shopping' ),
        'section'  => 'grocery_shopping_deal_of_day_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_deal_timer',
		'section'     => 'grocery_shopping_deal_of_day_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Timer Counter Section ',  'grocery-shopping' ) . '</h3>',
		'priority'    => 6,
	] );

    Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'grocery_shopping_clock_timer_end' ,
        'label'    => esc_html__( 'Timer Counter',  'grocery-shopping' ),
        'description'    => esc_html__( 'Follow this pattern:- September 23 2022 11:59:00', 'grocery-shopping' ),
        'section'  => 'grocery_shopping_deal_of_day_section',
    ] );


	// FOOTER SECTION

	Kirki::add_section( 'grocery_shopping_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'grocery-shopping' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'grocery-shopping' ),
        'panel'          => 'grocery_shopping_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_footer_enable_heading',
		'section'     => 'grocery_shopping_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_shopping_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-shopping' ),
			'off' => esc_html__( 'Disable', 'grocery-shopping' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_footer_text_heading',
		'section'     => 'grocery_shopping_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_shopping_footer_text',
		'section'  => 'grocery_shopping_footer_section',
		'default'  => '',
		'priority' => 10,
		'partial_refresh'    => [
		'grocery_shopping_footer_text' => [
			'selector'        => '.copy-text p',
			'render_callback' => function() {
				return get_bloginfo( 'name', 'display' );
			},
		],
	],
	] );

		Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_shopping_footer_text_heading_2',
		'section'     => 'grocery_shopping_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'grocery-shopping' ) . '</h3>',
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'grocery_shopping_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_footer_section',
		'default'     => 'CENTER-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'grocery-shopping' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'grocery-shopping' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'grocery-shopping' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'grocery-shopping' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'grocery_shopping_footer_text_heading_1',
	'section'     => 'grocery_shopping_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'grocery-shopping' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'grocery_shopping_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'grocery-shopping' ),
		'section'     => 'grocery_shopping_footer_section',
		'default'     => '',
	] );
}

add_action( 'customize_register', 'grocery_shopping_customizer_settings' );
function grocery_shopping_customizer_settings( $wp_customize ) {
	$args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('grocery_shopping_deal_of_day_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'grocery_shopping_sanitize_select',
	));
	$wp_customize->add_control('grocery_shopping_deal_of_day_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','grocery-shopping'),
		'section' => 'grocery_shopping_deal_of_day_section',
	));
}
