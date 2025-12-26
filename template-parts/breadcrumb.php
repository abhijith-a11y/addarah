<?php
/**
 * Breadcrumb Component Template
 *
 * @package tasheel
 */

// Get breadcrumb items from query var (set by page templates)
$breadcrumb_items = get_query_var( 'breadcrumb_items', array() );

// If no custom breadcrumb items provided, generate default based on page type
if ( empty( $breadcrumb_items ) ) {
	// Default: Home
	$breadcrumb_items = array(
		array(
			'title' => 'Home',
			'url' => home_url( '/' ),
		),
	);
	
	// Check if this is a brand detail page
	if ( is_page_template( 'page-brand-detail.php' ) ) {
		// Get brand name from page title or query var
		$brand_name = get_query_var( 'inner_banner_title', '' );
		if ( empty( $brand_name ) ) {
			$brand_name = get_the_title();
		}
		
		$breadcrumb_items[] = array(
			'title' => 'Brands',
			'url' => home_url( '/brands' ),
		);
		$breadcrumb_items[] = array(
			'title' => $brand_name,
			'url' => get_permalink(),
		);
	} elseif ( is_page() ) {
		// For other pages, add page title
		$breadcrumb_items[] = array(
			'title' => get_the_title(),
			'url' => get_permalink(),
		);
	} elseif ( is_single() ) {
		// For single posts
		$breadcrumb_items[] = array(
			'title' => get_the_title(),
			'url' => get_permalink(),
		);
	}
}

?>

<section class="pt_40 pb_40 breadcrumb_section">
	<div class="wrap">
		<ul class="breadcrumb_list" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
			<?php 
			$item_count = count( $breadcrumb_items );
			foreach ( $breadcrumb_items as $index => $item ) : 
				$is_last = ( $index === $item_count - 1 );
			?>
				<li>
					<?php if ( $is_last ) : ?>
						<span><?php echo esc_html( $item['title'] ); ?></span>
					<?php else : ?>
						<a href="<?php echo esc_url( $item['url'] ); ?>"><?php echo esc_html( $item['title'] ); ?></a>
					<?php endif; ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
