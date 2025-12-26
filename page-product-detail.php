<?php
/**
 * Template Name: Product detail
 * 
 * The template for displaying individual product category pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Product Category page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/cable-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
  set_query_var( 'inner_banner_title', 'Fire Resistant Cable' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb for Product Category page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Products',
		'url' => home_url( '/products' ),
	),
    array(
		'title' => 'Cables',
		'url' => home_url( '/products' ),
	),
    
	array(
		'title' => 'Fire Resistant Cable', // or use custom category name
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<?php
// Product Overview data
$product_overview_data = array(
	'title' => 'Overview',
	'description' => array(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.',
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.',
	),
	'buttons' => array(
		array(
			'text' => 'Spec sheets',
			'url' => '#',
			'class' => 'buttion_blue',
			'icon' => get_template_directory_uri() . '/assets/images/spec-icn.svg',
		),
		array(
			'text' => 'Download Brochure',
			'url' => '#',
			'class' => 'buttion_white buttion_line',
			'icon' => get_template_directory_uri() . '/assets/images/download-icn.svg',
		),
	),
);
set_query_var( 'product_overview_data', $product_overview_data );

get_template_part( 'template-parts/product-overview' );
?>

        <section class="image-block video-block">
<video controls autoplay muted loop>
	<source src="<?php echo get_template_directory_uri(); ?>/assets/images/video-01.mp4" type="video/mp4">
	Your browser does not support the video tag.
</video>
</section>

<?php
// Innovative Products data
$innovative_products_data = array(
	'title' => 'Related Products',
	'button_text' => 'View All Products',
	'button_url' => '#',
	'button_class' => 'buttion_blue',
);
set_query_var( 'innovative_products_data', $innovative_products_data );

get_template_part( 'template-parts/innovative-products' );
?>
 
</main><!-- #main -->

<?php
get_footer();

