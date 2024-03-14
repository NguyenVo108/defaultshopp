 <!---Start-Trending-Product-section-->
<section class="ws-section-spacing">
  <div class="container">
       <div class="row">
      <div class="col-lg-12">
        <h2 class="title">
          <?php 
              if( get_theme_mod( 'markito_Home_Product_Slider_Heading_Settings' ) ) :
                  echo esc_html(get_theme_mod( "markito_Home_Product_Slider_Heading_Settings" ));
              else :
                  esc_html_e('Trending Products' , 'markito');  
              endif;
          ?>
        </h2>
        <div class="saprater bottom-spacing">
          <ul>
            <li class="saprater-box"></li>
            <li class="saprater-box"></li>
            <li class="saprater-box"></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="row"> 
    <?php 
      if ( class_exists( 'WooCommerce' ) ): 
        $count_pages = wp_count_posts( $post_type_product = 'product' ); 

        $public_product_posts = $count_pages->publish; 

        if ( $public_product_posts >= 5 ) { 
    ?>
    
      <div class="product-slider">

          <?php
              $args = array(
                  'post_type' => 'product',
                  //'posts_per_page' => ,
              );
                $loop = new WP_Query( $args );
                if ( $loop->have_posts() ) {
                   while ( $loop->have_posts() ) : $loop->the_post(); ?>

                      <?php
                         global $woocommerce;
                         $currency = get_woocommerce_currency_symbol();
                         $price = get_post_meta( get_the_ID(), '_regular_price', true);
          ?>
        
        <?php /* item */ ?>
        <div class="new-collection-item">
          <div class="new-collection-item-img">
              <?php 
                  remove_action( "woocommerce_before_shop_loop_item_title", 'woocommerce_show_product_loop_sale_flash' );
                  do_action( 'woocommerce_before_shop_loop_item_title' ); 
              ?>
          </div>
          <div class="new-collection-item-content">
              <?php
                  global $woocommerce;
                  $currency = get_woocommerce_currency_symbol();
                  $price = get_post_meta( get_the_ID(), '_regular_price', true);
              ?>
            <h5><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h5>  
              <?php if($price) : ?>
                      <span> <?php echo esc_html($currency); echo esc_html($price); ?> </span> 
              <?php endif; ?>
              <?php   
              /****
                  * Hook: woocommerce_after_shop_loop_item.
                  *
                  * @hooked woocommerce_template_loop_product_link_close - 5
                  * @hooked woocommerce_template_loop_add_to_cart - 10
              ****/
              do_action( 'woocommerce_after_shop_loop_item' );
              ?>
          </div>
        </div>

          <?php
              endwhile;
              }
              wp_reset_postdata();
          ?>
      </div> 
      <?php  } else {
          ?> 
          <p> <?php esc_html_e('Please Add Minimum 5 WooCommerce Products' , 'markito'); ?> </p> <?php 
      } 
    endif   
    ?>
    </div>
  </div>
</section>