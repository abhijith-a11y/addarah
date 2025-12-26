<?php
/**
 * Related News Component Template
 *
 * @package tasheel
 */

// Get related news data from query var (set by page templates)
$related_news_data = get_query_var( 'related_news_data', array() );

// Get data from array or use defaults
$section_title = isset( $related_news_data['title'] ) ? $related_news_data['title'] : 'Related News';
$button_text = isset( $related_news_data['button_text'] ) ? $related_news_data['button_text'] : 'View All News';
$button_url = isset( $related_news_data['button_url'] ) ? $related_news_data['button_url'] : '#';
$button_class = isset( $related_news_data['button_class'] ) ? $related_news_data['button_class'] : 'buttion_blue';
$section_class = isset( $related_news_data['section_class'] ) ? $related_news_data['section_class'] : '';

// Fallback to ACF fields if array is empty
if ( empty( $related_news_data ) && function_exists( 'get_field' ) ) {
	$section_title = get_field( 'related_news_title' );
	if ( empty( $section_title ) ) {
		$section_title = 'Related News';
	}
	$button_text = get_field( 'related_news_button_text' );
	$button_url = get_field( 'related_news_button_url' );
	$button_class = get_field( 'related_news_button_class' );
	$section_class = get_field( 'related_news_section_class' );
}

// Build section classes
$section_classes = 'pt_80 pb_80 related_news_section';
if ( ! empty( $section_class ) ) {
	$section_classes .= ' ' . esc_attr( $section_class );
}

?>

<section class="<?php echo $section_classes; ?>">
	<div class="wrap">
		<div class="global_brands_content_title pb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<h3 class="h3_title_55 text_black">
				<?php echo wp_kses( $section_title, array( 'br' => array() ) ); ?>
			</h3>
		</div>

		<div class="global_brands_content_slider related_news related_news_slider" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<div class="related_news_img">
						<a href="#">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-01.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="#">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="related_news_img">
						<a href="#">
                            <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-02.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jane Smith</h5>
						<h3><a href="#">Consectetur adipiscing elit nullam</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
				</div>

				<div class="swiper-slide">
					<div class="related_news_img">
						<a href="#">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-03.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Michael Johnson</h5>
						<h3><a href="#">Phasellus porttitor placerat ipsum</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
