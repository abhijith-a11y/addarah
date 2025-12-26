<?php
/**
 * Brand Detail Component Template
 *
 * @package tasheel
 */

// Get the current page/post
while ( have_posts() ) :
	the_post();
	
	// Get brand image from featured image
	$brand_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	
	// Get brand description from post content
	$brand_description = get_the_content();
	
	?>
	
	<section class="pt_80 pb_80">
		<div class="wrap">
			<!-- Brand Header Section -->
			<div class="brand_detail_header mb_60" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
				<h1 class="h3_title_55 text_black mb_20"><?php the_title(); ?></h1>
			</div>
			
			<!-- Brand Content Section -->
			<div class="brand_detail_content mb_60" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
				<div class="row">
					<?php if ( ! empty( $brand_image ) ) : ?>
					<div class="col-lg-6 mb_30 mb-lg-0">
						<div class="brand_detail_image">
							<img src="<?php echo esc_url( $brand_image ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" class="img-fluid">
						</div>
					</div>
					<?php endif; ?>
					
					<div class="<?php echo ! empty( $brand_image ) ? 'col-lg-6' : 'col-12'; ?>">
						<div class="brand_detail_description">
							<?php 
							if ( ! empty( $brand_description ) ) {
								echo wp_kses_post( wpautop( $brand_description ) );
							}
							?>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Back to Brands Link -->
			<div class="brand_detail_back_link text-center" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
				<a href="<?php echo esc_url( home_url( '/brands' ) ); ?>" class="btn_style buttion_blue">
					Back to Brands
				</a>
			</div>
		</div>
	</section>
	
	<?php
endwhile;
?>






