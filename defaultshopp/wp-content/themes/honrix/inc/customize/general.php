<?php
if (!function_exists('honrix_general_customizer_register')) {
    function honrix_general_customizer_register($wp_customize)
    {
        get_template_part('/inc/customize/class/Input_Number_Option');
        get_template_part('/inc/customize/class/Text_Radio_Button');

        $wp_customize->add_section(
            'honrix_layout',
            array(
                'title' => __('Layout', 'honrix'),
                'capability' => 'edit_theme_options',
                'panel' => 'honrix_settings_pannel'
            )
        );

        $wp_customize->add_setting(
            'honrix_boxed',
            array(
                'default'     => 'boxed',
                'sanitize_callback' => 'esc_attr',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(new honrix_Text_Radio_Button_Custom_Control(
            $wp_customize,
            'honrix_boxed',
            array(
                'label'      => __('Layout Mode', 'honrix'),
                'description'      => __('This is an option you can choose to display your website content in full width mode or boxed mode.', 'honrix'),
                'section'    => 'honrix_layout',
                'settings'   => 'honrix_boxed',
                'choices'    => array(
                    'boxed' => __('Boxed', 'honrix'),
                    'wide' => __('Wide', 'honrix')
                ),
            )
        ));

        $wp_customize->add_setting(
            'honrix_to_top',
            array(
                'default'     => 'yes',
                'sanitize_callback' => 'esc_attr',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(new honrix_Text_Radio_Button_Custom_Control(
            $wp_customize,
            'honrix_to_top',
            array(
                'label'      => __('Display Back To Top Button', 'honrix'),
                'description'      => __('Back to top button is a little button in bottom of the website page. If client clicks it, he will go to top of the page smoothly. Choose to display or hide the button in here.', 'honrix'),
                'section'    => 'honrix_layout',
                'settings'   => 'honrix_to_top',
                'choices'    => array(
                    'yes' => __('Show', 'honrix'),
                    'no' => __('Hide', 'honrix')
                ),
            )
        ));

        $wp_customize->add_setting(
            'honrix_loading_display',
            array(
                'default'     => 'yes',
                'sanitize_callback' => 'esc_attr',
                'transport' => 'refresh',
            )
        );

        $wp_customize->add_control(new honrix_Text_Radio_Button_Custom_Control(
            $wp_customize,
            'honrix_loading_display',
            array(
                'label'      => __('Loading Page', 'honrix'),
                'description'      => __('If page is loading, the client will see the Loading Page with a little spinner. Hide or display the page with this option.', 'honrix'),
                'section'    => 'honrix_layout',
                'settings'   => 'honrix_loading_display',
                'choices'    => array(
                    'yes' => __('Show', 'honrix'),
                    'no' => __('Hide', 'honrix')
                ),
            )
        ));

        $wp_customize->add_setting(
            'honrix_theme_color',
            array('default' => '#031424', 'sanitize_callback' => 'sanitize_hex_color')
        );

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honrix_theme_color', array(
            'label' => __('Theme Color', 'honrix'),
            'description'    => __('Change Theme color to customize your website as you wanted.', 'honrix'),
            'section' => 'colors',
            'settings' => 'honrix_theme_color',
        )));

        $wp_customize->add_setting(
            'honrix_header_color',
            array('default' => '#333333', 'sanitize_callback' => 'sanitize_hex_color')
        );

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honrix_header_color', array(
            'label' => __('h1 - h6 Color', 'honrix'),
            'description'    => __('Change heading (h1-h6) color', 'honrix'),
            'section' => 'colors',
            'settings' => 'honrix_header_color',
        )));

        $wp_customize->add_setting(
            'honrix_text_color',
            array('default' => '#666666', 'sanitize_callback' => 'sanitize_hex_color')
        );

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honrix_text_color', array(
            'label' => __('Text Color', 'honrix'),
            'description'    => __('Change text (posts and pages content) color', 'honrix'),
            'section' => 'colors',
            'settings' => 'honrix_text_color',
        )));

        $wp_customize->add_setting(
            'honrix_accent_color',
            array('default' => '#ffbd28', 'sanitize_callback' => 'sanitize_hex_color')
        );

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honrix_accent_color', array(
            'label' => __('Accent Color', 'honrix'),
            'description'    => __('This color will be used in some borders and lines between the items like comment message txtarea border.', 'honrix'),
            'section' => 'colors',
            'settings' => 'honrix_accent_color',
        )));

        $wp_customize->add_setting(
            'honrix_secondary_color',
            array('default' => '#A56A5F', 'sanitize_callback' => 'sanitize_hex_color')
        );

        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'honrix_secondary_color', array(
            'label' => __('Secondary Color', 'honrix'),
            'section' => 'colors',
            'settings' => 'honrix_secondary_color',
        )));
    }

    add_action('customize_register', 'honrix_general_customizer_register');
}

