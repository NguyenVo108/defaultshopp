<?php

/**
 * Loop Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}

global $product;
?>

<div class="hrix-price-add-to-cart">
	<?php if ($price_html = $product->get_price_html()) : ?>
		<span class="price"><?php echo $price_html; ?></span>
	<?php endif; ?>
	<div>
		<?php
		echo apply_filters(
			'woocommerce_loop_add_to_cart_link', // WPCS: XSS ok.
			sprintf(
				'<a href="%s" data-quantity="%s" value="%s" data-product_id="%s" data-product_sku="%s" class="%s addtocartbutton ajax_add_to_cart add_to_cart_button add-cart" %s>%s</a>',
				esc_url($product->add_to_cart_url()),
				esc_attr(isset($args['quantity']) ? $args['quantity'] : 1),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_id() ),
				esc_attr( $product->get_sku() ),
				esc_attr(isset($args['class']) ? $args['class'] : 'button'),
				isset($args['attributes']) ? wc_implode_html_attributes($args['attributes']) : '',
				wp_kses_post('<i class="fab fa-opencart"></i>')
			),
			$product,
			$args
		);
		?>
	</div>
</div>