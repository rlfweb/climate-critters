<?php
/**
 * Climate Critters functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Climate_Critters
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'climate_critters_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function climate_critters_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Climate Critters, use a find and replace
		 * to change 'climate-critters' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'climate-critters', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'climate-critters' ),
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
				'climate_critters_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'climate_critters_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function climate_critters_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'climate_critters_content_width', 640 );
}
add_action( 'after_setup_theme', 'climate_critters_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function climate_critters_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'climate-critters' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'climate-critters' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'climate_critters_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function climate_critters_scripts() {
	wp_enqueue_style( 'climate-critters-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'climate-critters-style', 'rtl', 'replace' );

	// RLF - load base.css
	wp_enqueue_style( 'climate-critters-base',  get_template_directory_uri() . '/css/base.css');
	
	// RLF - load custom.css
	wp_enqueue_style( 'climate-critters-custom',  get_template_directory_uri() . '/css/custom.css');

	// RLF - load tachyons.css
	wp_enqueue_style( 'climate-critters-tachyons',  get_template_directory_uri() . '/css/tachyons.css');

	wp_enqueue_script( 'climate-critters-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'climate_critters_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// RLF - Register Custom Post Type - Home Statement
function add_home_statement() {
	$labels = array(
		'name'                  => _x( 'Home-statement', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Home-statement', 'Post Type Singular Name' ), 
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
		'has_archive' 					=> true,
	);
	register_post_type( 'home-statement', $args );
}
add_action( 'init', 'add_home_statement', 0 );


// RLF - Register Custom Post Type - Sub-heading
function add_subheading() {
	$labels = array(
		'name'                  => _x( 'Subheading', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Subheading', 'Post Type Singular Name' ), 
	);
	$args = array(
		'labels'                => $labels,
		'taxonomies'            => array( 'category' ),
		'public'                => true,
		'has_archive' 					=> true,
	);
	register_post_type( 'subheading', $args );
}
add_action( 'init', 'add_subheading', 0 );


// RLF - Removes "Category:" from page titles
function prefix_category_title( $title ) {
	if ( is_category() ) {
			$title = single_cat_title( '', false );
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );


