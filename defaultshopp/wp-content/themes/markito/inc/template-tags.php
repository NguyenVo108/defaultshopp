<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package markito
 */

if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;


if (!function_exists('markito_display_woo_item')) {

    function markito_display_woo_item() {
        ?>	
        <a class="cart cart-contents" href="<?php echo esc_url(wc_get_cart_url()); ?>" data-tooltip="<?php esc_attr_e('Mini Cart', 'markito'); ?>" title="<?php esc_attr_e('Cart', 'markito'); ?>">
           <i class="fab fa-opencart"></i><span class="count"><?php if(WC()->cart) { echo wp_kses_data(WC()->cart->get_cart_contents_count()); } ?></span>
        </a>
        <?php
    }

}

if (!function_exists('markito_header_add_to_cart_fragment')) {
    add_filter('woocommerce_add_to_cart_fragments', 'markito_header_add_to_cart_fragment');

    function markito_header_add_to_cart_fragment($fragments) {
        ob_start();

        markito_display_woo_item();

        $fragments['a.cart-contents'] = ob_get_clean();

        return $fragments;
    }
}