<div class="honrix-is-mobile">
    <div class="hrix-top-bar row p-2  m-0">
        <div class="col-12">
            <?php if (is_active_sidebar('honrix_mobile_top_bar')) : ?>
                <?php dynamic_sidebar('honrix_mobile_top_bar'); ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="hrix-site-header row align-items-center p-2  m-0">
        <div class="col-2">
            <?php do_action('honrix_nav_menu'); ?>
        </div>
        <div class="col-8 d-flex justify-content-center">
            <?php do_action('honrix_logo'); ?>
        </div>
        <div class="col-2 d-flex justify-content-end">
            <?php do_action('honrix_header_minicart_mobile'); ?>
        </div>
    </div>
</div>
<div class="honrix-is-pc">
    <?php if (esc_attr(get_theme_mod('honrix_top_bar_display', 'yes')) == 'yes') : ?>
        <div class="hrix-top-bar d-block">
            <div class="py-2 <?php echo esc_attr(get_theme_mod('honrix_boxed', 'boxed') == 'boxed' ? 'container' : 'container-fluid'); ?>">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <?php if (is_active_sidebar('honrix_top_left')) : ?>
                            <?php dynamic_sidebar('honrix_top_left'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4">
                        <?php if (is_active_sidebar('honrix_top_center')) : ?>
                            <?php dynamic_sidebar('honrix_top_center'); ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-4">
                        <?php if (is_active_sidebar('honrix_top_right')) : ?>
                            <?php dynamic_sidebar('honrix_top_right'); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="hrix-site-header position-relative pt-2">
        <div class="<?php echo esc_attr(get_theme_mod('honrix_boxed', 'boxed') == 'boxed' ? 'container' : 'container-fluid'); ?> py-2">
            <div class="row align-items-center">
                <div class="col-3">
                    <?php do_action('honrix_logo'); ?>
                </div>
                <div class="col-5">
                    <?php do_action('honrix_product_search'); ?>
                </div>
                <div class="col-2">
                    <?php if (is_active_sidebar('header_contact')) : ?>
                        <?php dynamic_sidebar('header_contact'); ?>
                    <?php endif; ?>
                </div>
                <div class="col-2 d-flex align-items-center justify-content-end gap-2">
                    <?php do_action('honrix_header_account'); ?>
                    <?php do_action('honrix_header_wishlist'); ?>
                    <?php do_action('honrix_header_minicart'); ?>
                </div>
            </div>

        </div>
        <div class="<?php echo esc_attr(get_theme_mod('honrix_boxed', 'boxed') == 'boxed' ? 'container' : 'container-fluid'); ?>">
            <div class="row align-items-center">
                <div class="col-3">
                    <?php do_action('honrix_browse_cat'); ?>
                </div>
                <div class="col-7">
                    <?php do_action('honrix_nav_menu'); ?>
                </div>
                <div class="col-2 d-flex justify-content-end">
                    <?php if (is_active_sidebar('header_nav_area')) : ?>
                        <?php dynamic_sidebar('header_nav_area'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>