if (!function_exists('honrix_customizer_css')) {
    function honrix_customizer_css()
    {
?>
        <style type="text/css">
            ::-webkit-scrollbar-thumb {
                background: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
                -webkit-box-shadow: 0px 1px 2px <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            ::-webkit-scrollbar-corner {
                background: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            * {
                scrollbar-width: thin;
                scrollbar-color: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?> #cccccc;
                transition: 0.3s;
            }

            .honrix-content [type="submit"],
            .honrix-content .btn,
            .entry-content button,
            .entry-content blockquote,
            .entry-content q,
            .entry-content select,
            .entry-content pre,
            .widget_tag_cloud a,
            ..widget_product_tag_cloud a,
            .wp-block-tag-cloud a,
            .wp-block-latest-posts__featured-image,
            .widget_recent_comments ol li,
            .search-box-responsive .search-box-form button,
            .single .related-posts .related-post-thumbnail,
            .single .entry-comment .comments-title span,
            .page .entry-comment .comments-title span,
            .single .entry-comment .comment-list .comment-body .avatar img,
            .page .entry-comment .comment-list .comment-body .avatar img,
            .honrix-author .avatar img,
            .widget-title,
            .hrix-header-minicart-context .remove_from_cart_button,
            .woocommerce nav.woocommerce-pagination ul li a:focus,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li span.current,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:focus,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:hover,
            .wp-block-query-pagination .wp-block-query-pagination-numbers span.current,
            .honrix-entries .pagination .nav-links>span.current,
            .honrix-entries .pagination .nav-links>a:hover,
            .honrix-content .page-links>span.current,
            .honrix-content .page-links>a:hover,
            .comment-pagination>span.page-numbers,
            .comment-pagination>a.page-numbers:hover,
            .woocommerce .woocommerce-product-rating .woocommerce-review-link:hover,
            .woocommerce div.product form.cart .button,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
            .hrix-header-minicart-context .woocommerce-mini-cart__buttons a:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce #respond input#submit,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce button.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce input.button,
            .skip-link,
            .wc-block-cart__submit-button {
                border-color: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            .honrix-content [type="submit"],
            .honrix-content .btn,
            .entry-content button,
            .entry-content table th,
            .entry-content table th a,
            .wp-block-calendar table th,
            .search-box-responsive .search-box-form button,
            .woocommerce nav.woocommerce-pagination ul li a:focus,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li span.current,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:focus,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:hover,
            .wp-block-query-pagination .wp-block-query-pagination-numbers span.current,
            .honrix-entries .pagination .nav-links>span.current,
            .honrix-entries .pagination .nav-links>a:hover,
            .honrix-content .page-links>span.current,
            .honrix-content .page-links>a:hover,
            .comment-pagination>span.page-numbers,
            .comment-pagination>a.page-numbers:hover,
            .woocommerce .woocommerce-product-rating .woocommerce-review-link:hover,
            .woocommerce ul.products li.product .addtocartbutton:hover,
            .woocommerce div.product .woocommerce-tabs ul.tabs li:hover,
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-handle,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce #respond input#submit,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce button.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce input.button,
            .skip-link:hover,
            .woocommerce div.product form.cart .button,
            .wc-block-cart__submit-button {
                background: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            .honrix-content [type="submit"]:hover,
            .honrix-content .btn:hover,
            .entry-content button:hover,
            .honrix-content a,
            .entry-content blockquote cite,
            .entry-content blockquote::before,
            .entry-content hr,
            .widget_archive ul li a:hover,
            .widget_categories ul li a:hover,
            .widget_pages ul li a:hover,
            .widget_meta ul li a:hover,
            .wp-block-archives-list li a:hover,
            .widget_product_categories li a:hover,
            .wp-block-page-list li a:hover,
            .wp-block-latest-comments li a:hover,
            .wp-block-categories li a:hover,
            .widget_tag_cloud a:hover,
            .widget_product_tag_cloud a:hover,
            .wp-block-tag-cloud a:hover,
            .wp-block-latest-posts a:hover,
            .header-top .menu a:hover,
            .search-box-responsive .close span,
            .header-top .search-submit:hover,
            .main-menu .mobile-btn:hover,
            .site-title,
            .site-title a,
            .single .entry-tags a,
            .single .entry-navigation a,
            .page .entry-navigation a,
            .single .entry-avatar .author-name a,
            .single .related-posts .related-post-title a,
            .single .entry-comment .comment-respond a,
            .page .entry-comment .comment-respond a,
            .single .entry-comment .comment-list .comment-body .comment-author a,
            .page .entry-comment .comment-list .comment-body .comment-author a,
            .single .entry-comment .comment-list .comment-author .comment-metadata a,
            .page .entry-comment .comment-list .comment-author .comment-metadata a,
            .honrix-author .name,
            .honrix-author .social-media a,
            .honrix-entries .posts article .entry-author .author-name a,
            .honrix-entries .posts article .entry-read-more a,
            .hrix-header-minicart-context>div,
            .hrix-header-minicart-context .close,
            .hrix-mobile-navigation-menu span.close,
            .hrix-header-minicart-context .remove_from_cart_button,
            .hrix-header-minicart-context .woocommerce-mini-cart__buttons a,
            .single .entry-categories a,
            .woocommerce nav.woocommerce-pagination ul li a,
            .woocommerce nav.woocommerce-pagination ul li span,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a,
            .wp-block-query-pagination .wp-block-query-pagination-numbers span,
            .honrix-entries .pagination .nav-links>a,
            .honrix-entries .pagination .nav-links>span,
            .honrix-content .page-links>a,
            .honrix-content .page-links>span,
            .comment-pagination>.page-numbers,
            .woocommerce ul.products li.product .woocommerce-loop-category__title,
            .woocommerce ul.products li.product .woocommerce-loop-product__title,
            .woocommerce ul.products li.product h3,
            .woocommerce ul.products li.product .hrix-products-rating,
            .woocommerce .woocommerce-product-rating .woocommerce-review-link,
            .woocommerce div.product .woocommerce-product-details__short-description,
            .woocommerce ul.products li.product .addtocartbutton,
            .quantity-button,
            .woocommerce-cart table.cart td.product-price,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
            .hrix-header-minicart-context .woocommerce-mini-cart__buttons a:hover,
            .hrix-deal-product .product-title,
            .hrix-deal-product .product-rating,
            .hrix-deal-product .progress-bar-details,
            .hrix-special-product .product-title,
            .hrix-special-product .product-rating,
            .hrix-special-product .hrix-timer span,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce #respond input#submit:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce button.button:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce input.button:hover,
            .widget_recent_reviews .product_list_widget,
            .skip-link,
            .woocommerce div.product form.cart .button:hover,
            .hrix-special-product .hrix-timer {
                color: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            .hrix-header-minicart-context .remove_from_cart_button,
            .wc-block-cart__submit-button:hover,
            .wc-block-components-totals-coupon__form .wc-block-components-totals-coupon__button:hover,
            .wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button:hover{
                color: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?> !important;
            }

            .widget_nav_menu .sub-menu {
                box-shadow: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?> 2px 2px 10px -4px;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li.active::after {
                box-shadow: -2px 2px 0 <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li.active::before {
                box-shadow: 2px 2px 0 <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li.active {
                border-bottom-color: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6,
            input:not([type="button"]):not([type="submit"]),
            textarea,
            .widget_archive ul li a,
            .widget_categories ul li a,
            .widget_pages ul li a,
            .widget_meta ul li a,
            .wp-block-archives-list li a,
            .widget_product_categories li a,
            .wp-block-page-list li a,
            .wp-block-categories li a,
            .wp-block-latest-comments li a,
            .widget_tag_cloud a,
            .widget_product_tag_cloud a,
            .wp-block-tag-cloud a,
            .widget_nav_menu a,
            .wp-block-latest-posts a,
            .main-menu .mobile-btn,
            .main-nav ul a,
            .site-description,
            .single .entry-navigation a:hover,
            .page .entry-navigation a:hover,
            .single .entry-comment .comment-list .comment-body .comment-author .name,
            .page .entry-comment .comment-list .comment-body .comment-author .name,
            .single .entry-comment .comment-list .comment-body .comment-author a:hover,
            .page .entry-comment .comment-list .comment-body .comment-author a:hover,
            .honrix-author .description,
            .honrix-author .social-media a:hover,
            .honrix-entries .posts article .entry-title a {
                color: <?php echo esc_attr(get_theme_mod('honrix_header_color', '#333333')); ?>;
            }

            .site-header {
                box-shadow: 0 0 7px -2px <?php echo esc_attr(get_theme_mod('honrix_header_color', '#333333')); ?>;
            }

            .honrix-entries .posts article .honrix-line,
            .woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {
                background: <?php echo esc_attr(get_theme_mod('honrix_header_color', '#333333')); ?>;
            }

            .main-nav ul .sub-menu {
                box-shadow: <?php echo esc_attr(get_theme_mod('honrix_header_color', '#333333')); ?> 3px 3px 10px -5px;
            }

            body,
            .honrix-content a:hover,
            .header-top .search-submit,
            .single .entry-tags a:hover,
            .single .entry-navigation .pre-post,
            .single .entry-navigation .next-post,
            .page .entry-navigation .pre-post,
            .page .entry-navigation .next-post,
            .single .entry-avatar .author-name a:hover,
            .single .related-posts .related-post-title a:hover,
            .single .entry-comment .comment-respond a:hover,
            .page .entry-comment .comment-respond a:hover,
            .honrix-entries .posts article .entry-categories a:hover,
            .honrix-entries .posts article .entry-categories a:not(:last-child)::after,
            .honrix-entries .posts article .entry-read-more a:hover,
            .woocommerce div.product p.price del,
            .woocommerce div.product span.price del,
            .woocommerce ul.products li.product .price del,
            .hrix-deal-product .price del,
            .hrix-special-product .hrix-price .price del,
            .widget_top_rated_products .product_list_widget del .amount,
            .widget_products .product_list_widget del .amount,
            .widget_recent_reviews .product_list_widget del .amount {
                color: <?php echo esc_attr(get_theme_mod('honrix_text_color', '#666666')); ?>;
            }

            .honrix-content input:not([type="submit"]):not([type="button"]),
            .honrix-content textarea,
            .entry-content .wp-block-pullquote,
            .search-box-responsive .search-box-form input,
            .header-top .search-field,
            .header-top .search-submit,
            .main-nav .menu .sub-menu li:not(:last-child),
            .single .entry-navigation,
            .page .entry-navigation,
            .single .entry-avatar,
            .single .related-posts,
            .single .entry-comment,
            .page .entry-comment,
            .single .entry-comment .comment-form input:not(.submit),
            .single .entry-comment .comment-form textarea,
            .page .entry-comment .comment-form input:not(.submit),
            .page .entry-comment .comment-form textarea,
            .single .entry-comment .comment-list .comment .comment-body,
            .page .entry-comment .comment-list .comment,
            .single .entry-comment .comment-list .trackback,
            .page .entry-comment .comment-list .trackback,
            .site-copyright,
            .honrix-entries .posts article .entry-read-more a:hover {
                border-color: <?php echo esc_attr(get_theme_mod('honrix_text_color', '#666666')); ?>;
            }

            .single .entry-tags .tag-title {
                background: <?php echo esc_attr(get_theme_mod('honrix_text_color', '#666666')); ?>;
            }

            html,
            body,
            .honrix-content [type="submit"]:hover,
            .honrix-content .btn:hover,
            .entry-content button:hover,
            .to-top,
            .entry-content .wp-block-cover-text,
            .widget_nav_menu .sub-menu,
            .search-box-responsive,
            .main-nav ul .sub-menu,
            .hrix-header-minicart-context>div,
            .add-to-wishlist-before_image .yith-wcwl-add-to-wishlist svg,
            .hrix-special-product .svg,
            .woocommerce nav.woocommerce-pagination ul li a,
            .woocommerce nav.woocommerce-pagination ul li span,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a,
            .wp-block-query-pagination .wp-block-query-pagination-numbers span,
            .honrix-entries .pagination .nav-links>a,
            .honrix-entries .pagination .nav-links>span,
            .honrix-content .page-links>a,
            .honrix-content .page-links>span,
            .comment-pagination>.page-numbers,
            .woocommerce div.product .woocommerce-tabs ul.tabs li,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button:hover,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button:hover,
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button:hover,
            .hrix-header-minicart-context .woocommerce-mini-cart__buttons a:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button:hover,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce #respond input#submit:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce button.button:hover,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce input.button:hover,
            .skip-link,
            .woocommerce div.product form.cart .button:hover,
            .wc-block-cart__submit-button:hover {
                background-color: #<?php echo esc_attr(get_background_color()); ?>;
            }

            .honrix-content [type="submit"],
            .honrix-content .btn,
            .entry-content button,
            .entry-content table th,
            .entry-content table th a,
            .wp-block-calendar table th,
            .search-box-responsive .search-box-form button,
            .single .entry-tags .tag-title,
            .woocommerce ul.products li.product .onsale,
            .woocommerce span.onsale,
            .woocommerce ul.products li.product .addtocartbutton:hover,
            .hrix-deal-product .onsale,
            .hrix-special-product .onsale,
            .woocommerce div.product span.stock {
                color: #<?php echo esc_attr(get_background_color()); ?>;
            }

            .woocommerce div.product .woocommerce-tabs ul.tabs li::after {
                box-shadow: -2px 2px 0 #<?php echo esc_attr(get_background_color()); ?>;
            }

            input:not([type="button"]):not([type="submit"]),
            textarea,
            .honrix-entries .posts article:hover .post-thumbnail img,
            .hrix-header-minicart-context .woocommerce-mini-cart__buttons a,
            .hrix-header-search-form .hrix-header-search-button {
                border-color: <?php echo esc_attr(get_theme_mod('honrix_accent_color', '#ffbd28')); ?>;
            }

            .hrix-header-minicart-context .woocommerce-mini-cart__buttons a,
            .hrix-deal-product .progress-bar,
            .woocommerce .widget_price_filter .ui-slider .ui-slider-range {
                background: <?php echo esc_attr(get_theme_mod('honrix_accent_color', '#ffbd28')); ?>;
            }

            .wp-block-query-pagination .wp-block-query-pagination-numbers a:focus,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:hover,
            .wp-block-query-pagination .wp-block-query-pagination-numbers span.current,
            .honrix-entries .pagination .nav-links>a:hover,
            .woocommerce nav.woocommerce-pagination ul li a:focus,
            .woocommerce nav.woocommerce-pagination ul li a:hover,
            .woocommerce nav.woocommerce-pagination ul li span.current,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:focus,
            .wp-block-query-pagination .wp-block-query-pagination-numbers a:hover,
            .wp-block-query-pagination .wp-block-query-pagination-numbers span.current,
            .honrix-entries .pagination .nav-links>span.current,
            .honrix-entries .pagination .nav-links>a:hover,
            .honrix-content .page-links>span.current,
            .honrix-content .page-links>a:hover,
            .comment-pagination>span.page-numbers,
            .comment-pagination>a.page-numbers:hover,
            .add-to-wishlist-before_image .yith-wcwl-add-to-wishlist svg,
            .woocommerce ul.products li.product .woocommerce-loop-category__title:hover,
            .woocommerce ul.products li.product .woocommerce-loop-product__title:hover,
            .woocommerce ul.products li.product h3:hover,
            .woocommerce .woocommerce-product-rating .woocommerce-review-link:hover,
            .woocommerce .star-rating span::before,
            .woocommerce div.product .woocommerce-tabs ul.tabs li:hover a,
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active a,
            .woocommerce div.product .woocommerce-tabs ul.tabs li.active:hover a,
            #add_payment_method .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-cart .wc-proceed-to-checkout a.checkout-button,
            .woocommerce-checkout .wc-proceed-to-checkout a.checkout-button,
            .hrix-deal-product .product-rating .star-rating span::before,
            .hrix-special-product .svg,
            .hrix-special-product .product-rating .star-rating span::before,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) #respond input#submit,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) a.button,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button,
            .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) input.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce #respond input#submit,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce a.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce button.button,
            :where(body:not(.woocommerce-block-theme-has-button-styles)) .woocommerce input.button,
            .widget_top_rated_products .product_list_widget .product-title:hover,
            .widget_products .product_list_widget .product-title:hover,
            .widget_recent_reviews .product_list_widget .product-title:hover,
            .skip-link:hover,
            .honrix-entries .posts article .entry-author .author-name a:hover,
            .woocommerce div.product form.cart .button {
                color: <?php echo esc_attr(get_theme_mod('honrix_accent_color', '#ffbd28')); ?>;
            }

            .wc-block-cart__submit-button,
            .wc-block-components-totals-coupon__form .wc-block-components-totals-coupon__button,
            .wc-block-checkout__actions_row .wc-block-components-checkout-place-order-button {
                color: <?php echo esc_attr(get_theme_mod('honrix_accent_color', '#ffbd28')); ?> !important;
            }

            .woocommerce ul.products li.product .price,
            .woocommerce div.product p.price,
            .woocommerce div.product .woocommerce-variation-price .price,
            .woocommerce div.product p.price ins,
            .woocommerce div.product span.price ins,
            .woocommerce ul.products li.product .price ins,
            .woocommerce-cart table.cart td.product-subtotal,
            .hrix-deal-product .price,
            .hrix-deal-product .price ins,
            .hrix-special-product .hrix-price .price,
            .hrix-special-product .hrix-price .price ins,
            .woocommerce .widget_price_filter .price_slider_amount .from,
            .woocommerce .widget_price_filter .price_slider_amount .to,
            .widget_top_rated_products .product_list_widget,
            .widget_products .product_list_widget,
            .wc-block-components-product-price,
            .wc-block-components-totals-item__value {
                color: <?php echo esc_attr(get_theme_mod('honrix_secondary_color', '#A56A5F')); ?>;
            }

            .woocommerce div.product span.stock {
                background: <?php echo esc_attr(get_theme_mod('honrix_secondary_color', '#A56A5F')); ?>;
            }

            @media (max-width: 991px) {
                .main-nav {
                    border-color: 1px solid <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
                    background-color: #<?php echo esc_attr(get_background_color()); ?>;
                }

                .main-nav .close:hover {
                    color: <?php echo esc_attr(get_theme_mod('honrix_theme_color', '#031424')); ?>;
                }

                .main-nav ul a {
                    color: <?php echo esc_attr(get_theme_mod('honrix_header_color', '#333333')); ?>;
                    border-color: <?php echo esc_attr(get_theme_mod('honrix_text_color', '#666666')); ?>;
                }

                .honrix-mega-menu>.sub-menu>li {
                    border-color: <?php echo esc_attr(get_theme_mod('honrix_text_color', '#666666')); ?>;
                }
            }
        </style>
<?php
    }

    add_action('wp_head', 'honrix_customizer_css');
}

if (!function_exists('ic_sanitize_image')) {
    function ic_sanitize_image($file, $setting)
    {
        $mimes = array(
            'jpg|jpeg|jpe' => 'image/jpeg',
            'gif'          => 'image/gif',
            'png'          => 'image/png',
            'bmp'          => 'image/bmp',
            'tif|tiff'     => 'image/tiff',
            'ico'          => 'image/x-icon'
        );
        $file_ext = wp_check_filetype($file, $mimes);
        return ($file_ext['ext'] ? $file : $setting->default);
    }
}
