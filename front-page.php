<?php
/**
 * The front page template file
 *
 * This is the template for the home page
 *
 * @package tasheel
 */

get_header();
?>

  
		<?php get_template_part( 'template-parts/Banner' ); ?>
 		<?php get_template_part( 'template-parts/Innovation' ); ?>
 		<?php get_template_part( 'template-parts/blobal-brands' ); ?>
 		<?php get_template_part( 'template-parts/innovative-products' ); ?> 
 		<?php // get_template_part( 'template-parts/connecting-industries' ); ?>
		 <?php get_template_part( 'template-parts/stack-section' ); ?>
		 <?php get_template_part( 'template-parts/projects-home' ); ?> 
		 
		 <?php get_template_part( 'template-parts/stay-connected' ); ?> 
		 <?php get_template_part( 'template-parts/clients' ); ?> 
		 <?php get_template_part( 'template-parts/building-trust' ); ?> 
		 <?php get_template_part( 'template-parts/get-in-touch' ); ?> 

<?php
get_footer();

