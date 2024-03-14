<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markito
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('singlepage'); ?>>
    
    <?php if( has_post_thumbnail() ){ ?>
        <?php the_post_thumbnail(); ?>
        
    <?php } ?>

    <div class="entry-content">
		<?php
		if( is_front_page() ) : 
			    the_content();
			elseif( is_page() ):
			?> <div class='container ws-section-spacing'> <?php
				the_content();
			?> </div> <?php	
		endif;

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'markito' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->

    <?php
    wp_link_pages( 
        array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'markito' ),
            'after'  => '</div>',
        ) 
    );
    ?>
</div>