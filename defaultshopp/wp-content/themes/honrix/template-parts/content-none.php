<?php

/**
 * honrix none content page
 *
 * @package honrix
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<div id="content" class="honrix-entry single <?php echo esc_attr(get_theme_mod('honrix_boxed', 'boxed')) == 'boxed' ? 'container' : 'container-fluid'; ?>">
    <div class="honrix-content py-4">
        <?php is_rtl() ? get_sidebar('right') : get_sidebar('left'); ?>
        <article class="post">
            <div class="entry-header">
                <h2 class="entry-title"><?php esc_html_e('No Post Yet', 'honrix'); ?></h2>
                <div class="line"></div>
            </div>

            <div class="entry-content">
                <?php if (is_home() && current_user_can('publish_posts')) : ?>

                    <p><?php printf(
                            wp_kses(
                                /* translators: 1: link to new post */
                                __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'honrix'),
                                array(
                                    'a' => array(
                                        'href' => array(),
                                    ),
                                )
                            ),
                            esc_url(admin_url('post-new.php'))
                        ); ?></p>

                <?php elseif (is_search()) : ?>

                    <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'honrix'); ?></p>

                <?php else : ?>

                    <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for.', 'honrix'); ?></p>

                <?php endif; ?>
            </div>
        </article>
        <?php is_rtl() ? get_sidebar('left') : get_sidebar('right'); ?>

    </div>
</div>