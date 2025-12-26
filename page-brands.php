<?php
/**
 * Template Name: Brands
 * 
 * The template for displaying the Brands page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Brands page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/brands-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
// set_query_var( 'inner_banner_title', 'Our Brands' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php get_template_part( 'template-parts/explore-brands' ); ?>

</main><!-- #main -->

<?php
get_footer();

