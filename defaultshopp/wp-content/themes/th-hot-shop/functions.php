<?php
/**********************/
// child style enqueue
/**********************/
function th_hot_shop_styles(){
    $themeVersion = wp_get_theme()->get('Version');
    // Enqueue our style.css with our own version
    wp_enqueue_style('th-hot-shop-styles', get_template_directory_uri() . '/style.css',array(), $themeVersion);
     wp_add_inline_style('th-hot-shop-styles', th_hot_shop_custom_styles());
}
add_action('wp_enqueue_scripts', 'th_hot_shop_styles', 100);
define('TH_HOT_SHOP_LAYOUT_TWO', get_theme_file_uri(). "/images/header-layout-2.png");
/**********************/
//customize setting
/**********************/

function th_hot_shop_setting( $wp_customize ){

/******************/
// theme color
/******************/
 $wp_customize->add_setting('open_shop_theme_clr', array(
        'default'        => '#fd0000',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_color',
        'transport'         => 'postMessage',
    ));
$wp_customize->add_control( 
    new WP_Customize_Color_Control($wp_customize,'open_shop_theme_clr', array(
        'label'      => __('Theme Color', 'th-hot-shop' ),
        'section'    => 'open-shop-gloabal-color',
        'settings'   => 'open_shop_theme_clr',
        'priority' => 1,
    ) ) 
 );    
// choose col layout
if(class_exists('Open_Shop_WP_Customize_Control_Radio_Image')){
        $wp_customize->add_setting(
            'open_shop_main_header_layout', array(
                'default'           => 'mhdrdefault',
                'sanitize_callback' => 'open_shop_sanitize_radio',
            )
        );
$wp_customize->add_control(
            new Open_Shop_WP_Customize_Control_Radio_Image(
                $wp_customize, 'open_shop_main_header_layout', array(
                    'label'    => esc_html__( 'Header Layout', 'th-hot-shop' ),
                    'section'  => 'open-shop-main-header',
                    'choices'  => array(
                        'mhdrdefault'   => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_ONE,
                        ),
                        'mhdrone'   => array(
                            'url' => TH_HOT_SHOP_LAYOUT_TWO,
                        ),
                        'mhdrtwo' => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_THREE,
                        ),
                         'mhdrthree' => array(
                            'url' => OPEN_SHOP_MAIN_HEADER_LAYOUT_FOUR,
                        ),
                                     
                    ),
                    'priority' => 1,
                )
            )
        );
} 

//Main menu option
$wp_customize->add_setting('open_shop_main_header_option', array(
        'default'        => 'none',
        'capability'     => 'edit_theme_options',
        'sanitize_callback' => 'open_shop_sanitize_select',
    ));
$wp_customize->add_control( 'open_shop_main_header_option', array(
        'settings' => 'open_shop_main_header_option',
        'label'    => __('Column 1','th-hot-shop'),
        'section'  => 'open-shop-main-header',
        'type'     => 'select',
        'choices'    => array(
        'none'       => __('None','th-hot-shop'),
        'callto'     => __('Call-To','th-hot-shop'),
        'button'     => __('Button','th-hot-shop'),
        'widget'     => __('Widget','th-hot-shop'),     
        ),
    ));

}

add_action( 'customize_register', 'th_hot_shop_setting', 100 );

