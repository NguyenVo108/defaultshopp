<?php

/**
 * Enqueue scripts and styles.
 */
if (!function_exists('honrix_enqueue_scripts')) {
    function honrix_enqueue_scripts()
    {
        // Theme stylesheet.
        global $wp_scripts;

        wp_enqueue_style('font-awesome', HONRIX_TEMPLATE_URI . '/framework/font-awesome/css/all.min.css', array(), '1');

        wp_enqueue_style(
            'bootstrap-icons',
            esc_url(
                HONRIX_TEMPLATE_URI . '/framework/bootstrap/bootstrap-icons.css'
            ),
            ['font-awesome'],
            '1'
        );


        /* Libraries Stylesheet */
        wp_enqueue_style(
            'owl-carousel-css',
            esc_url(
                HONRIX_TEMPLATE_URI .
                    '/lib/owlcarousel/assets/owl.carousel.min.css'
            ),
            ['bootstrap-icons'],
            null
        );
        wp_enqueue_style(
            'animate',
            esc_url(
                HONRIX_TEMPLATE_URI . '/lib/animate/animate.min.css'
            ),
            ['owl-carousel-css'],
            null
        );

        /* Bootstrap */
        wp_enqueue_style(
            'bootstrap-css',
            esc_url(
                HONRIX_TEMPLATE_URI . '/assets/css/bootstrap.min.css'
            ),
            ['animate'],
            null
        );

        /* css styles */
        wp_enqueue_style(
            'honrix-style',
            get_stylesheet_uri(),
            ['bootstrap-css'],
            null
        );

        wp_enqueue_style(
            'honrix-responsive-style',
            esc_url(
                HONRIX_TEMPLATE_URI . '/assets/css/responsive.css'
            ),
            ['honrix-style'],
            null
        );

        /* woocommerce style */
        if (class_exists('WooCommerce')) {
            wp_enqueue_style(
                'honrix-woocommerce-style',
                esc_url(
                    HONRIX_TEMPLATE_URI . '/assets/css/woocommerce.css'
                ),
                ['honrix-style'],
                null
            );
        }

        wp_enqueue_script('jquery-masonry');

        wp_enqueue_script(
            'bootstrap-js',
            esc_url(HONRIX_TEMPLATE_URI . '/framework/bootstrap/bootstrap.bundle.min.js'),
            ['jquery'],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'font-awesome-js',
            esc_url(HONRIX_TEMPLATE_URI . '/assets/js/fontawesome.min.all.js'),
            [],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'wow-js',
            esc_url(HONRIX_TEMPLATE_URI . '/lib/wow/wow.min.js'),
            ['bootstrap-js'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'easing-js',
            esc_url(HONRIX_TEMPLATE_URI . '/lib/easing/easing.min.js'),
            ['wow-js'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'waypoints-js',
            esc_url(
                HONRIX_TEMPLATE_URI . '/lib/waypoints/waypoints.min.js'
            ),
            ['easing-js'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'counterup-js',
            esc_url(
                HONRIX_TEMPLATE_URI . '/lib/counterup/counterup.min.js'
            ),
            ['waypoints-js'],
            '1.0.0',
            true
        );
        wp_enqueue_script(
            'owl-carousel-js',
            esc_url(
                HONRIX_TEMPLATE_URI .
                    '/lib/owlcarousel/owl.carousel.min.js'
            ),
            ['counterup-js'],
            '1.0.0',
            true
        );

        wp_enqueue_script(
            'honrix-script',
            esc_url(HONRIX_TEMPLATE_URI . '/assets/js/custom.js'),
            ['owl-carousel-js'],
            '1.0.0',
            true
        );

        $banner_values = array(
            'is_rtl' => is_rtl()
        );
        wp_add_inline_script('honrix-main-script', 'var honrix_is_rtl = ' . wp_json_encode($banner_values), 'before');

        global $wp_query;
        wp_localize_script('honrix-main-script', 'honrix_loadmore_params', array(
            'ajaxurl' => home_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
            'posts' => json_encode($wp_query->query_vars), // everything about your loop is here
            'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
            'max_page' => $wp_query->max_num_pages,
            'button_text' => __('Load More', 'honrix'),
            'button_loading_text' => __('Loading ...', 'honrix'),
            'no_content' => __('No More Content', 'honrix')
        ));

        wp_enqueue_script('honrix-masonry-init', esc_url(get_stylesheet_directory_uri() . '/assets/js/masonry-init.js'), array('jquery-masonry'), '1', true);

        $theme = 'theme-' . get_theme_mod('honrix_archive_theme', '1');

        wp_enqueue_style('honrix-content-theme', esc_url(HONRIX_TEMPLATE_URI . '/assets/css/content/' . $theme . '.css'), array('honrix-style'), null);

        if (is_singular() && comments_open() && get_option('thread_comments')) {
            wp_enqueue_script('comment-reply');
        }

        // Register the IE11 polyfill file.
        wp_register_script(
            'honrix-ie11-polyfills-asset',
            HONRIX_TEMPLATE_URI . '/assets/js/polyfills.js',
            array(),
            wp_get_theme()->get('Version'),
            true
        );

        // Register the IE11 polyfill loader.
        wp_register_script(
            'honrix-ie11-polyfills',
            null,
            array(),
            wp_get_theme()->get('Version'),
            true
        );

        wp_add_inline_script(
            'honrix-ie11-polyfills',
            wp_get_script_polyfill(
                $wp_scripts,
                array(
                    'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'hs-honrix-ie11-polyfills-asset',
                )
            )
        );

        // Responsive embeds script.
        wp_enqueue_script(
            'honrix-responsive-embeds-script',
            HONRIX_TEMPLATE_URI . '/assets/js/responsive-embeds.js',
            array('honrix-ie11-polyfills'),
            wp_get_theme()->get('Version'),
            true
        );
    }

    add_action('wp_enqueue_scripts', 'honrix_enqueue_scripts');
}

if (!function_exists('honrix_admin_style')) {
    function honrix_admin_style()
    {
        wp_enqueue_style('honrix-admin-css', HONRIX_TEMPLATE_URI . '/assets/css/admin.css', array(), '1');
    }
    add_action('admin_enqueue_scripts', 'honrix_admin_style');
}

if (!function_exists('honrix_customizer_control_toggle')) {
    function honrix_customizer_control_toggle()
    {
        wp_enqueue_script('honrix-customize-controls-toggle', HONRIX_TEMPLATE_URI . '/inc/customize/assets/customize-controls-toggle.js', array('jquery', 'customize-preview'), '1.30', true);
    }
    add_action('customize_controls_enqueue_scripts', 'honrix_customizer_control_toggle');
}
