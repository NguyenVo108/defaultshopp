<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package markito
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'markito' ); ?></a>
      <!-- Preloader -->
      <div id="preloader"></div>
      <!-- Start-Header-Section -->
      <!-- Menu-start-area -->
      <header>
         <!--Nav-Bar-->
         <div class="topbar">
            <div class="container">
               <div class="row">
                  <div class="top-content">
                     <div class="selec-lang text-white">
                        <?php if( get_theme_mod( 'markito_social_Mobile_Number_Setting' ) ) : ?>
                           <span class='mobile-contact-us'><i class="fas fa-phone"></i>          
                              <?php 
                              if( get_theme_mod( 'markito_social_Mobile_Number_Setting' ) ) :
                                    echo esc_html(get_theme_mod( 'markito_social_Mobile_Number_Setting' ));
                              endif;
                              ?>
                           </span> 
                        <?php endif;?>
                        <?php if( get_theme_mod( 'markito_social_Email_Address_Setting' ) ) : ?>
                           <span>  <i class="fas fa-envelope-open-text"></i>                        
                              <?php 
                              if( get_theme_mod( 'markito_social_Email_Address_Setting' ) ) :
                                    echo esc_html(get_theme_mod( 'markito_social_Email_Address_Setting' )); 
                              endif;
                              ?> 
                           </span>
                        <?php endif;?>
                     </div>
                     <div class="top-socail">
                        <ul>
                           <?php if( get_theme_mod( 'markito_social_Facebook_Account_Url_Section' ) ) : ?>
                              <li>
                                 <a href="<?php if( get_theme_mod( 'markito_social_Facebook_Account_Url_Section' ) ) :
                                          echo esc_url(get_theme_mod( "markito_social_Facebook_Account_Url_Section" )); 
                                       endif;
                                    ?>"><i class="fab fa-facebook-f"></i>
                              </a>
                              </li>
                           <?php endif;?>
                           <?php if( get_theme_mod( 'markito_Social_Google_Account_Link_Setting' ) ) : ?>
                              <li>
                                 <a href="<?php if( get_theme_mod( 'markito_Social_Google_Account_Link_Setting' ) ) :
                                          echo esc_url(get_theme_mod( "markito_Social_Google_Account_Link_Setting" ));
                                       endif;
                                    ?>"><i class="fab fa-google-plus-g"></i></a>
                              </li>     
                           <?php endif;?> 
                           <?php if( get_theme_mod( 'markito_Social_Twitter_Account_Link_Setting' ) ) : ?>
                              <li>
                                 <a href="<?php if( get_theme_mod( 'markito_Social_Twitter_Account_Link_Setting' ) ) :
                                          echo esc_url(get_theme_mod( "markito_Social_Twitter_Account_Link_Setting" )); 
                                       endif;
                                    ?>"><i class="fab fa-twitter"></i>
                                 </a>
                              </li>
                           <?php endif;?> 
                           <?php if( get_theme_mod( 'markito_Social_Linkedin_Account_Link_Setting' ) ) : ?>
                              <li><a href="<?php if( get_theme_mod( 'markito_Social_Linkedin_Account_Link_Setting' ) ) :
                                          echo esc_url(get_theme_mod( "markito_Social_Linkedin_Account_Link_Setting" ));
                                       endif;
                                    ?>"><i class="fab fa-linkedin-in"></i></a>
                              </li>
                           <?php endif;?> 
                           <?php if( get_theme_mod( 'markito_Social_Pinterest_Account_Link_Setting' ) ) : ?>
                              <li><a href="<?php if( get_theme_mod( 'markito_Social_Pinterest_Account_Link_Setting' ) ) :
                                          echo esc_url(get_theme_mod( "markito_Social_Pinterest_Account_Link_Setting" )); 
                                       endif;
                                    ?>"><i class="fab fa-pinterest-p"></i></a>
                              </li>
                           <?php endif;?> 
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-fixed header-one">
            <div class="container">
               <div class="row">
                  <div class="col-lg-2 col-md-12 col-sm-12">
                     <div class="nav-brand">
                        <?php
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        
                        if ( has_custom_logo() ) { 
                           ?>
						      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                              <img style="width: <?php if( get_theme_mod( 'markito_Logo_Site_Width_Setting' ) ) :
                                    echo esc_html(get_theme_mod( 'markito_Logo_Site_Width_Setting' ));
                                 else :
                                    esc_html_e('160' , 'markito');  
                              endif; ?>px; height: <?php if( get_theme_mod( 'markito_Logo_Site_Height_Setting' ) ) :
                                    echo esc_html(get_theme_mod( 'markito_Logo_Site_Height_Setting' ));
                                 else :
                                    esc_html_e('52' , 'markito');  
                              endif; ?>px;" src="<?php echo esc_url($image[0]); ?>"> 
						 </a>
                           <?php
                        }

                        if (display_header_text() == true) { ?>
                           <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                              <?php
                           $markito_description = get_bloginfo( 'description', 'display' );
                           if ( $markito_description || is_customize_preview() ) :
                              ?>
                              <p class="site-description"><?php echo esc_html($markito_description); ?></p>
                           <?php endif; 
                        } ?> 
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
                           <?php
                              wp_nav_menu(
                                 array(
                                    'theme_location' => 'menu-1',
                                    'container'      => 'ul',
                                    'before'         => '',
                                    'items_wrap'     => '<ul class="navbar-nav mr-auto text-left">%3$s</ul>',
                                    'fallback_cb'    => 'markito_primary_navigation_fallback',
                                 )
                              );
                           ?>
                        </div>
                     </nav>
                  </div>
                  <div class="col-lg-2">
                     <div class="login-cart">
                        <a class="nav-user" href="<?php echo esc_url(get_permalink( get_option('woocommerce_myaccount_page_id')) ); ?>"><i class="far fa-user"></i></a>
                        <div class="cart-popup">
                           <?php 
                           if ( class_exists( 'WooCommerce' ) ):
                              markito_display_woo_item(); 
                           endif;
                           ?>
                           <div class="mini-cart-item">
                              <?php 
                              if ( class_exists( 'WooCommerce' ) ): 

                                 the_widget( 'WC_Widget_Cart', 'title=' ); 
                              else: 
                                 echo esc_html__("Woo Plugin Not Insall Or Activate", "markito" );
                              endif; 
                              ?>
                           </div>
                        </div>
                     
                     </div>
                  </div> 
                  <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                  if ( has_custom_logo() ) { 
                  ?>
                     <div class="mobile-menu" data-type="logo" data-link="<?php echo esc_url( home_url('/') ); ?>" data-logo="<?php echo esc_url( $logo[0] ); ?>"> </div>
                  <?php } else{ ?>
                     <div class="mobile-menu" data-type="text" data-link="<?php echo esc_url( home_url('/') ); ?>" data-logo="<?php bloginfo( 'name' ); ?>"> </div>
                  <?php } ?>
               </div>
            </div>
         </div> 
      </header>