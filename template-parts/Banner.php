<?php
/**
 * Banner Component Template
 *
 * @package tasheel
 */

// Get banner settings from theme mods or defaults
$banner_title = get_theme_mod('banner_title', 'Empowering Businesses, Enabling Growth');
$banner_description = get_theme_mod('banner_description', 'Since 2005, TasHeel Holding Group (THG) has been driving innovation and transformation across travel, logistics, hospitality, and service sectors — shaping the future of Saudi enterprise.');
$banner_button_text = get_theme_mod('banner_button_text', 'Discover Our Story');
$banner_button_link = get_theme_mod('banner_button_link', '#');

// Check if banner logo exists
$banner_logo_default = get_template_directory_uri() . '/assets/images/header-logo.svg';
$banner_logo_path = get_template_directory() . '/assets/images/header-logo.svg';
$banner_logo = get_theme_mod('banner_logo', $banner_logo_default);
if (!file_exists($banner_logo_path)) {
    $banner_logo = '';
}

// Check if banner overlay exists
$banner_overlay_default = get_template_directory_uri() . '/assets/images/banner_overlay.svg';
$banner_overlay_path = get_template_directory() . '/assets/images/banner_overlay.svg';
$banner_overlay = get_theme_mod('banner_overlay', $banner_overlay_default);
if (!file_exists($banner_overlay_path)) {
    $banner_overlay = '';
}

// Get banner slides (using repeater or multiple images)
$banner_slides = array();
for ($i = 1; $i <= 3; $i++) {
    $slide_image = get_theme_mod('banner_slide_' . $i, '');
    if ($slide_image) {
        $banner_slides[] = $slide_image;
    }
}


?>

<div class="bannerContainer" id="bannerContainer"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner_bg.jpg') ;">
    <div class="banner_txt_block_01">
        <div class="wrap">
            <div class="banner_content">
                <h3 data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">Delivering Trusted Brands &amp;
                    Innovative</h3>
                <h1 data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">Products Across <br>The UAE and
                    Beyond</h1>
                <div class="button_wrps" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <a href="<?php echo esc_url(home_url('/products')); ?>" class="btn_style me-1 buttion_white">Explore
                        Products</a>
                    <a href="<?php echo esc_url(home_url('/contact-us')); ?>" class="btn_style btn_transparent">Get a
                        Quote</a>
                </div>
            </div>



        </div>

        <div class="banner_bottom_counter_section">
            <div class="wrap">
                <div class="banner_txt_block_01">
                    <ul class="banner_bottom_counter">
                        <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100" data-aos-once="true">
                            <div class="counter_box">
                                <div class="counter_numb">
                                    40+
                                </div>
                                <p>Years of Excellence</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="200" data-aos-once="true">
                            <div class="counter_box">
                                <div class="counter_numb">
                                    3
                                </div>
                                <p>Branches across UAE</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="300" data-aos-once="true">
                            <div class="counter_box">
                                <div class="counter_numb">
                                    20+
                                </div>
                                <p>Global Brands</p>
                            </div>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="400" data-aos-once="true">
                            <div class="counter_box">
                                <div class="counter_numb">
                                    10,000+
                                </div>
                                <p>Products in Stock</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>


        </div>
    </div>
</div>