<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package markito
 */

get_header();
?> 
<!---404 page-->
<section class="ws-section-spacing">
  <div class="container">
      <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
              <div class="search-error-wrapper">
                   <h1>                 
                    <?php 
                    if ( get_theme_mod( "markito_Developed_404_Page_Main_Title" ) ) {
                        echo esc_html(get_theme_mod( "markito_Developed_404_Page_Main_Title" ));
                    } else{ 
                        echo esc_html__('404', 'markito');
                    }?> 
                   </h1>
                   <h2>
                      <?php 
                        if ( get_theme_mod( "markito_Developed_404_Page_Sub_Title" ) ) {
                            echo esc_html(get_theme_mod( "markito_Developed_404_Page_Sub_Title" ));
                        } else{ 
                            esc_html_e( "Sorry We Can't Find That Page!", "markito" );
                        }?> 
                   </h2>
                   <p class="home-link">
                        <?php 
                            if ( get_theme_mod( "markito_Footer_404_Page_Description_Settings" ) ) {
                                echo esc_html(get_theme_mod( "markito_Footer_404_Page_Description_Settings" ));
                            } else{ 
                                esc_html_e( "We are sorry, the page you have requested is not available..", "markito" );
                            }
                        ?> 
                   </p>

                   <?php $Markito_404_Page_Button_background = get_theme_mod('Markito_404_Page_Button_background');
                   if( !empty($Markito_404_Page_Button_background) ) : ?>

                        <style type="text/css" id="diwp-theme-option-css">

                            a.buy-now {
                                background-color: <?php echo $Markito_404_Page_Button_background; ?> !important;
                                padding: 12px 35px;
                                color: #fff !important;
                                font-size: 16px;
                                text-transform: uppercase;
                                font-weight: 600;
                                border-radius: 8px;
                                display: inline-block;
                                text-decoration: none !important;
                            }

                        </style>    
                
                    <?php
                
                    endif; ?>

                    <a href="<?php echo esc_url(home_url()); ?>" class="buy-now">
                       <?php 
                            if ( get_theme_mod( "markito_Developed_404_Page_Button_Label" ) ) {
                                echo esc_html(get_theme_mod( "markito_Developed_404_Page_Button_Label" ));
                            } else{ 
                                esc_html_e( 'Back to home page.', 'markito' );
                            }
                        ?> 
                    </a>
              </div>
          </div>
      </div>
  </div>
</section> 
<!---404 page-->
<?php get_footer(); ?>