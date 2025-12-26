<?php
/**
 * Template Name: Industry Detail
 *
 * The template for displaying individual industry detail pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Industry Detail page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/construction-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'Construction' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb will automatically detect industry detail page and show: Home > Industries > [Industry Name]
// To customize breadcrumb, uncomment and modify the code below:

$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Industries',
		'url' => home_url( '/industries' ),
	),
	array(
		'title' => get_the_title(), // or use a specific industry name
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<?php
// Product Overview data for Industry Detail
$product_overview_data = array(
	'title' => 'Challenges & Solutions',
	'description' => array(
		'LLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod.',
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.',
	),
 
);
set_query_var( 'product_overview_data', $product_overview_data );

get_template_part( 'template-parts/product-overview' );
?>
 <?php
 
 get_template_part( 'template-parts/service-detail-col-3' );
 ?>


 <?php
// Innovative Products data
$innovative_products_data = array(
	'title' => 'Related Products',
	'button_text' => 'View All Products',
	'url' => home_url( '/products' ),
	'button_class' => 'buttion_blue',
	'section_class' => 'bg-gray', // Extra class for section
);
set_query_var( 'innovative_products_data', $innovative_products_data );

get_template_part( 'template-parts/innovative-products' );
?>

<?php get_template_part( 'template-parts/get-in-touch' ); ?> 

</main><!-- #main -->

<?php
get_footer();

