<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package markito
 */

get_header();
?>
      <?php get_template_part( "breadcrumb" ); ?>
      <!---Start-Blog-Detail-section-->
      <section class="ws-section-spacing" id="primary">
         <div class="container">
            <div class="row">

            <div class="col-lg-8">
                  <div class="blog-detail">

                     <?php 
                        while ( have_posts() ) :
                           the_post();

                           get_template_part( 'template-parts/content', 'single' );

                           the_post_navigation(
                              array(
                                 'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'markito' ) . '</span> <span class="nav-title">%title</span>',
                                 'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'markito' ) . '</span> <span class="nav-title">%title</span>',
                              )
                           );

                        endwhile; // End of the loop.
                        ?>
                        <!-- CommentS Show Start Here-->
                        <div class="blog-comment">
                           
                           <?php 
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) : ?>
                                 <?php comments_template();
                             endif;
                           ?> 
                        </div> 
                         <!-- CommentS Show End Here-->
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <?php get_sidebar(); ?>
               </div>
            </div>
         </div>
      </section>
      <!---End-Shop-section-->
<?php get_footer();