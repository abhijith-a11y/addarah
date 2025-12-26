<?php
/**
 * Template Name: Sitemap
 * 
 * The template for displaying the Sitemap page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Breadcrumb for Sitemap page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Sitemap',
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<section class="sitemap_section pt_80 pb_80">
	<div class="wrap">
		<div class="sitemap_content">
			<?php
			// Get all published pages
			$pages = get_pages( array(
				'sort_column' => 'menu_order, post_title',
				'sort_order' => 'ASC',
				'post_status' => 'publish',
			) );

			if ( ! empty( $pages ) ) :
				// Organize pages by parent
				$parent_pages = array();
				$child_pages = array();

				foreach ( $pages as $page ) {
					if ( $page->post_parent == 0 ) {
						$parent_pages[] = $page;
					} else {
						$child_pages[ $page->post_parent ][] = $page;
					}
				}
			?>
				<div class="sitemap_list">
					<?php foreach ( $parent_pages as $parent_page ) : ?>
						<div class="sitemap_item">
							<h3 class="sitemap_parent_title">
								<a href="<?php echo esc_url( get_permalink( $parent_page->ID ) ); ?>" target="_blank" rel="noopener noreferrer">
									<?php echo esc_html( $parent_page->post_title ); ?>
								</a>
							</h3>
							
							<?php if ( isset( $child_pages[ $parent_page->ID ] ) && ! empty( $child_pages[ $parent_page->ID ] ) ) : ?>
								<ul class="sitemap_child_list">
									<?php foreach ( $child_pages[ $parent_page->ID ] as $child_page ) : ?>
										<li>
											<a href="<?php echo esc_url( get_permalink( $child_page->ID ) ); ?>" target="_blank" rel="noopener noreferrer">
												<?php echo esc_html( $child_page->post_title ); ?>
											</a>
										</li>
									<?php endforeach; ?>
								</ul>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
			<?php else : ?>
				<p class="sitemap_no_pages">No pages found.</p>
			<?php endif; ?>
		</div>
	</div>
</section>

</main><!-- #main -->

<?php
get_footer();

