<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package markito
 */
?>

<div class="col-lg-6 col-md-6 col-sm-12">
	<div class="blog-card">
		<div class="blog-img">
			<a href="<?php the_permalink(); ?>">
			    <img src="<?php echo (has_post_thumbnail()) ? esc_url(the_post_thumbnail_url( 'medium' )) : esc_url(get_template_directory_uri()).'/assets/images/no-image.jpg'; ?>">
		    </a>		   
				<span class="date">								
				    <?php echo esc_html(get_the_date('d M Y')) ?> 
				</span>
			</div>
			<div class="blog-content">
				<ul class="meta-tag">
					<li><i class="fas fa-user"></i> <?php esc_html_e('By','markito');?> <?php echo esc_html( get_the_author() ); ?></li>
					<li><i class="fas fa-thumbs-up"></i><?php comments_number(); ?></li>
					<?php if(has_tag()){ ?>
                <li><i class="fas fa-tag icon"></i> <?php the_tags('',' , '); ?></li>
            <?php } ?>
				</ul>
			<?php the_title( sprintf( '<h3><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
			<?php the_excerpt(); ?>
		</div>
	</div>
</div>