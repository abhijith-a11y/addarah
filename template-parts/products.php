<?php
/**
 * Products Component Template
 *
 * @package tasheel
 */

// Get products data from query var (set by page templates)
$products_data = get_query_var( 'products_data', array() );

// Get extra class for ul from array
$products_list_class = isset( $products_data['list_class'] ) ? $products_data['list_class'] : '';

// Get products items from array
$products_items = isset( $products_data['items'] ) && is_array( $products_data['items'] ) ? $products_data['items'] : array();

// Build ul classes
$ul_classes = 'products_list';
if ( ! empty( $products_list_class ) ) {
	$ul_classes .= ' ' . esc_attr( $products_list_class );
}

// Default products if no items provided
if ( empty( $products_items ) ) {
	$products_items = array(
		array(
			'category' => 'Cables',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
			'image' => get_template_directory_uri() . '/assets/images/innovative_img_01.jpg',
			'url' => home_url( '/products-catogery' ),
		),
		array(
			'category' => 'Lighting',
			'title' => 'Energy-efficient lamps and luminaires for commercial and residential spaces',
			'image' => get_template_directory_uri() . '/assets/images/innovative_img_02.jpg',
			'url' => home_url( '/products-catogery' ),
		),
		array(
			'category' => 'Fans',
			'title' => 'Durable ceiling and ventilation fans designed for comfort and efficiency.',
			'image' => get_template_directory_uri() . '/assets/images/innovative_img_03.jpg',
			'url' => home_url( '/products-catogery' ),
		),
		array(
			'category' => 'Enclosures',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
			'image' => get_template_directory_uri() . '/assets/images/innovative_img_04.jpg',
			'url' => home_url( '/products-catogery' ),
		),
		array(
			'category' => 'Accessories',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing.',
			'image' => get_template_directory_uri() . '/assets/images/innovative_img_05.jpg',
			'url' => home_url( '/products-catogery' ),
		),
	);
}

?>

<section class="pt_80 pb_80 innovative_products_section">
	<div class="wrap">
		<ul class="<?php echo $ul_classes; ?>">
			<?php 
			$delay = 100;
			foreach ( $products_items as $index => $product ) :
				$current_delay = $delay + ($index * 100);
				$category = isset( $product['category'] ) ? $product['category'] : '';
				$title = isset( $product['title'] ) ? $product['title'] : '';
				$image = isset( $product['image'] ) ? $product['image'] : '';
				$url = isset( $product['url'] ) ? $product['url'] : '#';
				$image_alt = isset( $product['image_alt'] ) ? $product['image_alt'] : $category;
			?>
			<li data-aos="fade-up" data-aos-duration="800" data-aos-delay="<?php echo $current_delay; ?>" data-aos-once="true">
				<div class="product_item">
					<div class="global_logo_box_bottom">
						<div>
							<?php if ( ! empty( $category ) ) : ?>
							<h4><?php echo esc_html( $category ); ?></h4>
							<?php endif; ?>
							<?php if ( ! empty( $title ) ) : ?>
							<h3><?php echo esc_html( $title ); ?></h3>
							<?php endif; ?>
						</div>
						<a href="<?php echo esc_url( $url ); ?>" class="global_buttion">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow_01.svg" alt="RAMCRO">
						</a>
					</div>
					<?php if ( ! empty( $image ) ) : ?>
					<img src="<?php echo esc_url( $image ); ?>" alt="<?php echo esc_attr( $image_alt ); ?>">
					<?php endif; ?>
				</div>
			</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
