<?php
/**
 * Template Name: Industries
 * 
 * The template for displaying the Industries page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Industries page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/industries-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
  set_query_var( 'inner_banner_title', 'Industries We Serve' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Page Description data
$page_description_data = array(
	'title' => 'Connecting Industries with<br> Innovation and Quality',
  
);
set_query_var( 'page_description_data', $page_description_data );

get_template_part( 'template-parts/page-discription' );
?>

<?php
// Products data
$products_data = array(
	'list_class' => 'col_2', // Extra class for ul
	'items' => array(
		array(
			'category' => 'Construction',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.',
			'image' => get_template_directory_uri() . '/assets/images/industry-img-01.jpg',
			'url' => home_url( '/industries-detail' ),
			'image_alt' => 'Construction',
		),
		array(
			'category' => 'Oil & Gas',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.',
			'image' => get_template_directory_uri() . '/assets/images/industry-img-02.jpg',
			'url' => home_url( '/industries-detail' ),
			'image_alt' => 'Oil & Gas',
		),
		array(
			'category' => 'Infrastructure',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.',
			'image' => get_template_directory_uri() . '/assets/images/industry-img-03.jpg',
			'url' => home_url( '/industries-detail' ),
			'image_alt' => 'Infrastructure',
		),
		array(
			'category' => 'Utilities & Government',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.',
			'image' => get_template_directory_uri() . '/assets/images/industry-img-04.jpg',
			'url' => home_url( '/industries-detail' ),
			'image_alt' => 'Utilities & Government',
		),
		array(
			'category' => 'Fire & Safety',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.',
			'image' => get_template_directory_uri() . '/assets/images/industry-img-05.jpg',
			'url' => home_url( '/industries-detail' ),
			'image_alt' => 'Fire & Safety',
		),
		array(
			'category' => 'Export / International',
			'title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.',
			'image' => get_template_directory_uri() . '/assets/images/industry-img-06.jpg',
			'url' => home_url( '/industries-detail' ),
			'image_alt' => 'Export / International',
		),
	),
);
set_query_var( 'products_data', $products_data );

get_template_part( 'template-parts/products' );
?>

</main><!-- #main -->

<?php
get_footer();

