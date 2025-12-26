<?php
/**
 * Template Name: Career Detail
 * 
 * The template for displaying individual career/job detail pages
 *
 * @package tasheel
 */

get_header();
?>

<main id="primary" class="site-main">

<?php
// Breadcrumb for Career Detail page
$custom_breadcrumb = array(
	array(
		'title' => 'Home',
		'url' => home_url( '/' ),
	),
	array(
		'title' => 'Careers',
		'url' => home_url( '/careers' ),
	),
	array(
		'title' => get_the_title(), // Current job title
		'url' => get_permalink(),
	),
);
set_query_var( 'breadcrumb_items', $custom_breadcrumb );

get_template_part( 'template-parts/breadcrumb' );
?>

<section class="career_detail_section pt_80 pb_80">
 <div class="wrap">
    <div class="career_detail_content">
        <div class="career_detail_left">
            <span class="career_lable_txt">Posted 18 hours ago</span>
            <h3 class="h3_title_40 text_black">Sales & Distribution Executive  </h3>


            <span class="job_description_title">Job Description</span>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sit amet felis enim. Donec a velit sed ligula rhoncus elementum ut nec tellus. Nunc sodales, quam nec condimentum commodo, mi dui cursus lorem, ac congue lectus dui at sem. Nunc ultrices pellentesque lorem nec vehicula. Nam et ante vitae nulla placerat dapibus. Morbi eleifend accumsan augue sed ullamcorper. Cras non maximus libero. Morbi viverra gravida vestibulum.</p>
            <p>In massa dui, egestas a nunc at, dignissim consequat nisi. Curabitur dictum velit vel velit euismod ullamcorper. Nunc tellus augue, dictum a condimentum vitae, tempor in tellus.</p>
        </div>
        <div class="career_detail_right">

        <h3 class="h3_title_40 text_black">Apply Now</h3>
            <form class="careers_apply_form" method="post" enctype="multipart/form-data">
                <ul class="careers_form_list">
                    <li class="form_row_two_col">
                    <input type="text" class="form_input" id="full_name" name="full_name" placeholder="First Name*" required>
                       
                    </li>

                    <li>
                                <input class="form_input" type="email" id="email" name="email" placeholder="Last Name*" required>
                            </li>





                   
                            <li>
                                <input class="form_input" type="tel" id="phone_number" name="phone_number" placeholder="Email Address*" required>
                            </li>
                            <li>
                                <input class="form_input" type="text" id="service_required" name="service_required" placeholder="Contact Number*" required>
                            </li>
                  
                    <li class="form_row_full">
                        <input class="form_input" type="url" id="linkedin_url" name="linkedin_url" placeholder="City*">
                    </li>


                    
                    <li class="form_row_full">
                        <input class="form_input" type="url" id="linkedin_url" name="linkedin_url" placeholder="LinkedIn URL">
                    </li>






                    <li class="form_row_file">
                        <div class="file_upload_wrapper">
                            <input class="form_input" type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                            <div class="file_name_display">Attach Resume *</div>
                            <button type="button" class="btn_style buttion_blue browse_btn">Attach Resume</button>
                        </div>
                    </li>
                </ul>
                <div class="submit_btn_row">
                    <button type="submit" class="btn_style buttion_blue">Submit</button>
                </div>
            </form>
        </div>
    </div>
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
                fileNameDisplay.textContent = 'Attach Resume *';
            }
        });
    }
});
</script>

</main><!-- #main -->

<?php
get_footer();

