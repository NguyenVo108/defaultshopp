<?php
/**
 * Header
 * 
 * slug: header
 * title: Header
 * categories: header
 */

return array(
    'title'      =>__( 'Header', 'movie-cinema-blocks' ),
    'categories' => array( 'movie-cinema-blocks' ),
    'content'    => '<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"className":"header-box1","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group header-box1" style="padding-top:0;padding-bottom:0"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","bottom":"0","right":"var:preset|spacing|40","left":"0"}},"color":{"background":"#f3f3f3"}}} -->
<div class="wp-block-columns has-background" style="background-color:#f3f3f3;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:0"><!-- wp:column {"width":"9.8%","backgroundColor":"accent"} -->
<div class="wp-block-column has-accent-background-color has-background" style="flex-basis:9.8%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%"><!-- wp:site-title /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"51%","className":"is-vertically-aligned-top menu-box"} -->
<div class="wp-block-column is-vertically-aligned-center is-vertically-aligned-top menu-box" style="flex-basis:51%"><!-- wp:navigation {"className":"is-head-menu","layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Projects","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact Us","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"https://www.wpradiant.net/blocks/cinema-wordpress-theme/","kind":"custom","className":"getpro"} /-->

<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:buttons {"className":"header-download-button","layout":{"type":"flex","justifyContent":"right"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons header-download-button" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"backgroundColor":"accent","textColor":"background","style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"className":"theme-btn","fontSize":"small","fontFamily":"lexend-deca"} -->
<div class="wp-block-button has-custom-font-size theme-btn has-lexend-deca-font-family has-small-font-size"><a class="wp-block-button__link has-background-color has-accent-background-color has-text-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><strong>'. esc_html('DOWNLOAD APP','movie-cinema-blocks') .'</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->',
);