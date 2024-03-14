<?php

/**
 * honrix 404 content page
 *
 * @package honrix
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

?>
    <div id="content" class="honrix-entry single <?php echo esc_attr(get_theme_mod('honrix_boxed', 'boxed')) == 'boxed' ? 'container' : 'container-fluid'; ?>">
        <div class="honrix-content py-4">
            <?php is_rtl() ? get_sidebar('right') : get_sidebar('left'); ?>
            <article class="post">
                <div class="entry-header">
                    <h2 class="entry-title"><?php esc_html_e('404 Error', 'honrix'); ?></h2>
                    <div class="line"></div>
                </div>
                <div class="entry-content">
                    <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for.', 'honrix'); ?></p>
                </div>
            </article>
            <?php is_rtl() ? get_sidebar('left') : get_sidebar('right'); ?>

        </div>
    </div>
<?php
get_footer();
