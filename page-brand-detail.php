<?php
/**
 * Template Name: Brand Detail
 * 
 * The template for displaying individual brand detail pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Brand Detail page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/beand-detail-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'DECODUCT' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb will automatically detect brand detail page and show: Home > Brands > [Brand Name]
// To customize breadcrumb, uncomment and modify the code below:
 
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Brands',
		'url' => home_url( '/brands' ),
	),
	array(
		'title' => 'DECODUCT', // or use get_the_title() for dynamic
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );
 
get_template_part( 'template-parts/breadcrumb' );
?>

<?php
// Get the current page content
global $post;
$page_content = '';
if ( $post ) {
	$page_content = apply_filters( 'the_content', $post->post_content );
}

// Product Overview data for Brand Detail
$product_overview_data = array(
	'title' => 'Overview',
	'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.',
);
set_query_var( 'product_overview_data', $product_overview_data );

get_template_part( 'template-parts/product-overview' );
?>

<?php
get_template_part( 'template-parts/associated-product' );
?>
<?php
get_template_part( 'template-parts/enquire-now' );
?>





</main><!-- #main -->

<?php
get_footer();

