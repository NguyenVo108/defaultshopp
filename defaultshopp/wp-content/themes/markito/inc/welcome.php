    <?php
        /**
            * 
            * @package Markito WordPress theme
            * 
            * @since Markito 1.0.3
            * 
        */
    ?>    
    <!--- Tab First -->
    <div class="theme_link">
        <h3>
            <?php _e('Customize Your Website','markito'); ?> 
        </h3>
        <p> 
            <?php _e('Markito Theme support live customizer for Theme set up. In Customizer visible at Home Page can be changed through customize panel.','markito'); ?>    
        </p>
        <p>
            <a href="<?php echo admin_url('customize.php'); ?>" class="button button-primary"><?php _e("Start Customize","markito"); ?></a>
        </p>
    </div>

    <!--- Tab Second -->
    <div class="theme_link">
        <h3><?php _e("Customizer Links","markito"); ?></h3>
        <div class="card-content">
            <div class="columns">

                    <div class="col"> 
                        <a href="<?php echo admin_url('customize.php?autofocus[control]=custom_logo'); ?>" class="components-button is-link"><?php _e("Upload Logo","markito"); ?></a>
                        <hr>
                        <a href="<?php echo admin_url('customize.php?autofocus[section]=colors'); ?>" class="components-button is-link"><?php _e("Colors Section","markito"); ?></a><hr>
                        <a href="<?php echo admin_url('customize.php?autofocus[section]=markito_Home_Banner'); ?>" class="components-button is-link"><?php _e("Home Page Banner","markito"); ?></a>
                        <hr>
                         
                    </div>

                    <div class="col">
                        
                        <a href="<?php echo admin_url('customize.php?autofocus[section]=markito_theme_social_section'); ?>" class="components-button is-link"><?php _e("Social Section","markito"); ?></a><hr>
                        <a href="<?php echo admin_url('customize.php?autofocus[section]=Markito_Theme_Footer_Section'); ?>" class="components-button is-link"><?php _e("Footer Section","markito"); ?></a><hr>
                        <?php
                        if ( class_exists( 'WooCommerce' ) ) {
                            
                            ?>
                            <a href="<?php echo admin_url('customize.php?autofocus[panel]=woocommerce'); ?>" class="components-button is-link"><?php _e("Woocommerce","markito"); ?></a><hr>
                            <?php
                            
                        }  else {
                            ?>
                            <p class="components-button is-link"><?php _e("Woocommerce Not Install Or Active.","markito"); ?></p><hr>
                            <?php
                        }
                        ?>
                    </div>
                    
            </div>
        </div>
    </div>
