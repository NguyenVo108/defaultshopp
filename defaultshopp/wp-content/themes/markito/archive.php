<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markito
 */

get_header();
?>
<!---Start-main-section-->
<section class="page-slider">
   <div class="hero-banner-content">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <h2 class="banner-title"> <?php the_archive_title(); ?></h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( "Home", "markito" ); ?></a></li>
                     
							   <?php 						
							   if( is_category() ){

									?><li class="breadcrumb-item active" aria-current="page"> <?php
                              echo esc_html__('Archive by category', 'markito').' "'.   single_cat_title('', false).'"';
                           ?> </li> <?php   
									
								} elseif ( is_tag() ) {

                           ?><li class="breadcrumb-item active" aria-current="page"> <?php
									   echo esc_html__('Posts tagged for ', 'markito').' "' . single_tag_title('', false) . '"';
                           ?> </li> <?php

								} elseif ( is_year() ) {
                           ?><li class="breadcrumb-item active" aria-current="page"> <?php
                              echo esc_html( get_the_time( 'Y' ) );
                           ?> </li> <?php

                        } elseif ( is_month() ) {

                           echo ' <li class="breadcrumb-item"><a style="text-decoration: none;
                           color: inherit;" href="' . esc_url( get_year_link( get_the_time('Y') ) ) . '">' . esc_html( get_the_time('Y') ) . '</a></li>';
                           echo '<li class="breadcrumb-item active" aria-current="page">'.esc_html( get_the_time('F') )."</li>";
                    }
							   ?>
							
                  </ol>
               </nav>
            </div>
         </div>
      </div>
   </div>
</section>
<!---End-Main-section-->
<!---Start-Shop-section-->
<section class="ws-section-spacing" id="primary">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="row  justify-content-center">
               <?php
               if ( have_posts() ) :

                  /* Start the Loop */
                  while ( have_posts() ) :
                     the_post();

                     /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                     get_template_part( 'template-parts/content', get_post_type() );

                  endwhile;
               else :
                  get_template_part( 'template-parts/content', 'none' );
               endif;
               ?>
            </div>
            <div class="row  justify-content-center">
               <?php 
               /* pagination / Previous/next page navigation */
               the_posts_pagination( array(
                  'prev_text'          => '<i class="fas fa-angle-double-left"></i>',
                  'next_text'          => '<i class="fas fa-angle-double-right"></i>',
               ) );
               ?>
            </div>
         </div>
         <div class="col-lg-4">
            <?php get_sidebar(); ?>
         </div>
      </div>
   </div>
</section>
<!---End-Shop-section-->
<?php get_footer(); ?>
