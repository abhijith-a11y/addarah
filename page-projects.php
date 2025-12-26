<?php
/**
 * Template Name: Projects
 * 
 * The template for displaying the Projects page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Projects Banner Swiper Slider
$projects_banner_slides = array(
	array(
		'image' => get_template_directory_uri() . '/assets/images/project-banner.jpg',
		'title' => 'Projects',
	),
	array(
		'image' => get_template_directory_uri() . '/assets/images/project-banner.jpg',
		'title' => 'Our Portfolio',
	),
	array(
		'image' => get_template_directory_uri() . '/assets/images/project-banner.jpg',
		'title' => 'Success Stories',
	),
);
?>

<section class="projects_banner_slider_section">
	<div class="swiper projects_banner_slider">
		<div class="swiper-wrapper">
			<?php foreach ( $projects_banner_slides as $slide ) : ?>
				<div class="swiper-slide">
					<div class="projects_banner_slide" style="background-image: url('<?php echo esc_url( $slide['image'] ); ?>');">
						<div class="projects_banner_overlay"></div>
						<div class="projects_banner_content">
							<div class="wrap">
								<h2 class="banner_title"><?php echo esc_html( $slide['title'] ); ?></h2>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-pagination projects_banner_pagination"></div>
		 
	</div>
</section>

 
<section class="projects_section pt_80 pb_80">
	<div class="wrap">
	 <div class="projects_content_txt text_center">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
     </div>
	</div>
</section>


<section class="projects_grid_section pt_80 pb_80 bg_black bg_shadow">

<div class="wrap">



<div class="projects_grid_fltr_block">
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
                <option value="">Industry</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
            </li>
            <li>

            <select name="" id="" class="filter_select">
                <option value="">location</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
            </select>
            </li>
        </ul>
    </div>
</div>

   <ul  class="products_list">

   <li>
   <a href="">
<div class="product_item_img">

<div class="category_tag_box">
    <h3>Expo Village</h3>
    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Nulla consectetur.</p>
</div>
<span class="category_tag">Dubai</span>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-im-06.jpg" alt="RAMCRO">
</div>
</a>
   </li>

   <li>
   <a href="">
<div class="product_item_img">
<div class="category_tag_box">
    <h3>Expo Village</h3>
    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Nulla consectetur.</p>
</div>
<span class="category_tag">Dubai</span>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-im-05.jpg" alt="RAMCRO">
</div>
</a>
   </li>

   <li>
<a href="">
<div class="product_item_img">



<div class="category_tag_box">
    <h3>Expo Village</h3>
    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Nulla consectetur.</p>
</div>
<span class="category_tag">Dubai</span>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-im-04.jpg" alt="RAMCRO">
    </div>
</a>
   </li>








   <li>
<a href="">
<div class="product_item_img">



<div class="category_tag_box">
    <h3>Expo Village</h3>
    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Nulla consectetur.</p>
</div>
<span class="category_tag">Dubai</span>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-im-03.jpg" alt="RAMCRO">
    </div>
</a>
   </li>

   <li>
<a href="">
<div class="product_item_img">



<div class="category_tag_box">
    <h3>Expo Village</h3>
    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Nulla consectetur.</p>
</div>
<span class="category_tag">Dubai</span>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-im-02.jpg" alt="RAMCRO">
    </div>
</a>
   </li>

   <li>
<a href="">
<div class="product_item_img">



<div class="category_tag_box">
    <h3>Expo Village</h3>
    <p>Lorem ipsum dolor amet, consectetur adipiscing elit. Nulla consectetur.</p>
</div>
<span class="category_tag">Dubai</span>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-im-01.jpg" alt="RAMCRO">
    </div>
</a>
   </li>
   </ul>


   <div class="text_center pt_40 z_10 position_relative">
<a href="" class="btn_style me-1 buttion_white">Load more</a>
</div>




</div>




</section>


</main><!-- #main -->

<?php
get_footer();

