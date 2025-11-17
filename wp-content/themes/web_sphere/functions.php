<?php
/**
 * web_sphere functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package web_sphere
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.08' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function web_sphere_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on web_sphere, use a find and replace
		* to change 'web_sphere' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'web_sphere', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus(
		array(
			'header-menu' => esc_html__( 'Header menu', 'web_sphere' ),
			'footer-menu' => esc_html__( 'Footer menu', 'web_sphere' ),
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
			'web_sphere_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}

add_action( 'after_setup_theme', 'web_sphere_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function web_sphere_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'web_sphere_content_width', 640 );
}

add_action( 'after_setup_theme', 'web_sphere_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function web_sphere_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'web_sphere' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'web_sphere' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}

add_action( 'widgets_init', 'web_sphere_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function web_sphere_scripts() {
	// General styles
	wp_enqueue_style( 'web_sphere_style_main', get_template_directory_uri() . '/dist/separated-main-styles/separated-main.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_header', get_template_directory_uri() . '/dist/separated-styles/header.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_switcher', get_template_directory_uri() . '/dist/separated-styles/switcher.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_intro', get_template_directory_uri() . '/dist/separated-styles/intro.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_modal', get_template_directory_uri() . '/dist/separated-styles/modal.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_form', get_template_directory_uri() . '/dist/separated-styles/form.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_footer', get_template_directory_uri() . '/dist/separated-styles/footer.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_cookie', get_template_directory_uri() . '/dist/separated-styles/cookie.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_widget', get_template_directory_uri() . '/dist/separated-styles/contact-widget.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'web_sphere_style_animation', get_template_directory_uri() . '/dist/separated-styles/animations.css', array(), _S_VERSION, 'all' );

	if ( ! is_front_page() ) {
		wp_enqueue_style( 'web_sphere_style_breadcrumbs', get_template_directory_uri() . '/dist/separated-styles/breadcrumbs.css', array(), _S_VERSION, 'all' );
	}

	if ( is_archive() ) {
		wp_enqueue_style( 'web_sphere_style_archive', get_template_directory_uri() . '/dist/separated-styles/archive.css', array(), _S_VERSION, 'all' );
	}

	if ( is_single() ) {
		wp_enqueue_style( 'web_sphere_style_single', get_template_directory_uri() . '/dist/separated-styles/single-post.css', array(), _S_VERSION, 'all' );
	}

	// Main page sections styles
	if ( is_front_page() ) {
		wp_enqueue_style( 'web_sphere_style_intro_text',
			get_template_directory_uri() . '/dist/separated-styles/intro-text.css', array(), _S_VERSION, 'all' );
		wp_enqueue_style( 'web_sphere_style_services',
			get_template_directory_uri() . '/dist/separated-styles/services.css', array(), _S_VERSION, 'all' );
		wp_enqueue_style( 'web_sphere_style_marquee',
			get_template_directory_uri() . '/dist/separated-styles/marquee.css', array(), _S_VERSION, 'all' );
		wp_enqueue_style( 'web_sphere_style_form_section',
			get_template_directory_uri() . '/dist/separated-styles/form-section.css', array(), _S_VERSION, 'all' );
		wp_enqueue_style( 'web_sphere_style_advantages',
			get_template_directory_uri() . '/dist/separated-styles/advantages.css', array(), _S_VERSION, 'all' );
	}

	if (is_page_template( 'template-textpage.php' )) {
		wp_enqueue_style( 'web_sphere_style_textpage',
			get_template_directory_uri() . '/dist/separated-styles/text-page.css', array(), _S_VERSION, 'all' );
	}

	wp_enqueue_script( 'web_sphere_script_main', get_template_directory_uri() . '/dist/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'web_sphere_scripts' );

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Hooks
 */
require get_template_directory() . '/inc/template-hooks.php';

/**
 * Contact form 7
 */
require get_template_directory() . '/inc/wpcf7.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';

/**
 * Filters
 */
require get_template_directory() . '/inc/filters.php';


