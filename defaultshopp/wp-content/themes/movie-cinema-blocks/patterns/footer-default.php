<?php
/**
 * Footer Default
 * 
 * slug: footer-default
 * title: Footer Default
 * categories: movie-cinema-blocks
 */

return array(
    'title'      =>__( 'Footer Default', 'movie-cinema-blocks' ),
    'categories' => array( 'movie-cinema-blocks' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"color":{"background":"#2b2b35"}},"textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-text-color has-background has-link-color" style="background-color:#2b2b35"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"20px","left":"20px"}}},"className":"alignwide is-footer wow fadeInUp"} -->
<div class="wp-block-columns alignwide is-footer wow fadeInUp" style="padding-top:50px;padding-right:20px;padding-bottom:50px;padding-left:20px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"25px"}},"textColor":"background","fontFamily":"lexend-deca"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-lexend-deca-font-family" style="font-size:25px"><strong>'. esc_html('About Us','movie-cinema-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"2.2"}},"className":"footer-about","fontSize":"small","fontFamily":"lexend-deca"} -->
<p class="footer-about has-lexend-deca-font-family has-small-font-size" style="line-height:2.2">'. esc_html('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"fontSize":"extra-small","fontFamily":"lexend-deca"} -->
<div class="wp-block-column has-lexend-deca-font-family has-extra-small-font-size"><!-- wp:heading {"style":{"typography":{"fontSize":"25px"}},"textColor":"background"} -->
<h2 class="wp-block-heading has-background-color has-text-color" style="font-size:25px"><strong>'. esc_html('Quick Links','movie-cinema-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:navigation {"className":"footer-menu-box","layout":{"type":"flex","justifyContent":"center"},"fontFamily":"lexend-deca"} -->
<!-- wp:navigation-link {"label":"'. esc_html('Home','movie-cinema-blocks') .'","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"'. esc_html('About Us','movie-cinema-blocks') .'","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"'. esc_html('Services','movie-cinema-blocks') .'","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"'. esc_html('Terms \u0026 Condition','movie-cinema-blocks') .'","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"'. esc_html('Privacy Policy','movie-cinema-blocks') .'","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"'. esc_html('Contact Us','movie-cinema-blocks') .'","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"25px"}},"textColor":"background","fontFamily":"lexend-deca"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-lexend-deca-font-family" style="font-size:25px"><strong>'. esc_html('Contact Us','movie-cinema-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"small","fontFamily":"lexend-deca"} -->
<p class="has-text-align-left has-lexend-deca-font-family has-small-font-size"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('support@example.com','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"lexend-deca"} -->
<p class="has-lexend-deca-font-family has-small-font-size"><span class="dashicons dashicons-phone"></span>  +123 456 7890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small","fontFamily":"lexend-deca"} -->
<p class="has-lexend-deca-font-family has-small-font-size"><span class="dashicons dashicons-admin-home"></span>  '. esc_html('123, Red Hills, Chicago,IL, USA','movie-cinema-blocks') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px"}}} -->
<div class="wp-block-column"><!-- wp:heading {"style":{"typography":{"fontSize":"25px"}},"textColor":"background","fontFamily":"lexend-deca"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-lexend-deca-font-family" style="font-size:25px"><strong>'. esc_html('Recent Post','movie-cinema-blocks') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"postsToShow":3,"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38,"fontSize":"medium","fontFamily":"lexend-deca"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"accent","className":"footertext","layout":{"type":"constrained"}} -->
<div class="wp-block-group footertext has-accent-background-color has-background"><!-- wp:paragraph {"align":"center","textColor":"background","className":"has-link-color","fontSize":"medium"} -->

<p class="has-text-align-center has-link-color has-background-color has-text-color has-medium-font-size"><a href="https://www.wpradiant.net/blocks/free-movie-wordpress-theme/">'. esc_html('Movie WordPress Theme ','movie-cinema-blocks') .'</a> By <a href="https://www.wpradiant.net/">'. esc_html('WP Radiant','movie-cinema-blocks') .'</a> | '. esc_html('Proudly powered by','movie-cinema-blocks') .' <a href="https://wordpress.org/">'. esc_html('WordPress','movie-cinema-blocks') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);