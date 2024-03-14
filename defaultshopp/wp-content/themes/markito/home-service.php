<section class="content-card">
	<div class="container">
		<div class="row justify-content-center">
		<?php $markito_service_repeater = get_theme_mod('markito_service_repeater', json_encode( array(array(
		"icon_value" => "fas fa-truck" ,
		"title" => "World Delivery", 
		"text" => "Available in most metros on selected in-stock products" ,
		"link" => "#", 
		"id" => "customizer_repeater_56d7ea7f40f56" ),
		array(
		"icon_value" => "fas fa-comments" ,
		"title" => "24/7 Support", 
		"text" => "Have a question? Call a Specialist or chat online for help" ,
		"link" => "#", 
		"id" => "customizer_repeater_56d7ea7f40f57" ),
		array(
		"icon_value" => "fas fa-money-check" ,
		"title" => "Secure Payment", 
		"text" => "Get 3% Daily Cash with special financing offers from us" ,
		"link" => "#", 
		"id" => "customizer_repeater_56d7ea7f40f58" ),
		)) ); 
		$markito_service_repeater_decoded = json_decode($markito_service_repeater);
		foreach($markito_service_repeater_decoded as $markito_service){ ?>
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="single-content wow fadeInUp" data-wow-delay=".25s" data-wow-duration="1s" data-wow-iteration="1">
					<div class="content-icon">
					<i class="fa <?php echo $markito_service->icon_value; ?>"></i>
					</div>
					<div class="content-content">
					<h4 class="heading">
					<?php echo $markito_service->title; ?></h4>
					<p><?php echo $markito_service->text; ?></p>
					<a href="<?php echo $markito_service->link; ?>" class="slider-btn more"><?php esc_html_e('Read More','markito'); ?></a>
					</div>
				</div>
			</div>
		<?php } ?>
 		</div>
	</div>
</section>