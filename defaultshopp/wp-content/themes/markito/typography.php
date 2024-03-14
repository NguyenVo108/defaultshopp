<?php
add_action( 'customize_register', 'markito_customizer' );
function markito_customizer( $wp_customize ) {
	
	/* Genral section */
	$wp_customize->add_panel( 'markito_theme_option', array('title' => __( 'Typography Options','markito' ), 'priority' => 1) );


}

function markito_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
function markito1_sanitize_checkbox( $input ) {
   if ( $input == 1 ) {
        return 'on' ;
    } else {
        return 'off';
    }
}
function markito_sanitize_integer( $input ) {
    return (int)($input);
}