<?php
/**
 * Shop breadcrumb
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/breadcrumb.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     2.3.0
 * @see         woocommerce_breadcrumb()
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!---Start-main-section-->
<section class="page-slider">
   <div class="hero-banner-content">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <?php if( is_product() ) : ?>
                  <h1 class="woocommerce-products-header__title page-title"><?php the_title(); ?></h1>
               <?php endif; ?>   
               <?php if(is_shop()) : ?>
                  <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
               <?php endif; ?>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <?php 
                     if ( ! empty( $breadcrumb ) ) {
                        foreach ( $breadcrumb as $key => $crumb ) {
                           if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
                     			echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
                     		} else {
                     			echo '<span style="background: none;color: #f05036;font-weight: 600;">'. esc_html( $crumb[0] ) .'</span>';
                     		}
                           if ( sizeof( $breadcrumb ) !== $key + 1 ) {
                     			echo esc_html($delimiter);
                     		}
                     	}
                     } ?>
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section> 
<!---End-Main-section-->