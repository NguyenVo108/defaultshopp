<?php // Template Name: Home Page ?>
<?php get_header(); 
	get_template_part('home', 'banner'); 
	
	if(get_theme_mod('markito_enable_service','1')==1) {
	get_template_part('home', 'service'); }
	
	if(get_theme_mod('markito_enable_category','1')==1) {
	get_template_part('home', 'category'); }
	
	if(get_theme_mod('markito_enable_about','1')==1) {
	get_template_part('home', 'about'); }
	
    get_template_part( 'WooCommerce', 'Sider' ); 
    get_template_part('home', 'blog'); 
get_footer();