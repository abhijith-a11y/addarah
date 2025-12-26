<?php
/**
 * Stack Section Component Template
 * 
 * GSAP ScrollTrigger pinned gallery with stack animation
 *
 * @package tasheel
 */

?>

<section class="  pb_80 pinned_gallery stack-section" style="background: #F6F6F6;">
	<div class="wrap">
		<div class="pinned_image">
			<div class="crd_block stack-text-block">
				<div class="global_brands_content_title ">
					<h3 class="h3_title_55 text_black">
                    Connecting Industries with <br>Innovation and Quality
					</h3>
					<a href="<?php echo esc_url( home_url( '/industries' ) ); ?>" class="btn_style me-1 buttion_blue">Explore Industries</a>
				</div>
			</div>
		</div>

		<div class="pinned_image">
			<div class="crd_block">

            <div class="crd_block_content">

                <h3>Construction</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.</p>


                <a href="<?php echo esc_url( home_url( '/industries-detail' ) ); ?>" class="global_buttion">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack-arrow.svg" alt="RAMCRO">
								</a>



            </div>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack-01.jpg" class="img_mx_fluid" alt="Stack Image">
			</div>
		</div>

		<div class="pinned_image">
			<div class="crd_block">

            <div class="crd_block_content">

<h3>Oil & Gas</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.</p>


<a href="<?php echo esc_url( home_url( '/industries-detail' ) ); ?>" class="global_buttion">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack-arrow.svg" alt="RAMCRO">
                </a>



</div>




				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack-02.jpg" class="img_mx_fluid" alt="Stack Image">
			</div>
		</div>

		<div class="pinned_image z_100 last-pin-block">
			<div class="crd_block">



            <div class="crd_block_content">

<h3>Infrastructure</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur urna.</p>


<a href="<?php echo esc_url( home_url( '/industries-detail' ) ); ?>" class="global_buttion">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack-arrow.svg" alt="RAMCRO">
                </a>



</div>



				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/stack-03.jpg" class="img_mx_fluid" alt="Stack Image">
			</div>
		</div>
	</div>
</section>
