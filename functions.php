<?php
/**
 * tasheel functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tasheel
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tasheel_setup()
{
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tasheel, use a find and replace
	 * to change 'tasheel' to the name of your theme in all the template files.
	 */
	load_theme_textdomain('tasheel', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'tasheel'),
		)
	);

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tasheel_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height' => 250,
			'width' => 250,
			'flex-width' => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'tasheel_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tasheel_content_width()
{
	$GLOBALS['content_width'] = apply_filters('tasheel_content_width', 640);
}
add_action('after_setup_theme', 'tasheel_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tasheel_widgets_init()
{
	register_sidebar(
		array(
			'name' => esc_html__('Sidebar', 'tasheel'),
			'id' => 'sidebar-1',
			'description' => esc_html__('Add widgets here.', 'tasheel'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'tasheel_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function tasheel_scripts()
{
	// Enqueue Google Fonts - Poppins
	wp_enqueue_style('google-fonts-poppins', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap', array(), null);

	// Enqueue Swiper (needed for Banner slider)
	wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), '11.0.0');
	wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), '11.0.0', true);

	// Enqueue main CSS (compiled from SCSS with mixins and variables)
	$main_css_path = get_template_directory() . '/assets/scss/main.css';
	if (file_exists($main_css_path)) {
		wp_enqueue_style('tasheel-main', get_template_directory_uri() . '/assets/scss/main.css', array(), _S_VERSION);
	}

	// Enqueue common CSS (common component styles)
	$common_css_path = get_template_directory() . '/assets/css/common.css';
	if (file_exists($common_css_path)) {
		wp_enqueue_style('tasheel-common', get_template_directory_uri() . '/assets/css/common.css', array(), _S_VERSION);
	}

	// Enqueue main theme style
	wp_enqueue_style('tasheel-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('tasheel-style', 'rtl', 'replace');

	// Enqueue Header component styles (loaded on all pages)
	$header_css_path = get_template_directory() . '/assets/css/Header.css';
	if (file_exists($header_css_path)) {
		wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/Header.css', array(), _S_VERSION);
	}

	// Enqueue Footer component styles (loaded on all pages)
	$footer_css_path = get_template_directory() . '/assets/css/Footer.css';
	if (file_exists($footer_css_path)) {
		wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/Footer.css', array(), _S_VERSION);
	}

	// Enqueue main JS (global initialization)
	$main_js_path = get_template_directory() . '/assets/js/main.js';
	if (file_exists($main_js_path)) {
		wp_enqueue_script('tasheel-main', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true);
	}


	// Enqueue Header component script (loaded on all pages)
	$header_js_path = get_template_directory() . '/assets/js/Header.js';
	if (file_exists($header_js_path)) {
		wp_enqueue_script('header-script', get_template_directory_uri() . '/assets/js/Header.js', array(), _S_VERSION, true);
	}


	// Enqueue home page specific scripts
	if (is_front_page()) {
		// Enqueue Banner script (if exists)
		$banner_js_path = get_template_directory() . '/assets/js/Banner.js';
		if (file_exists($banner_js_path)) {
			wp_enqueue_script('banner-script', get_template_directory_uri() . '/assets/js/Banner.js', array(), _S_VERSION, true);
		}
	}

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'tasheel_scripts');

