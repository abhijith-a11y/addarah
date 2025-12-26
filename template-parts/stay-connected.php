<?php
/**
 * Banner Component Template
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 bg_black bg_shadow">
	<div class="banner_txt_block_01">
		<div class="wrap">
			<div class="global_brands_content_title pb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
				<h3 class="h3_title_55">
				Stay Connected with <br/>Our Latest Updates
				</h3>
				<a href="<?php echo esc_url( home_url( '/media-center' ) ); ?>" class="btn_style me-1 buttion_white">View More Updates</a>
			</div>

			<div class="global_brands_content_slider   stay_connected_slider" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
				<div class="swiper-wrapper">
        <div class="swiper-slide">
						<div class="stay_connected_img">
							<a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
							 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stay-01.jpg" alt="Stay Connected">
							</a>
						</div>
						<div class="stay_connected_txt">
							<h4><span>by</span>  Jonathan Doe</h4>
							 <h3> <a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
							 <p>
							 Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...
							 </p>
						</div>
		</div>

					 

		<div class="swiper-slide">
		<div class="stay_connected_img">
		<a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
							 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stay-02.jpg" alt="Stay Connected">
							 </a>
						</div>
						<div class="stay_connected_txt">
							<h4><span>by</span>  Jonathan Doe</h4>
							 <h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
							 <p>
							 Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...
							 </p>
						</div>
		</div>

		<div class="swiper-slide">
		<div class="stay_connected_img">
		<a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/stay-03.jpg" alt="Stay Connected">	
							 </a>
						</div>
						<div class="stay_connected_txt">
							<h4><span>by</span>  Jonathan Doe</h4>
							 <h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
							 <p>
							 Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...
							 </p>
						</div>
		</div>

				 
 
				</div>
				<!-- <div class="swiper-pagination"></div> -->
			 
			</div>
		</div>
	</div>
</section>
