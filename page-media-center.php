<?php
/**
 * Template Name: Media Center
 * 
 * The template for displaying the Media Center page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Media Center page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/media-center-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'Media Center' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb for Media Center page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Media Center',
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<section class="pt_80 pb_80 media_center_section">
	<div class="wrap">
		<div class="media_center_header mb_60" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
			<div class="global_brands_content_title">
				<h3 class="h3_title_55 text_black">
					Latest News & Updates
				</h3>
			</div>
		</div>

        <div class="projects_grid_fltr_block media_center_filter" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
    <div class="projects_grid_fltr_block_item">
        <div class="projects_search_block">
             <span class="search_icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/search-icn.svg" alt="Search"></span>
       
        <input class="search_input" type="text" placeholder="Search">
            </div>
    </div>



    <div class="projects_grid_fltr_block_item_02">
        <ul class="projects_grid_fltr_block_item_02_list">
            
            <li>

            <select name="" id="" class="filter_select">
                <option value="">News</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
            </li>
        </ul>
    </div>
</div>


        <ul class="products_list">
            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
            <div class="related_news_img">
            <a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-01.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
            </li>
            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="400" data-aos-once="true">
            <div class="related_news_img">
            <a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-02.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
            </li>

            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="500" data-aos-once="true">
            <div class="related_news_img">
            <a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-03.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
            </li>

            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="600" data-aos-once="true">
            <div class="related_news_img">
            <a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-04.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
            </li>

            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="700" data-aos-once="true">
            <div class="related_news_img">
						<a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-01.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
            </li>

            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="800" data-aos-once="true">
            <div class="related_news_img">
            <a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">
                        <span class="category_tag">
                            Category
                            </span>
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/rel-news-img-01.jpg" alt="RAMCRO">
						</a>
					</div>

					<div class="related_news_content">
						<h5><span>by</span>Jonathan Doe</h5>
						<h3><a href="<?php echo esc_url( home_url( '/media-center-detail-page' ) ); ?>">Lorem ipsum dolor sit consectetur</a></h3>
						<p>Lorem ipsum dolor sit consectetur adipiscing elit. Nullam consequat semper pharetra. Nullam id nisi et neque...</p>
					</div>
            </li>
        </ul>

	 
		<div class="load_more_btn_row" data-aos="fade-up" data-aos-duration="800" data-aos-delay="900" data-aos-once="true">
			<a href="#" class="btn_style me-1 buttion_blue">Load more</a>
		</div>
	</div>
</section>

</main><!-- #main -->

<?php
get_footer();

