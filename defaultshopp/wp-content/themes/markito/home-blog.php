<!---Start-Blog-Section-->
<section class="ws-section-spacing blog-bg">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <h3 class="title"><?php esc_html_e('Read Our Latest Stories' , 'markito'); ?></h3>
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

            <?php             
            $args = array(
              'post_type' => 'post',
              'post_status' => 'publish',
              'posts_per_page' => 3,
              'ignore_sticky_posts' => 1
            );
            $arr_posts = new WP_Query( $args );
            if ( $arr_posts->have_posts() ) :
                 
              while ( $arr_posts->have_posts() ) :
                  $arr_posts->the_post();
                  ?>
                 <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog-card">
                       <div class="blog-img">
                       <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo (has_post_thumbnail()) ? esc_url(the_post_thumbnail_url( 'medium' ) ): esc_url(get_template_directory_uri()).'/assets/images/no-image.jpg'; ?>">
                       </a>
                       <span class="date"> <?php echo esc_html(get_the_date( 'j M Y' )); ?> </span>
                       </div>
                       <div class="blog-content">
                          <ul class="meta-tag">
                             <li>
                                <?php esc_html_e('By' , 'markito'); ?> 
                                <?php the_author(); ?>
                             </li>
                             <li><?php comments_number(); ?>
                             </li>
                          </ul>
                          <h3> 
                             <a href="<?php echo esc_url( get_permalink() ); ?>"><?php sanitize_text_field(the_title()); ?></a>
                          </h3>
                          <?php the_excerpt(); ?>
                       </div>
                    </div>
                 </div>
              <?php
              endwhile;
          endif; ?>
      </div>
   </div>
</section>
<!---End-Blog-Section-->