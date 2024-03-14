<?php
/**
 * Basic theme functions.
 *
 */

if( ! function_exists( 'markito_primary_navigation_fallback' ) ) :

    /**
     * Markito Theme Callcak Function for primary navigation / menu.
     *
     * @since 1.0.0
     */
    function markito_primary_navigation_fallback() {
        
        echo '<a class="markito_callback_menu_navigation" href="' . esc_url( admin_url( 'nav-menus.php' ) ) . '">' . esc_html__( 'Click Here To Add Menu', 'markito' ) . '</a>';
    }
endif;