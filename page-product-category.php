<?php
/**
 * Template Name: Product Category
 * 
 * The template for displaying product category pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Product Category page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/product-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
// set_query_var( 'inner_banner_title', 'Product Category Name' );

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
		'title' =>  'Cables', // Category name
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<?php
// Innovative Products data for category page
$innovative_products_data = array(
	'title' => 'Innovative Products <br/>That Power Progress',
	'button_text' => 'View All Products',
	'button_url' => home_url( '/products' ),
	'button_class' => 'buttion_blue',
);
set_query_var( 'innovative_products_data', $innovative_products_data );

?>
<?php get_template_part( 'template-parts/products-catogery-list' ); ?>
</main><!-- #main -->

<?php
get_footer();

