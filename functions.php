<?php
/**
 * unrealbarbershop functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package unrealbarbershop
 */
add_filter('show_admin_bar', '__return_false'); // отключить

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'unrealbarbershop_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unrealbarbershop_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on unrealbarbershop, use a find and replace
		 * to change 'unrealbarbershop' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'unrealbarbershop', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		//add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'unrealbarbershop' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'gallery',
				'caption',
				'style',
				'script',
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
endif;
add_action( 'after_setup_theme', 'unrealbarbershop_setup' );





/**
 * Enqueue scripts and styles.
 */
function unrealbarbershop_scripts() {
	wp_enqueue_style( 'unrealbarbershop-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_enqueue_style( 'global-style', get_template_directory_uri().'/css/global.css' );
    if (is_front_page()){
        wp_enqueue_style( 'main-style', get_template_directory_uri().'/css/main.css' );
    } else {
        wp_enqueue_style( 'tip-style', get_template_directory_uri().'/css/tip.css' );
    }
    if ( is_page_template('contacts.php') ) {
        wp_enqueue_style( 'contacts-style', get_template_directory_uri().'/css/contacts.css' );
    }


	//wp_style_add_data( 'unrealbarbershop-style', 'rtl', 'replace' );

	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/js/mobile-menu.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'zapis', 'https://w303166.yclients.com/widgetJS', array(), _S_VERSION, true );


	//wp_enqueue_script( 'unrealbarbershop-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );


}
add_action( 'wp_enqueue_scripts', 'unrealbarbershop_scripts' );


/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';


require get_template_directory() . '/inc/polylang-strings.php';
/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';