/***************************/
//custom style
/***************************/
function th_hot_shop_custom_styles(){
$open_shop_theme_clr = esc_html(get_theme_mod('open_shop_theme_clr','#fd0000'));
$open_shop_color_scheme = esc_html(get_theme_mod('open_shop_color_scheme','opn-light'));

$th_hot_shop_custom_style=""; 

$th_hot_shop_custom_style.="a:hover, .open-shop-menu li a:hover, .open-shop-menu .current-menu-item a,.woocommerce .thunk-woo-product-list .price,.thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.thunk-compare .compare-button a:hover, .thunk-product-hover .th-button.add_to_cart_button:hover, .woocommerce ul.products .thunk-product-hover .add_to_cart_button :hover, .woocommerce .thunk-product-hover a.th-button:hover,.thunk-product .yith-wcwl-wishlistexistsbrowse.show:before, .thunk-product .yith-wcwl-wishlistaddedbrowse.show:before,.woocommerce ul.products li.product.thunk-woo-product-list .price,.summary .yith-wcwl-add-to-wishlist.show .add_to_wishlist::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse.show a::before, .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse.show a::before,.woocommerce .entry-summary a.compare.button.added:before,.header-icon a:hover,.thunk-related-links .nav-links a:hover,.woocommerce .thunk-list-view ul.products li.product.thunk-woo-product-list .price,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,article.thunk-post-article .thunk-readmore.button,.thunk-wishlist a:hover, .thunk-compare a:hover,.woocommerce .thunk-product-hover a.th-button,.woocommerce ul.cart_list li .woocommerce-Price-amount, .woocommerce ul.product_list_widget li .woocommerce-Price-amount,.open-shop-load-more button, 
.summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistaddedbrowse a::before,
 .summary .yith-wcwl-add-to-wishlist .yith-wcwl-wishlistexistsbrowse a::before,.thunk-hglt-icon,.thunk-product .yith-wcwl-wishlistexistsbrowse:before, .thunk-product .yith-wcwl-wishlistaddedbrowse:before,.woocommerce a.button.product_type_simple,.woosw-btn:hover:before,.woosw-added:before,.wooscp-btn:hover:before,.woocommerce #reviews #comments .star-rating span ,.woocommerce p.stars a,.woocommerce .woocommerce-product-rating .star-rating,.woocommerce .star-rating span::before, .woocommerce .entry-summary a.th-product-compare-btn.btn_type:before{color:{$open_shop_theme_clr};} header #thaps-search-button,header #thaps-search-button:hover,.nav-links .page-numbers.current, .nav-links .page-numbers:hover{background:{$open_shop_theme_clr};}";

 if($open_shop_color_scheme=='opn-dark'){
$th_hot_shop_custom_style.="body.open-shop-dark a:hover, body.open-shop-dark .open-shop-menu > li > a:hover, body.open-shop-dark .open-shop-menu li ul.sub-menu li a:hover,body.open-shop-dark .thunk-product-cat-list li a:hover,body.open-shop-dark .main-header a:hover, body.open-shop-dark #sidebar-primary .open-shop-widget-content a:hover,.open-shop-dark .thunk-woo-product-list .woocommerce-loop-product__title a:hover{color:{$open_shop_theme_clr}} body.open-shop-dark #searchform [type='submit']{background:{$open_shop_theme_clr};border-color:{$open_shop_theme_clr}}";
}

$th_hot_shop_custom_style.=".toggle-cat-wrap,#search-button,.thunk-icon .cart-icon, .single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.thunk-woo-product-list .thunk-quickview a,.cat-list a:after,.tagcloud a:hover, .thunk-tags-wrapper a:hover,.btn-main-header,.woocommerce div.product form.cart .button, .thunk-icon .cart-icon .taiowc-cart-item{background:{$open_shop_theme_clr}}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .open-shop-slide-post .owl-nav button.owl-prev:hover, .open-shop-slide-post .owl-nav button.owl-next:hover,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button:hover,.open-shop-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current{background-color:{$open_shop_theme_clr};} 
  .thunk-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .thunk-product-hover .add_to_cart_button, .woocommerce .thunk-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.thunk-slide .owl-nav button.owl-prev:hover, .thunk-slide .owl-nav button.owl-next:hover, .open-shop-slide-post .owl-nav button.owl-prev:hover, .open-shop-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,.thunk-list-grid-switcher a.selected, .thunk-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,article.thunk-post-article .thunk-readmore.button,.woocommerce .thunk-product-hover a.th-button,.open-shop-load-more button,.woocommerce a.button.product_type_simple{border-color:{$open_shop_theme_clr}} .loader {
    border-right: 4px solid {$open_shop_theme_clr};
    border-bottom: 4px solid {$open_shop_theme_clr};
    border-left: 4px solid {$open_shop_theme_clr};}";

    //ribbon  
 $th_hot_shop_custom_style.=".openshop-site section.thunk-ribbon-section .content-wrap:before {
    content:'';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background:{$open_shop_theme_clr};}";

return $th_hot_shop_custom_style;
}
function th_hot_shop_customizer_script_registers(){
wp_enqueue_script( 'th_hot_shop_custom_customizer_script', get_theme_file_uri() . '/customizer/js/customizer.js', array("jquery"), '', true  ); 
}
add_action('customize_controls_enqueue_scripts', 'th_hot_shop_customizer_script_registers',100 );


add_action('admin_head', 'th_hot_shop_admin_custom_styles');

function th_hot_shop_admin_custom_styles() {
  echo '<style>
    .th-theme-notice .button-secondary,.th-theme-notice p,
    .tablinks.get-child{
        display: none!important;
    }
  </style>';
}
add_action('customize_controls_print_styles', 'th_hot_shop_customizer_custom_styles');

function th_hot_shop_customizer_custom_styles() {
  echo '<style>
    #customize-control-open_shop_main_header_layout label[for=open_shop_main_header_layout-mhdrone].ui-state-active img{
        border: 1px solid #00b6ff;
        box-shadow: 0 0 5px #3ec8fe;
    }
  </style>';
}