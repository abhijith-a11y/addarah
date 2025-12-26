<?php
/**
 * Innovative Products Component Template
 *
 * @package tasheel
 */

// Get innovative products data from query var (set by page templates)
$innovative_products_data = get_query_var( 'innovative_products_data', array() );

// Get data from array or use defaults
$section_title = isset( $innovative_products_data['title'] ) ? $innovative_products_data['title'] : 'Innovative Products <br/>That Power Progress';
$button_text   = isset( $innovative_products_data['button_text'] ) ? $innovative_products_data['button_text'] : 'View All Products';
// Default button URL points to Products page if not provided
$button_url    = isset( $innovative_products_data['button_url'] ) ? $innovative_products_data['button_url'] : home_url( '/products' );
$button_class  = isset( $innovative_products_data['button_class'] ) ? $innovative_products_data['button_class'] : 'buttion_blue';
$section_class = isset( $innovative_products_data['section_class'] ) ? $innovative_products_data['section_class'] : '';

// Fallback to ACF fields if array is empty
if ( empty( $innovative_products_data ) && function_exists( 'get_field' ) ) {
	$section_title = get_field( 'innovative_products_title' );
	if ( empty( $section_title ) ) {
		$section_title = 'Innovative Products <br/>That Power Progress';
	}
	$button_text = get_field( 'innovative_products_button_text' );
	$button_url = get_field( 'innovative_products_button_url' );
	$button_class = get_field( 'innovative_products_button_class' );
	$section_class = get_field( 'innovative_products_section_class' );
}

// Build section classes
$section_classes = 'pt_80 pb_80 innovative_products_section';
if ( ! empty( $section_class ) ) {
	$section_classes .= ' ' . esc_attr( $section_class );
}

?>

<section class="<?php echo $section_classes; ?>">
	 <div class="wrap"> 
	 <div class="global_brands_content_title pb_30">
				<h3 class="h3_title_55 text_black">
				<?php echo wp_kses( $section_title, array( 'br' => array() ) ); ?>
				</h3>
				<?php if ( ! empty( $button_text ) ) : ?>
				<a href="<?php echo esc_url( $button_url ); ?>" class="btn_style me-1 <?php echo esc_attr( $button_class ); ?>"><?php echo esc_html( $button_text ); ?></a>
				<?php endif; ?>
			</div>




			<div class="global_brands_content_slider innovative_products innovative_products_slider">
				<div class="swiper-wrapper">
			<div class="swiper-slide">
			<div class="global_logo_box_bottom">
<div>

			<h4>Cables</h4>
								<h3>Lorem ipsum dolor sit amet, consectetur adipiscing.</h3>
</div>
								<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
								</a>
							</div>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/innovative_img_01.jpg" alt="RAMCRO">

			</div>
			 
 

			<div class="swiper-slide">
			<div class="global_logo_box_bottom">

<div>
			<h4>Lighting</h4>
								<h3>Energy-efficient lamps and luminaires for commercial and residential spaces</h3>
</div>
								<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
								</a>
							</div>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/innovative_img_02.jpg" alt="RAMCRO">

			</div>





			<div class="swiper-slide">
			<div class="global_logo_box_bottom">

<div>
			<h4>Fans</h4>
								<h3>Durable ceiling and ventilation fans designed for comfort and efficiency.</h3>
</div>
								<a href="<?php echo esc_url( home_url( '/product-detail' ) ); ?>" class="global_buttion">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
								</a>
							</div>

							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/innovative_img_03.jpg" alt="RAMCRO">

			</div>








		</div>
	</div>
	
	</div>





	 </div>
</section>
