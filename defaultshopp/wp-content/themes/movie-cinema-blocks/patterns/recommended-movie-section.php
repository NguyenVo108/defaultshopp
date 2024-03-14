<?php
/**
 * Recommended Movie Section
 * 
 * slug: recommended-movie-section
 * title: Recommended Movie Section
 * categories: movie-cinema-blocks
 */

return array(
    'title'      =>__( 'Recommended Movie Section', 'movie-cinema-blocks' ),
    'categories' => array( 'movie-cinema-blocks' ),
    'content'    => '<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"80%"}} -->
<div id="about-section" class="wp-block-group"><!-- wp:cover {"url":"'.esc_url(get_template_directory_uri()) .'/assets/images/heading-image.png","id":6,"dimRatio":60,"overlayColor":"primary","minHeight":50,"style":{"border":{"radius":"20px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="border-radius:20px;min-height:50px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-6" alt="" src="'.esc_url(get_template_directory_uri()) .'/assets/images/heading-image.png" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","className":"wow fadeInUp","fontSize":"content-heading"} -->
<h2 class="wp-block-heading has-text-align-center wow fadeInUp has-content-heading-font-size">Recommended Movies</h2>
<!-- /wp:heading --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"verticalAlignment":"center","className":"wow fadeInUp"} -->
<div class="wp-block-columns are-vertically-aligned-center wow fadeInUp"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":9,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie1.png" alt="" class="wp-image-9" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Black Widow','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Action/Sci-fi','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":13,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie2.png" alt="" class="wp-image-13" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('The Boss Baby','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Family/Adventure','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":14,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie3.png" alt="" class="wp-image-14" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Space Jam A Legacy','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Family film','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":15,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie4.png" alt="" class="wp-image-15" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Snake Eyes','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Action/Adventure','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":16,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie5.png" alt="" class="wp-image-16" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('The Forever Purge','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Horror/Action','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":17,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie6.png" alt="" class="wp-image-17" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Escape Room','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Thriller/Psychological horror','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"center","className":"wow fadeInUp"} -->
<div class="wp-block-columns are-vertically-aligned-center wow fadeInUp"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":14,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie3.png" alt="" class="wp-image-14" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Space Jam A Legacy','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Family film','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":9,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie1.png" alt="" class="wp-image-9" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Black Widow','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Action/Sci-fi','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":15,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie4.png" alt="" class="wp-image-15" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Snake Eyes','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Action/Adventure','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":16,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie5.png" alt="" class="wp-image-16" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('The Forever Purge','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Horror/Action','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":17,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie6.png" alt="" class="wp-image-17" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('Escape Room','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Thriller/Psychological horror','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"id":13,"scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/movie2.png" alt="" class="wp-image-13" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"0px","style":"none"},"right":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div id="team-box" class="wp-block-group" style="border-top-style:none;border-top-width:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"textAlign":"left","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"normal","fontFamily":"lexend-deca"} -->
<h3 class="wp-block-heading has-text-align-left has-lexend-deca-font-family has-normal-font-size" style="margin-top:var(--wp--preset--spacing--40);font-style:normal;font-weight:500">'. esc_html('The Boss Baby','movie-cinema-blocks') .'</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"color":{"text":"#8d8da9"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-text-color has-lexend-deca-font-family has-upper-heading-font-size" style="color:#8d8da9;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)">'. esc_html('Family/Adventure','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->',
);