<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package markito
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function markito_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'markito_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function markito_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'markito_pingback_header' );

/**
 * Custom Comment List
*/ 
function markito_comment_list( $comment, $args, $depth ) {

    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    } 
    ?>
    <<?php echo ''.esc_attr($tag); ?> class="clearfix" id="comment-<?php comment_ID() ?>">
    <?php $avatar_url = get_avatar_url( $comment, $args['avatar_size'] ); 
    if($avatar_url ):?>
        <div class="comment-user">
            <?php if ($args['avatar_size'] != 0) echo wp_kses_post(get_avatar($comment, $args['avatar_size'])); ?>
        </div>
    <?php endif;?>
    <div class="comment">
		<div class="comment_detail <?php  if(!$avatar_url ): echo "noprofile"; endif;?>"> 

			<h5> <?php comment_author(); ?> </h5> 
			
			<?php comment_reply_link(array_merge($args, array('reply_text' => __('<i class="fas fa-reply"></i>', 'markito'),'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>

            <span><?php esc_html(comment_date()); ?></span>
			
			
			<?php if ( $comment->comment_approved == '0' ) : ?>

				<p class="comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'markito' ); ?></p>
			
			<?php endif; ?> 
			<p><?php comment_text(); ?> </p>
		</div>
    </div>
    
<?php 
} 

add_filter('woocommerce_checkout_fields', 'markito_add_Bootstrap_Checkout_Fields' );
function markito_add_Bootstrap_Checkout_Fields($fields) {
    foreach ($fields as &$fieldset) {
        foreach ($fieldset as &$field) {
            // if you want to add the form-group class around the label and the input
            $field['class'][] = 'form-group'; 

            // add form-control to the actual input
            $field['input_class'][] = 'form-control';
        }
    }
    return $fields;
}

function markito_theme_page_shop_pagination() {

    global $wp_query;
    
    $big = 999999999; // need an unlikely integer
    
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-wrap"><ul class="pagination">';
        foreach ( $pages as $page ) {
                echo "<li>". wp_kses_post($page)."</li>";
        }
       echo '</ul></div>';
        }
}
add_action( 'markito_marwoocommerce_shop_pagination' , "markito_theme_page_shop_pagination" ); 