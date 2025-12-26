<?php
/**
 * Associated Product Component Template
 *
 * @package tasheel
 */

?>

<section class="pt_80 pb_80 associated_product_section  bg_black bg_shadow">
	<div class="wrap">
    <div class="global_brands_content_title pb_30" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100" data-aos-once="true">
				<h3 class="h3_title_55">
                Associated product
				</h3>
				<a href="<?php echo esc_url( home_url( '/products' ) ); ?>" class="btn_style me-1 buttion_blue"> <span class="buttion_blue_icn"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/but-icn.svg"></span> Download Catalogue</a>
			</div>



            <ul class="associated_product_list">
            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="200" data-aos-once="true">
                <div class="associated_product_item">
                    <div class="pro_img_block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-01.png" alt="RAMCRO">
                    </div>
                    <div class="pro_detail_block">
                       <h3>PVC Flexible Conduit</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.</p>
                    </div>
                </div>
            </li>
            <li data-aos="fade-up" data-aos-duration="800" data-aos-delay="300" data-aos-once="true">
                <div class="associated_product_item">
                    <div class="pro_img_block">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pro-02.png" alt="RAMCRO">
                    </div>
                    <div class="pro_detail_block">
                       <h3>Cables</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.</p>
                    </div>
                </div>
            </li>
            </ul>

	</div>






 
</section>

