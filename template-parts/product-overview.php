<?php
/**
 * Product Overview Component Template
 *
 * @package tasheel
 */

// Get product overview data from query var (set by page templates)
$product_overview_data = get_query_var( 'product_overview_data', array() );

// Get data from array or use defaults
$overview_title = isset( $product_overview_data['title'] ) ? $product_overview_data['title'] : 'Overview';
$overview_description = isset( $product_overview_data['description'] ) ? $product_overview_data['description'] : '';
$overview_buttons = isset( $product_overview_data['buttons'] ) ? $product_overview_data['buttons'] : array();

// Handle description as array of paragraphs
if ( is_array( $overview_description ) ) {
	$overview_description = implode( "\n\n", $overview_description );
}

?>

<section class="pt_80 pb_80 product_overview_section">
	<div class="wrap">
		<div class="product_overview_content">
			<div class="product_overview_title " data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
				<h2 class="h3_title"><?php echo esc_html( $overview_title ); ?></h2>
			</div>
			<?php if ( ! empty( $overview_description ) ) : ?>
			<div class="product_overview_description" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
				<?php echo wp_kses_post( wpautop( $overview_description ) ); ?>
				<?php if ( ! empty( $overview_buttons ) && is_array( $overview_buttons ) ) : ?>
			<ul class="product_overview_buttons">
				<?php foreach ( $overview_buttons as $button ) : 
					$button_text = isset( $button['text'] ) ? $button['text'] : '';
					$button_url = isset( $button['url'] ) ? $button['url'] : '#';
					$button_class = isset( $button['class'] ) ? $button['class'] : 'buttion_blue';
					$button_icon = isset( $button['icon'] ) ? $button['icon'] : '';
					
					if ( ! empty( $button_text ) ) :
				?>
				<li>
					<a href="<?php echo esc_url( $button_url ); ?>" class="btn_style <?php echo esc_attr( $button_class ); ?>">
						<?php if ( ! empty( $button_icon ) ) : ?>
						<span class="buttion_blue_icn">
							<img src="<?php echo esc_url( $button_icon ); ?>" alt="<?php echo esc_attr( $button_text ); ?>">
						</span>
						<?php endif; ?>
						<?php echo esc_html( $button_text ); ?>
					</a>
				</li>
				<?php 
					endif;
				endforeach; 
				?>
			</ul>
			<?php endif; ?>
			</div>
			<?php endif; ?>
			
			
		</div>
	</div>
</section>

