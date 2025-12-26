<?php
/**
 * Banner Component Template
 *
 * @package tasheel
 */

// Get banner settings from theme mods or defaults
$banner_title = get_theme_mod( 'banner_title', 'Empowering Businesses, Enabling Growth' );
$banner_description = get_theme_mod( 'banner_description', 'Since 2005, TasHeel Holding Group (THG) has been driving innovation and transformation across travel, logistics, hospitality, and service sectors — shaping the future of Saudi enterprise.' );
$banner_button_text = get_theme_mod( 'banner_button_text', 'Discover Our Story' );
$banner_button_link = get_theme_mod( 'banner_button_link', '#' );

// Check if banner logo exists
$banner_logo_default = get_template_directory_uri() . '/assets/images/header-logo.svg';
$banner_logo_path = get_template_directory() . '/assets/images/header-logo.svg';
$banner_logo = get_theme_mod( 'banner_logo', $banner_logo_default );
if ( ! file_exists( $banner_logo_path ) ) {
	$banner_logo = '';
}

// Check if banner overlay exists
$banner_overlay_default = get_template_directory_uri() . '/assets/images/banner_overlay.svg';
$banner_overlay_path = get_template_directory() . '/assets/images/banner_overlay.svg';
$banner_overlay = get_theme_mod( 'banner_overlay', $banner_overlay_default );
if ( ! file_exists( $banner_overlay_path ) ) {
	$banner_overlay = '';
}

// Resolve dynamic background image:
// Priority: query var `inner_banner_image` -> ACF field 'inner_banner_image' -> Featured Image -> Default asset
$banner_bg = get_template_directory_uri() . '/assets/images/about-banner.jpg';

// Query var override (set via set_query_var from template)
$query_bg = get_query_var( 'inner_banner_image', '' );
if ( ! empty( $query_bg ) ) {
	$banner_bg = esc_url( $query_bg );
}

// ACF image field (expects image array) if not already overridden
if ( empty( $query_bg ) && function_exists( 'get_field' ) ) {
	$acf_bg = get_field( 'inner_banner_image' );
	if ( $acf_bg && is_array( $acf_bg ) && ! empty( $acf_bg['url'] ) ) {
		$banner_bg = esc_url( $acf_bg['url'] );
	}
}

// Featured image fallback if neither query var nor ACF provided
if ( $banner_bg === get_template_directory_uri() . '/assets/images/about-banner.jpg' ) {
	$featured = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	if ( $featured ) {
		$banner_bg = esc_url( $featured );
	}
}

// Resolve dynamic banner title:
// Priority: query var `inner_banner_title` -> ACF field 'inner_banner_title' -> Page Title
$banner_title_text = '';

// Query var override (set via set_query_var from template)
$query_title = get_query_var( 'inner_banner_title', '' );
if ( ! empty( $query_title ) ) {
	$banner_title_text = esc_html( $query_title );
}

// ACF text field if not already overridden
if ( empty( $query_title ) && function_exists( 'get_field' ) ) {
	$acf_title = get_field( 'inner_banner_title' );
	if ( $acf_title && ! empty( $acf_title ) ) {
		$banner_title_text = esc_html( $acf_title );
	}
}

// Page title fallback if neither query var nor ACF provided
if ( empty( $banner_title_text ) ) {
	$banner_title_text = get_the_title();
}

// Check if this is a brand detail page
$is_brand_detail_page = is_page_template( 'page-brand-detail.php' );

// Add extra class for brand detail page
$banner_container_class = 'bannerContainer-inner';
if ( $is_brand_detail_page ) {
	$banner_container_class .= ' brand-detail-banner';
}

?>

<div class="<?php echo esc_attr( $banner_container_class ); ?>" style="background-image: url('<?php echo $banner_bg; ?>');">
  <div class="inner_banner_txt_block_01">
	 <div class="wrap">
	 <h2 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true"><?php echo $banner_title_text; ?></h2>

	 <?php if ( $is_brand_detail_page ) : ?>
		<div class="brand_detail_logo_section" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
			 
				  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand-detail-logo-01.jpg" alt="Brand Detail Banner">
		 
		 </div>
		<?php endif; ?>
  </div>
</div>
 
</div>

