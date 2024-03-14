<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
               <h2 class="banner-title"> 
				 <?php if( is_search() ) {
				 	/* translators: 1: blog name(s). */
							printf( esc_html__( 'Results for : %s', 'markito' ), '<span>' . get_search_query() . '</span>' );
						} ?>
			 </h2>
               <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( "Home", "markito" ); ?></a></li>
                     <li class="breadcrumb-item active" aria-current="page">
					    <?php 						
                          if ( is_search() ) {
                          	/* translators: 1: blog name(s). */
							printf( esc_html__( 'Search Results for : %s', 'markito' ), '<span>' .' "' . get_search_query() . '"'.'</span>' );
						}
					   ?>
					</li>
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
					if ( have_posts() ) : ?>

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'search' );

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