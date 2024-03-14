<section class="ws-section-spacing category-item-area">
   <div class="container">
   <div class="row">
         <div class="col-lg-12">
            <h3 class="title"><?php if( get_theme_mod( 'markito_Category_Title_Setting' ) ) :
					echo esc_html(get_theme_mod( 'markito_Category_Title_Setting' ));
				else :
					esc_html_e('Shop by Category' , 'markito');  
				endif;
			?></h3>
            <div class="saprater title-bottom-spacing">
               <ul>
                  <li class="saprater-box"></li>
                  <li class="saprater-box"></li>
                  <li class="saprater-box"></li>
               </ul>
            </div>
         </div>
      </div>
      <div class="row wow fadeInUp" data-wow-delay=".25s" data-wow-duration="1s" data-wow-iteration="1">

         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="product-banner-item">
               <div class="product-banner-thumb">
                  <a href="<?php the_permalink(); ?>">
					 <img src="<?php if( get_theme_mod( 'markito_Category_Image_One' ) ) :
                        echo esc_url(get_theme_mod( 'markito_Category_Image_One' ));
                    else :
                        echo esc_url(get_template_directory_uri(). '/assets/images/1.png');  
                    endif;
                    ?>">
                  </a>
               </div>
               <div class="product-banner-content">
			   <?php if(get_theme_mod( 'markito_category_one' )) { ?>
                  <h2 class="product-banner-title"> 
				  <?php $id = get_theme_mod( 'markito_category_one' );
				  $term = get_term_by( 'id', $id, 'product_cat' );
				  $link = get_term_link( $id, 'product_cat' );
				  echo $term->name; ?></h2>
				  <a class="slider-btn" href="<?php echo $link; ?>"><?php esc_html_e('Shop Now','markito'); ?></a>
			   <?php } else { ?> <h2 class="product-banner-title"> <?php esc_html_e('Smart Phone With Pen','markito'); ?> </h2>
                  <a class="slider-btn" href="#"><?php esc_html_e('Shop Now','markito'); ?></a>
				  <?php } ?>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="product-banner-item">
               <div class="product-banner-thumb">
                  <a href="<?php the_permalink(); ?>">
                     <img src="<?php if( get_theme_mod( 'markito_Category_Image_One' ) ) :
                        echo esc_url(get_theme_mod( 'markito_Category_Image_One' ));
                    else :
                        echo esc_url(get_template_directory_uri(). '/assets/images/1.png');  
                    endif;
                    ?>">
                  </a>
               </div>
               <div class="product-banner-content">
			   <?php if(get_theme_mod( 'markito_category_two' )) { ?>
                  <h2 class="product-banner-title"> 
				  <?php $id = get_theme_mod( 'markito_category_two' );
				  $term = get_term_by( 'id', $id, 'product_cat' );
				  $link = get_term_link( $id, 'product_cat' );
				  echo $term->name; ?></h2>
				  <a class="slider-btn" href="<?php echo $link; ?>"><?php esc_html_e('Shop Now','markito'); ?></a>
			   <?php } else { ?> <h2 class="product-banner-title"> <?php esc_html_e('Smart Phone With Pen','markito'); ?> </h2>
                  <a class="slider-btn" href="#"><?php esc_html_e('Shop Now','markito'); ?></a>
				  <?php } ?>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>