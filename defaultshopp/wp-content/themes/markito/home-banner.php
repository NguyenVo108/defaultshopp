<!---Start-Slider-Section-->
<main class="main-div home-slider" id="primary">
   <div class="slider-bg ">
      <div class="hero-slider-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-7 col-md-12 col-sm-12">
                  <div class="slider-content wow fadeInUp" data-wow-delay=".25s" data-wow-duration="2s" data-wow-iteration="1">
                     <h2 class="hero-sub-title"> 
                        <?php if( get_theme_mod( 'markito_Home_Banner_Title_Setting' ) ) :
                                 echo esc_html(get_theme_mod( 'markito_Home_Banner_Title_Setting' ));
                              else :
                                 esc_html_e('New Arrivals' , 'markito');  
                              endif;
                        ?>
                     </h2>
                     <h1 class="hero-title"> <span> 
                     <?php if( get_theme_mod( 'markito_Home_Banner_Sub_Title_Setting' ) ) :
                              echo esc_html(get_theme_mod( "markito_Home_Banner_Sub_Title_Setting" ));
                           else :
                              esc_html_e('Shoe Collection' , 'markito');  
                           endif;
                       ?> </span> </h1>
                     <p class="hero-text">
                        <?php  ?>
                        <?php if( get_theme_mod( 'markito_Home_Page_Banner_Section_Content' ) ) :
                                 echo esc_html(get_theme_mod( "markito_Home_Page_Banner_Section_Content" ));
                              else :
                                 esc_html_e('Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.' , 'markito');  
                              endif;
                        ?>
                     </p>
                     <a href="<?php if( get_theme_mod( 'markito_Home_Banner_Button_Url_Setting' ) ) :
                              echo esc_html(get_theme_mod( "markito_Home_Banner_Button_Url_Setting" ));
                           else :
                              echo esc_url("#");  
                           endif;
                      ?>" class="slider-btn">
                     <?php if( get_theme_mod( 'markito_Home_Banner_Button_Text_Setting' ) ) :
                              echo esc_html(get_theme_mod( "markito_Home_Banner_Button_Text_Setting" ));
                           else :
                              esc_html_e('Shop Now' , 'markito');  
                           endif;
                     ?></a>
                  </div>
               </div>
               <div class="slider-img">
                  <img src="<?php if( get_theme_mod( 'markito_Setting_For_Home_Banner_Section_Image_Upload' ) ) :
                                      echo esc_url(get_theme_mod( 'markito_Setting_For_Home_Banner_Section_Image_Upload' ));
                                  else :
                                        echo esc_url(get_template_directory_uri(). '/assets/images/slider-img.png');  
                                  endif;
                    ?>" class="wow fadeInRight" data-wow-delay=".25s" data-wow-duration="1s"  data-wow-iteration="1" alt="">
               </div>
            </div>
         </div>
      </div>
   </div>
</main>
<!---End-Slider-Section-->