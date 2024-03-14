<?php
/**
 * Banner
 * 
 * slug: banner
 * title: Banner
 * categories: movie-cinema-blocks
 */

return array(
    'title'      =>__( 'Banner', 'movie-cinema-blocks' ),
    'categories' => array( 'movie-cinema-blocks' ),
    'content'    => '<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"className":"header-banner-box","layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group alignfull header-banner-box" style="margin-top:0;margin-bottom:0"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"10%","backgroundColor":"accent","className":"is-side-box"} -->
<div class="wp-block-column is-side-box has-accent-background-color has-background" style="flex-basis:10%"><!-- wp:paragraph {"align":"center","textColor":"background","className":"red-header-text","fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-center red-header-text has-background-color has-text-color has-lexend-deca-font-family has-upper-heading-font-size">'. esc_html('LOGIN','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"background","className":"red-header-text","fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-text-align-center red-header-text has-background-color has-text-color has-lexend-deca-font-family has-upper-heading-font-size">'. esc_html('REGISTER','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:image {"align":"center","id":45,"width":"56px","height":"auto","aspectRatio":"1.0769230769230769","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon1.png" alt="" class="wp-image-45" style="aspect-ratio:1.0769230769230769;width:56px;height:auto"/></a></figure>
<!-- /wp:image -->

<!-- wp:image {"align":"center","id":46,"sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image aligncenter size-full"><a href="#"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/icon2.png" alt="" class="wp-image-46"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"className":"wow fadeInUp"} -->
<div class="wp-block-column is-vertically-aligned-center wow fadeInUp" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--80);flex-basis:60%"><!-- wp:paragraph {"textColor":"accent","fontSize":"upper-heading","fontFamily":"lexend-deca"} -->
<p class="has-accent-color has-text-color has-lexend-deca-font-family has-upper-heading-font-size">'. esc_html('Welcome To Our Cinema','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"style":{"typography":{"fontSize":"50px","fontStyle":"normal","fontWeight":"800","lineHeight":"1.4"},"color":{"text":"#2b2b35"}},"className":"is-slide-heading","fontFamily":"lexend-deca"} -->
<h2 class="wp-block-heading is-slide-heading has-text-color has-lexend-deca-font-family" style="color:#2b2b35;font-size:50px;font-style:normal;font-weight:800;line-height:1.4">'. esc_html('Exerience The Magic','movie-cinema-blocks') .'<br>'. esc_html('Of Cinema With Us','movie-cinema-blocks') .'</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.7"},"color":{"text":"#2b2b35"}},"fontSize":"medium","fontFamily":"lexend-deca"} -->
<p class="has-text-color has-lexend-deca-font-family has-medium-font-size" style="color:#2b2b35;line-height:1.7">'. esc_html('It is a long established fact that a reader will distracted by the','movie-cinema-blocks') .' <br>'. esc_html('readable content of a page hen looking at its layout.The point of using','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"className":"theme-btn"} -->
<div class="wp-block-button theme-btn"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">'. esc_html('EXPLORE MORE','movie-cinema-blocks') .'</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"30%","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);flex-basis:30%"><!-- wp:image {"id":9,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="'.esc_url(get_template_directory_uri()) .'/assets/images/banner.png" alt="" class="wp-image-9"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->
',
);