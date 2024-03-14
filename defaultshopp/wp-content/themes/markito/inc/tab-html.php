   <?php
        /**
            * 
            * @package Markito WordPress theme
            * 
            * @since Markito 1.0.3
            * 
        **/
    ?> 
    <div class="wrap-th about-wrap-th theme_info_wrapper">
        <div class="header">
            <!-- themehunkhemes-badge wp-badge-->
            <div class="th-option-area">
                <div class="th-option-top-hdr">
                    <div class="col-1">
                        <div class="logo-img">
                        <a target="_blank" href="<?php echo 'https://wordpress.org/themes/markito/' ?>" class=""> 
                            <span class="logo-image">
                                <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/screenshot.png'); ?>"/>
                            </span>
                        </a>
                    </div>
                    </div>
                    <div class="col-2">
                        <div class="th-option-heading">
                            <h2><?php  echo $theme_header['welcome']; ?></h2>
                            <span><?php echo $theme_header['welcome_desc']; ?></span>
                        </div>
                        <span class="version"><?php echo $theme_header['v']; ?></span>
                        <span><?php echo _e('FREE THEME','markito'); ?></span>
                    </div>
                </div>
            </div>
        </div> <!-- /header -->
    </div>

    <div class="content-wrap">
        <div class="main">
            <div class="tab-left" >

                <!-- Tab content -->
                <div id="Welcome" class="tabcontent active">
                    <div class="rp-two-column"> 
                        <?php include('welcome.php' ); ?>
                    </div>  <!-- close twocolumn -->
                </div> 

            </div> <!-- tab div close -->

            <div class="sidebar-wrap">
                <div class="sidebar">
                <?php require get_template_directory() . '/inc/sidebar.php'; ?>
                </div>
            </div>
        </div>
    </div>