<?php
/**
 * Products Component Template
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">


 
	<div class="product_overview_content mb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="product_overview_title">
				<h2 class="h3_title">Cables</h2>

				<div>
				
				</div>
			</div>
						<div class="product_overview_description">
						<div class="filter_by">
						<span class="filter_by_label">Filters by:</span>  
						
						<select name="" id="" class="filter_select">
						<option value="">1</option>
						<option value="">2</option>
						<option value="">3</option>
						<option value="">4</option>
						<option value="">5</option>
					</select>
					</div>
						</div>
						
			
		</div>



		<ul class="products_list style-02 style-03">
			<?php
			$product_items = array(
				array('img' => 'pro-c-01.jpg', 'title' => 'Fire Resistant Cable'),
				array('img' => 'pro-c-02.jpg', 'title' => 'Paired Cable'),
				array('img' => 'pro-c-03.jpg', 'title' => 'Multi Conductor Cable'),
				array('img' => 'pro-c-04.jpg', 'title' => 'Instrumentation Cable'),
				array('img' => 'pro-c-05.jpg', 'title' => 'Single Core Cable'),
				array('img' => 'pro-c-06.jpg', 'title' => 'Wires'),
				array('img' => 'pro-c-07.jpg', 'title' => 'Flexible Cable'),
				array('img' => 'pro-c-08.jpg', 'title' => 'Low Voltage Cables'),
				array('img' => 'pro-c-09.jpg', 'title' => 'Control Cables'),
			);
			$delay = 200;
			foreach ($product_items as $index => $item) :
				$current_delay = $delay + ($index * 50);
			?>
			<li data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo $current_delay; ?>" data-aos-once="true">
				<div class="product_item">
					<div class="product_item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-c-01.jpg" alt="Shielded Cables">
					</div>
					<div class="global_logo_box_bottom">
						<div>
							<h4>Fire Resistant Cable</h4>
							<h3>Lorem ipsum dolor sit amet, consectetur adipiscing.</h3>
						</div>
						<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
						</a>
					</div>
				</div>
			<?php endforeach; ?>

		 
 

	 

			<li data-aos="fade-up" data-aos-duration="800" data-aos-delay="450" data-aos-once="true">
				<div class="product_item">
					<div class="product_item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-c-06.jpg" alt="Insulated Wire">
					</div>
					<div class="global_logo_box_bottom">
						<div>
							<h4>Wires</h4>
							<h3>Lorem ipsum dolor sit amet, consectetur adipiscing.</h3>
						</div>
						<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
						</a>
					</div>
				</div>
			</li>





			<li>
				<div class="product_item">
					<div class="product_item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-c-07.jpg" alt="Power Cables">
					</div>
					<div class="global_logo_box_bottom">
						<div>
							<h4>Flexible Cable</h4>
							<h3>Lorem ipsum dolor sit amet, consectetur adipiscing.</h3>
						</div>
						<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
						</a>
					</div>
				</div>
			</li>



			<li data-aos="fade-up" data-aos-duration="800" data-aos-delay="550" data-aos-once="true">
				<div class="product_item">
					<div class="product_item_img">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-c-08.jpg" alt="Heavy-Duty Cables">
					</div>
					<div class="global_logo_box_bottom">
						<div>
							<h4>Low Voltage Cables</h4>
							<h3>Lorem ipsum dolor sit amet, consectetur adipiscing.</h3>
						</div>
						<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
						</a>
					</div>
				</div>
			</li>

 

		</ul>

		<div class="load_more_btn_row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="700" data-aos-once="true">
		<a href="" class="btn_style me-1 buttion_blue">Load more</a>
		</div>
	</div>
</section>
