<?php if (!function_exists('markito_info_page')) {
	function markito_info_page() {
	$page1=add_theme_page(__('Welcome to Markito', 'markito'), __('About Markito  <i class="fa fa-star theme-icon"></i>', 'markito'), 'edit_theme_options', 'markito', 'markito_display_theme_info_page');
	
	add_action('admin_print_styles-'.$page1, 'markito_admin_info');
	}	
}
add_action('admin_menu', 'markito_info_page');

function markito_admin_info(){
	// CSS
	wp_enqueue_style('bootstrap',  get_template_directory_uri() .'/core/admin/bootstrap.css');
	wp_enqueue_style('admin',  get_template_directory_uri() .'/core/admin/admin-themes.css');
	wp_enqueue_style( 'fontawesome6.4.0', get_template_directory_uri(). '/assets/fontawesome6.5.1/css/all.css');
	wp_enqueue_style('snow-css',  get_template_directory_uri() .'/core/admin/snow.css');
	
	//JS
	//wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap-js',get_template_directory_uri() .'/core/admin/bootstrap.js');
} 
if (!function_exists('markito_display_theme_info_page')) {
	function markito_display_theme_info_page() {
		$theme_data = wp_get_theme(); ?>
	<div class="wrap elw-page-welcome about-wrap seting-page">
	<style>
	
.p-header-bg {
   margin: 25px !important;
}
	</style>
	
<div class="p-header-bg">
<div class="snow"></div>
	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/christmas-offer.jpg" class="img-responsive" style="width:100%;height:auto;" alt=""/>
</div>

    <div class="col-md-12 settings">
         <div class="col-md-9">
            <div class="col-md-12" style="padding:0">
				<?php $wl_th_info = wp_get_theme(); ?>
				<h2><span class="elw_shortcode_heading">Welcome to Markito - Version <?php echo esc_html( $wl_th_info->get('Version') ); ?> </span></h2>
				<p style="font-size:19px;color: #555d66;">Markito is a WooCommerce WordPress theme for online shops, with a beautiful and elegant design. It uses the latest version of the Bootstrap framework. It perfectly integrated WooCommerce and other useful eCommerce plugins. With clean and SEO-optimized coding. The theme provides you with customization options to quickly make changes on your website and see the changes live. And you’ll also easily find the design tools impressive and suitable for your WooCommerce starter theme. </p>
            </div>
			
		</div>
       
        <div class=" col-md-3">
			<div class="update_pro">
				<h3> Upgrade Pro </h3>
				<a class="demo" href="#one">Get Pro In $29</a>
			</div>
		</div>
	</div>

            <!-- Themes & Plugin -->
            <div class="col-md-12  product-main-cont">
                <ul class="nav nav-tabs product-tbs">
				    <li class="active"><a data-toggle="tab" href="#start"> Getting Started </a></li>
                    <li><a data-toggle="tab" href="#themesd"> Markito Premium </a></li>
					<li><a data-toggle="tab" href="#freepro">Free Vs Pro</a></li>
                </ul>

                <div class="tab-content">
				
				
				<div id="start" class="tab-pane fade in active">
                        <div class="space  theme active">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-7 col-md-7 p_plugin_pic">
                                    <h4>Step 1: Create a Homepage</h4>
									<ol>
									<li> Create a new page -> home and publish. </li>
									<li> Go to Appearance -> Customize > Homepage Settings -> select A static page option. </li>
									<li> In "Homepage", select the page that you created as a home page. </li>
									<li> Now Go to Customize -> Theme Options -> Theme General Options. </li>
									<li> select Show Front Page option </li>
									<li> Save changes </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('/post-new.php?post_type=page')); ?>">Add New Page</a>
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                         <div class="img-thumbnail">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" class="img-responsive" alt="img"/>
                                    </div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-12 p_plugin_pic">
                                    <h4>Step 2: Customizer Options Panel </h4>
									<ol>
									<li> Go to Appearance -> Customize > Theme Options </li>
									<li> Theme General Options - Theme General Options use for logo width and height, and add custom css. </li>
									<li> Theme Slider Options - It is use to add slider image, title, description and enable/disable slider on homepage. </li>
									<li> Service Options - It is use to add service icon, title, description and enable/disable service on homepage. </li>
									<li> Portfolio Options - It is use to add portfolio image, title, link and enable/disable portfolio on homepage. </li>
									<li> Home Blog Options - Use to add blog title, description, blog excerpt length and enable/disable blog section on homepage and select category. </li>
									<li> Typography Settings - use to change the font of the site.  </li>
									<li> Social Options - enable/disable social option on header and footer, add social links, phone number, address and Email-ID. </li>
									<li> Footer Call-Out Options - use to add Footer callout Title, Footer callout Button Text, Footer callout Button Link and Footer callout Icon </li>
									<li> Footer Options - Use to add Customization text, developed by text and developed by link. </li>
									<li> Home Page Layout Option - use for front page section order and box layout option. </li>
									</ol>
									<a class="add_page" target="_blank" href="<?php echo esc_url(admin_url('customize.php')); ?>">Go to Customizer</a>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a target="_blank" id="one" href="https://www.infigosoftware.in/enigma/">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
				
				<!-- end 1st tab -->
				
				
                    <div id="themesd" class="tab-pane fade">
                        <div class="space theme">

                            <div class=" p_head theme">
                                <!--<h1 class="section-title">WordPress Themes</h1>-->
                            </div>							

                            <div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-5 p_plugin_pic">
                                    <div class="img-thumbnail">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Markito.png" class="img-responsive" alt="img"/>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-5 col-md-5 p_plugin_desc">
                                    <div class="row p-box">
                                        <div>
                                            <p><strong>Description: </strong>Markito Premium is a modern eCommerce WordPress Theme for online stores with clean and modern designs. Its suitable for creating eCommerce site for selling clothing, fashion, high fashion, men fashion, women fashion, accessories, kids, watches, shoes & much more online.Markito Premium theme  is cross-browser compatible fully responsive and retina ready WordPress theme. It includes an awesome slider, category section, recent product section, rich color changer, additional page options, theme option panel and much more. Compatible with Contact Form 7 & Woo Commerce Plugin.</p>
                                        </div>
										<p><strong>Tags: </strong>clean, responsive, portfolio, blog, e-commerce, Business, WordPress, Corporate, dark, real estate, shop, restaurant.</p>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-3 col-md-2 p_plugin_pic">
                                    <div class="price1">
                                        <span class="currency">USD</span>
                                        <span class="price-number">$<span>29</span></span>
                                    </div>
                                    <div class="btn-group-vertical">
                                        <a class="btn btn-primary btn-lg" href="#two">Detail</a>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery">
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/gurdian.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="#">Guardian Premium WordPress Theme</a></h4>
										</div>
                                    </div>
									
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/corporal2.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="#">Corporal Premium WordPress Theme</a></h4>
										</div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4 col-md-4 p_plugin_pic">
                                    <div class="img-thumbnail pro_theme">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/digicrew4.png" class="img-responsive" alt="img"/>
										<div class="btn-vertical">
										<h4 class="pro_thm">
                                        <a href="#">Digicrew Premium WordPress Theme</a></h4>
										</div>
                                    </div>
                                </div>
                            </div>
							
							
							<div class="row p_plugin blog_gallery visit_pro">
                                <p>Visit Our Latest Pro Themes & See Demos</p>
								<p style="font-size: 17px !important;">We have put in a lot of effort in all our themes, free and premium both. Each of our Premium themes has a corresponding free version so that you can try out the theme before you decide to purchase it.</p>
								<a target="_blank" id="two" href="https://www.infigosoftware.in/enigma/">Visit Themes</a>
                            </div>	
                        </div>
                    </div>
					
					<div id="freepro" class="tab-pane fade">
							<div class=" p_head theme">
                                
                            </div>
						<div class="row p_plugin blog_gallery">		
						<div class="columns">
						  <ul class="price">
							<li class="header" style="background:#31A3DD">Markito</li>
							<li class="grey">Features</li>
							<li>Theme Option Panel</li>
							<li>Front Page</li>
							<li>Unlimited Color Skins</li>
							<li>Multiple Background Patterns</li>
							<li>Multiple Theme Templates</li>
							<li>3 Portfolio Layout</li>
							<li>3 Page Layout</li>
							<li>Multilingual</li>
							<li>Blog Page(Variations)</li>
							<li>Service Page Template</li>
						  </ul>
						</div>
						
						 <div class="columns">
						  <ul class="price">
							<li class="header">Free</li>
							<li class="grey">$ 00</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-close"></i></li>
							<li><i class="fa fa-close"></i></li>
						  </ul>
						</div>

						<div class="columns">
						  <ul class="price">
							<li class="header" style="background-color:#31A3DD">Markito Pro</li>
							<li class="grey">$ 29</li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<li><i class="fa fa-check"></i></li>
							<!--<li class="grey">
								<a href="https://www.infigosoftware.in/enigma/" target="_blank" class="pro_btn">Visit Demo</a> 
								</li>-->
						  </ul>
						</div>
						</div>
					</div>
                </div>
            </div>            
<?php
	}
}
?>