<div class="ws-section-spacing about-area">
         <div class="container">
         <div class="row">
         <div class="col-lg-12">
            <h3 class="title">
			<?php if( get_theme_mod( 'markito_Home_About_Title_Setting' ) ) :
					echo esc_html(get_theme_mod( 'markito_Home_About_Title_Setting' ));
				else :
					esc_html_e('About Us' , 'markito');  
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
            <div class="row">
               <div class="col-lg-6">
				<a href="<?php the_permalink(); ?>">
					<img src="<?php if( get_theme_mod( 'markito_About_Image_Upload' ) ) :
                        echo esc_url(get_theme_mod( 'markito_About_Image_Upload' ));
                    else :
                        echo esc_url(get_template_directory_uri(). '/assets/images/about_img.png');  
                    endif;
                    ?>">
                </a>
               </div>
               <div class="col-lg-6">
                  <div class="full">
                     <div class="about_box_heading left_head">
                        <h2><span class="style_head"><?php if( get_theme_mod( 'markito_Home_About_Sub_Title_Setting' ) ) :
                                 echo esc_html(get_theme_mod( 'markito_Home_About_Sub_Title_Setting' ));
                              else :
                                 esc_html_e('Our Company' , 'markito');  
                              endif;
                        ?></span></h2>
                     </div>
                  </div>
                  <div class="full">
                    <p><?php if( get_theme_mod( 'markito_About_Section_Content' ) ) :
                        echo esc_html(get_theme_mod( 'markito_About_Section_Content' ));
                    else :
                        esc_html_e('Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.' , 'markito');  
                    endif;
                    ?></p>
                  </div>
                  <div class="full margin_top_30">
                     <a class="slider-btn" href="<?php if( get_theme_mod( 'markito_About_Button_Link' ) ) :
                              echo esc_html(get_theme_mod( "markito_About_Button_Link" ));
                           else :
                              echo esc_url("#");  
                           endif;
                      ?>"><?php esc_html_e('Read More','markito'); ?></a>
                  </div>
               </div>
            </div>
         </div>
      </div>