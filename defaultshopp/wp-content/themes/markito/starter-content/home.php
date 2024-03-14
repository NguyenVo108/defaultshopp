<?php
/**
 * Home starter content.
 *
 * @package markito\starter_content
 */
return [
    'post_type'    => 'page',
    'post_title'   => _x( 'Home', 'Theme starter content', 'markito' ),
    'post_content' => '

      <!-- End-Menu-area-->
      <main class="main-div home-slider block-columns alignfull">
         <div class="slider-bg">
            <div class="hero-slider-content"">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-7 col-md-12 col-sm-12">
                        <div class="slider-content wow fadeInUp" data-wow-delay=".25s" data-wow-duration="2s" data-wow-iteration="1">
                           <h2 class="hero-sub-title">New Arrivals</h2>
                           <h1 class="hero-title"><span> Shoe Collaction </span></h1>
                                 <!-- wp:heading {"align":"wide","fontSize":"gigantic","style":{"typography":{"lineHeight":"1.1"}}} -->
                              <p class="alignwide has-text-align-wide has-gigantic-font-size hero-text" style="line-height:1.1">' . esc_html_x( 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', 'Theme starter content', 'markito' ) . '</p>
                              <!-- /wp:heading -->
                           <a href="#" class="slider-btn">Shop Now</a>
                        </div>
                     </div>
                     <div class="wp-block-image slider-img">
                        <img src="' . trailingslashit( get_template_directory_uri() ) . 'assets/images/slider-img.png" class="wow fadeInRight" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
    </div>

  <!---Start-Trending-Product-section-->
  <section class="ws-section-spacing">
    <div class="container">
         <div class="row">
        <div class="col-lg-12">
          <h2 class="title">Trending Products</h2>
          <div class="saprater bottom-spacing">
            <ul>
              <li class="saprater-box"></li>
              <li class="saprater-box"></li>
              <li class="saprater-box"></li>
            </ul>
          </div>
        </div>
      </div>
      <!--item-->
      <div class="row">
        <div class="product-slider">
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-1.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
          <!--item-->
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-2.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
          <!--item-->
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-3.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
          <!--item-->
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-4.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
          <!--item-->
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-5.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
          <!--item-->
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-6.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
          <!--item-->
          <div class="new-collection-item">
            <div class="new-collection-item-img">
              <img src="' . trailingslashit( get_template_directory_uri() ) . 'starter-content/img/product-7.jpg" alt="">
            </div>
            <div class="new-collection-item-content">
              <h5><a href="#">Ardene Microfiber T-Shirt</a></h5>  <span>$25</span>
              <a href="#" class="add-to-cart">Add To Cart</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>    
   ',
];