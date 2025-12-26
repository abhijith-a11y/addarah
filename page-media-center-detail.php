<?php
/**
 * Template Name: Media Center Detail
 * 
 * The template for displaying individual Media Center items
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main no-banner">
 

 
 
	<section class="pt_80 pb_80 media_center_detail_section">
		<div class="wrap">
			 <div class="media_center_detail_content">
                <ul class="share_buttons_list" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
                    <li>Share</li>
                    <li>
                        <a href="#" class="share_button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-fb.svg" alt=" ">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="share_button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-x.svg" alt=" ">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="share_button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-insta.svg" alt=" ">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="share_button">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/share-in.svg" alt=" ">
                        </a>
                    </li>
                 
            </ul>



<div class="media_center_detail_header" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
<h1>Would you like to know more about UB Emirates? Here it is.</h1>
    <span>October 11, 2018</span>
</div>

<div class="media_center_detail_content_body" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod.</p>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.</p>
<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news-imge.jpg" alt=" ">

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.</p>
</div>
 
             </div>
		</div>
	</section>

 


<?php
// Related News data
$related_news_data = array(
	'title' => 'Related News',
	'button_text' => 'View All News',
	'button_url' => '#',
	'button_class' => 'buttion_blue',
);
set_query_var( 'related_news_data', $related_news_data );

get_template_part( 'template-parts/related-news' );
?>                                              





 

</main><!-- #main -->

<?php
get_footer();

