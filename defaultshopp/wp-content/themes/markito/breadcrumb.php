<?php if( !is_front_page() ) : ?>
   <!---Start-main-section-->
   <section class="page-slider">
      <div class="hero-banner-content">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h2 class="banner-title"> <?php if ( !is_home() ) { the_title(); } ?></h2>
                  <nav aria-label="breadcrumb">
                     <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e( "Home", "markito" ); ?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php if ( is_home() || is_single() ) { echo 'Blog'; } else { the_title(); } ?></li>
                     </ol>
                  </nav>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---End-Main-section-->
<?php endif; ?>