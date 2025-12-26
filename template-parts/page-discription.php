<?php
/**
 * Page Description Component Template
 *
 * @package tasheel
 */

// Get page description data from query var (set by page templates)
$page_description_data = get_query_var( 'page_description_data', array() );

// Get data from array or use defaults
$section_title = isset( $page_description_data['title'] ) ? $page_description_data['title'] : '';
$description = isset( $page_description_data['description'] ) ? $page_description_data['description'] : '';
$button_text = isset( $page_description_data['button_text'] ) ? $page_description_data['button_text'] : '';
$button_url = isset( $page_description_data['button_url'] ) ? $page_description_data['button_url'] : '#';
$button_class = isset( $page_description_data['button_class'] ) ? $page_description_data['button_class'] : 'buttion_blue';

// Fallback to ACF fields if array is empty
if ( empty( $page_description_data ) && function_exists( 'get_field' ) ) {
	$section_title = get_field( 'page_description_title' );
	$description = get_field( 'page_description_text' );
	$button_text = get_field( 'page_description_button_text' );
	$button_url = get_field( 'page_description_button_url' );
	$button_class = get_field( 'page_description_button_class' );
}

// Handle description as array of paragraphs
if ( is_array( $description ) ) {
	$description = implode( "\n\n", $description );
}

?>

<section class="pt_80 page_description_section">
	<div class="wrap">
		<?php if ( ! empty( $section_title ) ) : ?>
		<div class="global_brands_content_title  " data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
			<h3 class="h3_title_55 text_black">
				<?php echo wp_kses( $section_title, array( 'br' => array() ) ); ?>
			</h3>
			<?php if ( ! empty( $button_text ) ) : ?>
			<a href="<?php echo esc_url( $button_url ); ?>" class="btn_style me-1 <?php echo esc_attr( $button_class ); ?>"><?php echo esc_html( $button_text ); ?></a>
			<?php endif; ?>
		</div>
		<?php endif; ?>
	</div>
</section>
