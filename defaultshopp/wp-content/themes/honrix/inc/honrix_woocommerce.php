<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    ob_start();
    ?>
    <span class="minicart-icon-count">
        <?php 
        if (WC()->cart->get_cart_contents_count() > 1) {
            printf(esc_html__('%d Items', 'honrix'), WC()->cart->get_cart_contents_count());
        } else {
            printf(esc_html__('%d Item', 'honrix'), WC()->cart->get_cart_contents_count());
        } ?>
    </span>
    <?php
    $fragments['.minicart-icon-count'] = ob_get_clean();

    return $fragments;
});

add_filter('woocommerce_add_to_cart_fragments', function ($fragments) {
    ob_start(); ?>
    <div class="minicart-content">
        <?php woocommerce_mini_cart(); ?>
    </div>
    <?php
    $fragments['.minicart-content'] = ob_get_clean();

    return $fragments;
});
