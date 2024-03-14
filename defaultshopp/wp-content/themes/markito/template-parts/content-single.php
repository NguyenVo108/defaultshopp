<div class="blog-detail-img">
<?php the_post_thumbnail( ); ?>
</div>
<div class="blog-detail-content">
    <h3 class="blog-detail-title"><?php the_title(); ?></h3>
    <ul class="detail-meta-tag">
        <li><i class="fas fa-user"></i> <?php esc_html_e('By','markito');?> <?php echo esc_html( get_the_author() ); ?></li>
        <li><i class="fas fa-comment"></i><?php comments_number(); ?></li>
        <?php if(has_tag()){ ?>
	        <li><i class="fas fa-tag icon"></i> <?php the_tags('',' , '); ?></li>
	    <?php } ?>
    </ul>
    <div class="blog-detail-text"> <?php the_content(); ?> </div>