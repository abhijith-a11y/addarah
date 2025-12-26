<?php
/**
 * Template Name: Contact Us
 * 
 * The template for displaying the Contact Us page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Contact Us (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/contact-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'Contact Us' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb for Contact Us page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Contact Us',
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<?php
// Contact Information Section
get_template_part( 'template-parts/contact-information' );
?>

<?php
// Contact Form Section
get_template_part( 'template-parts/contact-address' );
?>

<?php
// Contact Map Section
get_template_part( 'template-parts/contact-map' );
?>

</main><!-- #main -->

<?php
get_footer();

