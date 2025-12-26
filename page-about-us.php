<?php
/**
 * Template Name: About Us
 * 
 * The template for displaying the About Us page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for About Us (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/about-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
// set_query_var( 'inner_banner_title', 'About Us' );

get_template_part( 'template-parts/inner-banner' );
?>
 


 <?php get_template_part( 'template-parts/our-story' ); ?> 
 <?php get_template_part( 'template-parts/mission-vission' ); ?> 
 <?php get_template_part( 'template-parts/history-milestones' ); ?> 
 <?php get_template_part( 'template-parts/leadership-team' ); ?> 
  <?php get_template_part( 'template-parts/clients' ); ?> 
  <?php get_template_part( 'template-parts/global-presence' ); ?> 



	 
</main><!-- #main -->

<?php
get_footer();

