<?php
/**
 * Template Name: Products
 * 
 * The template for displaying the Products page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Products page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/product-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
// set_query_var( 'inner_banner_title', 'Our Products' );

get_template_part( 'template-parts/inner-banner' );
?>

 

<?php get_template_part( 'template-parts/products' ); ?>

</main><!-- #main -->

<?php
get_footer();

