<?php
/**
 * Template Name: Careers
 * 
 * The template for displaying the Careers page
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">
<?php
// Set a specific banner image for Careers page (can be changed as needed)
set_query_var( 'inner_banner_image', get_template_directory_uri() . '/assets/images/careers-banner.jpg' );

// Optionally set a custom banner title (leave empty to use page title)
set_query_var( 'inner_banner_title', 'Careers' );

get_template_part( 'template-parts/inner-banner' );
?>

<?php
// Breadcrumb for Careers page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Careers',
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>











<?php
// Product Overview data for Industry Detail
$product_overview_data = array(
	'title' => 'People ',
	'description' => array(
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod.',
		'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porttitor placerat ipsum, ac vulputate libero nam molesie tellus non nisi ornare, sit amet rhoncus arcu euismod. In eu quam non urna feugiat accumsan quis quis ipsum.',
	),
 
);
set_query_var( 'product_overview_data', $product_overview_data );

get_template_part( 'template-parts/product-overview' );
?>
 






<section class=" pb_80 careers_section" >
	<div class="wrap">
		 
	 <div class="careers_content_img">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/people-img.jpg" alt="People">
     </div>
	</div>
</section>






<section class="pb_80 pt_80 careers_section" style="background: #F6F6F6;">

    <div class="wrap">
    <h2 class="h3_title_55 text_black">Current Vacancies </h2>

    <ul class="careers_list">
		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Sales & Distribution Executive</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="<?php echo esc_url( home_url( '/careeres-details/' ) ); ?>" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Warehouse & Logistics Coordinator</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="<?php echo esc_url( home_url( '/careeres-details/' ) ); ?>" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Electrical Engineer – Projects Division</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="<?php echo esc_url( home_url( '/careeres-details/' ) ); ?>" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Warehouse & Logistics Coordinator</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="<?php echo esc_url( home_url( '/careeres-details/' ) ); ?>" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>

		<li>
			<ul class="career_block_list">
				<li class="cl_01">
					<h3>Procurement Officer</h3>
					<span>Posted 18 hours ago</span>
				</li>
				<li class="cl_02">
					<ul class="career_block_list_02">
						<li>
							Department
							<span>Marketing</span>
						</li>
						<li>
							Job posted on
							<span>Oct 06, 2025</span>
						</li>
						<li>
							Employee Type
							<span>Employee</span>
						</li>
					</ul>
				</li>
				<li class="cl_03">
					<a href="<?php echo esc_url( home_url( '/careeres-details/' ) ); ?>" class="btn_style me-1 buttion_blue">Apply Now <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-right.svg" alt="Arrow Right"></span></a>
				</li>
			</ul>
		</li>
    </ul>

	<div class="load_more_btn_row">
		<a href="" class="btn_style me-1 buttion_blue">Load more</a>
		</div>
    </div>
</section>


<section class="pb_80 pt_80 careers_section_form" style="background: #293977;">
	<div class="wrap text_center">
		<h2 class="h3_title_55  ">Apply Now</h2>
		<p>Reach out to us to co-create public impact and transformation using our end-to-end advisory services and digital solutions.</p>
	
	<form class="careers_apply_form" method="post" enctype="multipart/form-data">
		<ul class="careers_form_list">
			<li class="form_row_two_col">
				<ul>
					<li>
						<input type="text" id="full_name" name="full_name" placeholder="Full Name" required>
					</li>
					<li>
						<input type="email" id="email" name="email" placeholder="Email" required>
					</li>
				</ul>
			</li>
			<li class="form_row_two_col">
				<ul>
					<li>
						<input type="tel" id="phone_number" name="phone_number" placeholder="Phone Number" required>
					</li>
					<li>
						<input type="text" id="service_required" name="service_required" placeholder="Service Required" required>
					</li>
				</ul>
			</li>
			<li class="form_row_full">
				<input type="url" id="linkedin_url" name="linkedin_url" placeholder="LinkedIn URL">
			</li>
			<li class="form_row_file">
				 
				<div class="file_upload_wrapper">
					<input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
					<div class="file_name_display">Attach Resume *</div>
					<button type="button" class="btn_style buttion_blue browse_btn">Browse</button>
				</div>
			</li>
		</ul>
		<div class="submit_btn_row text_center">
		<button type="submit" class="btn_style  buttion_white submit_btn">Submit</button>
</div>
	</form>
	</div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const browseBtn = document.querySelector('.browse_btn');
    const fileInput = document.querySelector('#resume');
    const fileNameDisplay = document.querySelector('.file_name_display');
    
    if (browseBtn && fileInput && fileNameDisplay) {
        browseBtn.addEventListener('click', function(e) {
            e.preventDefault();
            fileInput.click();
        });
        
        fileInput.addEventListener('change', function(e) {
            if (e.target.files.length > 0) {
                fileNameDisplay.textContent = e.target.files[0].name;
            } else {
                fileNameDisplay.textContent = '';
            }
        });
    }
});
</script>

</main><!-- #main -->

<?php
get_footer();

