<?php
/**
 * coderjibon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package coderjibon
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'coderjibon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function coderjibon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on coderjibon, use a find and replace
		 * to change 'coderjibon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'coderjibon', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				
				'main-menu' => esc_html__( 'Primary', 'coderjibon' ),
				'blog-menu' => esc_html__( 'Blog menu', 'coderjibon' ),
				
			)
		);

		function menu_empty(){
			
		}

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

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://wordpress.org/support/article/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'coderjibon_custom_background_args',
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
	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );
endif;
add_action( 'after_setup_theme', 'coderjibon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function coderjibon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'coderjibon_content_width', 640 );
}
add_action( 'after_setup_theme', 'coderjibon_content_width', 0 );


/**
 * Enqueue styles.
 */

function coderjibon_style() {

	wp_enqueue_style( 'googleapis','https://fonts.googleapis.com/css?family=Great+Vibes%7CRoboto:100,300,400,700,900');
	wp_enqueue_style( 'theme',get_template_directory_uri().'/css/owl.theme.css');
	wp_enqueue_style( 'vegas',get_template_directory_uri().'/css/vegas.min.css');
	wp_enqueue_style( 'transitions',get_template_directory_uri().'/css/owl.transitions.css');
	wp_enqueue_style( 'carousel',get_template_directory_uri().'/css/owl.carousel.min.css');
	wp_enqueue_style( 'magnific',get_template_directory_uri().'/css/magnific-popup.css');
	wp_enqueue_style( 'isotope',get_template_directory_uri().'/css/isotope.css');
	wp_enqueue_style( 'awesome',get_template_directory_uri().'/css/font-awesome.css');
	wp_enqueue_style( 'bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
	wp_enqueue_style( 'animate',get_template_directory_uri().'/css/animate.css');
	wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'responsive',get_template_directory_uri().'/css/responsive.css');
	wp_enqueue_style( 'coderjibon_style',get_template_directory_uri().'');
	wp_enqueue_style( 'coderjibon_style',get_template_directory_uri().'');

}
add_action( 'wp_enqueue_scripts', 'coderjibon_style' );

/**
 * Enqueue scripts.
 */
function coderjibon_scripts() {
	
	wp_enqueue_script('easing',get_template_directory_uri().'/js/jquery.easing.1.3.js',array('jquery'),true,true);
	wp_enqueue_script('bootstrap',get_template_directory_uri().'/js/bootstrap.min.js',array('jquery'),true,true);
	wp_enqueue_script('carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),true,true);
	wp_enqueue_script('pkgd',get_template_directory_uri().'/js/isotope.pkgd.min.js',array('jquery'),true,true);
	wp_enqueue_script('magnific',get_template_directory_uri().'/js/jquery.magnific-popup.min.js',array('jquery'),true,true);
	wp_enqueue_script('vegas',get_template_directory_uri().'/js/vegas.min.js',array('jquery'),true,true);
	wp_enqueue_script('lwtCountdown',get_template_directory_uri().'/js/jquery.lwtCountdown-1.0.js',array('jquery'),true,true);
	wp_enqueue_script('wow',get_template_directory_uri().'/js/wow.min.js',array('jquery'),true,true);
	wp_enqueue_script('jarallax',get_template_directory_uri().'/js/jarallax.js',array('jquery'),true,true);
	wp_enqueue_script('jarallax-element',get_template_directory_uri().'/js/jarallax-element.js',array('jquery'),true,true);
	wp_enqueue_script('jarallax-video',get_template_directory_uri().'/js/jarallax-video.js',array('jquery'),true,true);
	wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array('jquery'),true,true);

}

add_action( 'wp_enqueue_scripts', 'coderjibon_scripts' );

/*
** Theme Options Framwork file include (Codestar framework )
*/
if (file_exists(__DIR__.'/inc/Theme-option/cs-framework.php')) {
	require get_template_directory().'/inc/Theme-option/cs-framework.php';
}

/*
** TGM Framwork file include
*/
if (file_exists(__DIR__.'/inc/tgm/example.php')) {
	require get_template_directory().'/inc/tgm/example.php';
}



/*
** ShortCode  file include
*/

if (file_exists(__DIR__.'/inc/shortcode/home_slider.php')) {
	require get_template_directory().'/inc/shortcode/home_slider.php';
}
if (file_exists(__DIR__.'/inc/shortcode/couple_information.php')) {
	require get_template_directory().'/inc/shortcode/couple_information.php';
}
if (file_exists(__DIR__.'/inc/shortcode/memoragble-days.php')) {
	require get_template_directory().'/inc/shortcode/memoragble-days.php';
}
if (file_exists(__DIR__.'/inc/shortcode/heart-groomsman.php')) {
	require get_template_directory().'/inc/shortcode/heart-groomsman.php';
}
if (file_exists(__DIR__.'/inc/shortcode/wedding_ceremony.php')) {
	require get_template_directory().'/inc/shortcode/wedding_ceremony.php';
}
if (file_exists(__DIR__.'/inc/shortcode/you_are_attending.php')) {
	require get_template_directory().'/inc/shortcode/you_are_attending.php';
}
if (file_exists(__DIR__.'/inc/shortcode/lovely_gallery.php')) {
	require get_template_directory().'/inc/shortcode/lovely_gallery.php';
}
if (file_exists(__DIR__.'/inc/shortcode/blog_post.php')) {
	require get_template_directory().'/inc/shortcode/blog_post.php';
}
if (file_exists(__DIR__.'/inc/shortcode/thank_you.php')) {
	require get_template_directory().'/inc/shortcode/thank_you.php';
}


