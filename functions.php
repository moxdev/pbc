<?php
/**
 * Promo Box Club functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Promo_Box_Club
 */

if ( ! function_exists( 'promo_box_club_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function promo_box_club_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Promo Box Club, use a find and replace
		 * to change 'promo_box_club' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'promo_box_club', get_template_directory() . '/languages' );

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
    add_image_size('home-feature', 1800, 500, false);
    add_image_size('feature-img', 1800, 400, false);
    add_image_size('home-see-whats-inside-feature-img', 500, 9999, false);
    add_image_size('post-feature-img', 400, 9999, false );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu'    => esc_html__( 'Main Menu', 'promo_box_club' ),
			'aux-menu'     => esc_html__( 'Aux Menu', 'promo_box_club' ),
			'footer-menu'  => esc_html__( 'Footer Menu', 'promo_box_club' ),
			'mobile-menu'  => esc_html__( 'Mobile Menu', 'promo_box_club' ),
			'marcom-menu'  => esc_html__( 'Marcom Menu', 'promo_box_club' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		// add_theme_support( 'custom-background', apply_filters( 'promo_box_club_custom_background_args', array(
		// 	'default-color' => 'ffffff',
		// 	'default-image' => '',
		// ) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'promo_box_club_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function promo_box_club_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'promo_box_club_content_width', 640 );
}
add_action( 'after_setup_theme', 'promo_box_club_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function promo_box_club_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'promo_box_club' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'promo_box_club' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
  ) );

  add_filter( 'widget_text', 'do_shortcode' );
}
add_action( 'widgets_init', 'promo_box_club_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function promo_box_club_scripts() {
	wp_enqueue_style( 'promo_box_club-style', get_stylesheet_uri() );

	wp_enqueue_script( 'promo_box_club-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'promo_box_club-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

  wp_enqueue_script('promo_box_club-object-fit-library', get_template_directory_uri() . '/js/min/ofi-min.js', NULL, NULL, TRUE);

  // if ( is_front_page() && function_exists( 'promo_box_club_home_video_carousel_section') ) {
  //   wp_enqueue_script('promo_box_club-flickity', get_template_directory_uri() . '/js/min/flickity-min.js', NULL, NULL, TRUE);
  //   wp_enqueue_script('promo_box_club-home-video-carousel', get_template_directory_uri() . '/js/min/home-video-carousel-min.js', NULL, NULL, TRUE);
  // }

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'promo_box_club_scripts' );

// Register Custom Post Type
function promo_box_club_create_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Videos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Video', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Home Video Carousel', 'text_domain' ),
		'name_admin_bar'        => __( 'Home Video Carousel', 'text_domain' ),
		'archives'              => __( 'Home Video Carousel Archives', 'text_domain' ),
		'attributes'            => __( 'Video Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Video:', 'text_domain' ),
		'all_items'             => __( 'All Videos', 'text_domain' ),
		'add_new_item'          => __( 'Add New Video', 'text_domain' ),
		'add_new'               => __( 'Add New Video', 'text_domain' ),
		'new_item'              => __( 'Add New Video', 'text_domain' ),
		'edit_item'             => __( 'Edit Video', 'text_domain' ),
		'update_item'           => __( 'Update Video', 'text_domain' ),
		'view_item'             => __( 'View Video', 'text_domain' ),
		'view_items'            => __( 'View Videos', 'text_domain' ),
		'search_items'          => __( 'Search Video', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into video', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this video', 'text_domain' ),
		'items_list'            => __( 'Videos list', 'text_domain' ),
		'items_list_navigation' => __( 'videos list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter videos list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Video', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt3',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'home_videos', $args );

}
add_action( 'init', 'promo_box_club_create_custom_post_type', 0 );

/**
 * Global Site Information
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Global Website Information',
		'menu_title'	=> 'Site Global Info',
		'menu_slug' 	=> 'global-information',
		'post_id' 	  => 'global-information',
    'capability'	=> 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title' 	=> 'SocialSettings',
    'menu_title'	=> 'Social',
    'parent_slug'	=> 'global-information',
    'post_id' 	  => 'social'
  ));

  acf_add_options_page(array(
    'page_title' 	=> 'How It Works',
    'menu_title'	=> 'How It Works',
    'menu_slug' 	=> 'how-it-works',
    'post_id' 	  => 'how-it-works',
    'capability'	=> 'edit_posts',
    'icon_url'    => 'dashicons-info'
  ));

  acf_add_options_page(array(
    'page_title' 	=> 'Discount Code',
    'menu_title'	=> 'Discount Code',
    'menu_slug' 	=> 'discount-code',
    'post_id' 	  => 'discount-code',
    'capability'	=> 'edit_posts',
    'icon_url'    => 'dashicons-tag'
  ));
}


/**
 * ADD CUSTOM ALLOWED HTML TAGS
 */

if(!function_exists('custom_add_allowed_tags')) {
  function custom_add_allowed_tags($tags) {
    $tags['iframe'] = array(
      'src'             => array(),
      'height'          => array(),
      'width'           => array(),
      'frameborder'     => array(),
      'allowfullscreen' => array(),
    );

    return $tags;
  }
  add_filter('wp_kses_allowed_html', 'custom_add_allowed_tags');
}

/**
 * Add plus icons into registered "mobile-menu" if menu has childrem items
 */
add_filter( 'walker_nav_menu_start_el', 'wpse_add_menu_icon', 10, 4);
function wpse_add_menu_icon( $item_output, $item, $depth, $args ){
    if( 'mobile-menu' == $args->theme_location && $depth == 0 && in_array('menu-item-has-children', $item->classes ) ) {
        $item_output .='<span class="icon-plus">&#43;</span>';
    }
    return $item_output;
}

/**
 * ADD STYLES TO WYSIWYG
 */

// Insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Use 'mce_buttons' for button row #1, mce_buttons_3' for button row #3
add_filter('mce_buttons_2', 'my_mce_buttons_2');

function my_mce_before_init_insert_formats( $init_array ) {
    $style_formats = array(
      array(
        'title' => 'Orange Heading', // Title to show in dropdown
        'block' => 'h2', // Element to add class to
        'classes' => 'orange-header' // CSS class to add
      ),
      array(
        'title' => 'Teal Heading', // Title to show in dropdown
        'block' => 'h2', // Element to add class to
        'classes' => 'teal-header' // CSS class to add
      ),
      array(
        'title' => 'Yellow Heading', // Title to show in dropdown
        'block' => 'h2', // Element to add class to
        'classes' => 'yellow-header' // CSS class to add
      ),
      array(
        'title' => 'Dark Letter Span', // Title to show in dropdown
        'inline' => 'span', // Element to add class to
        'classes' => 'dark-letter-span' // CSS class to add
      ),
      array(
        'title' => 'Orange Letter Span', // Title to show in dropdown
        'inline' => 'span', // Element to add class to
        'classes' => 'orange-letter-span' // CSS class to add
      ),
      array(
        'title' => 'Button', // Title to show in dropdown
        'block' => 'button', // Element to add class to
        'classes' => 'btn' // CSS class to add
      )
    );
    $init_array['style_formats'] = json_encode( $style_formats );
    return $init_array;
}
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );

// EDITOR STYLES

function promo_box_club_add_editor_styles() {
  add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'promo_box_club_add_editor_styles' );

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

/**
 * Plugins
 */
include_once( get_template_directory() . '/plugins/mm4-you-contact-form/mm4-you-cf.php' );

/**
 * Home Page Video Carousel.
 */
require get_template_directory() . '/inc/home-video-carousel.php';

/**
 * How It Works Section.
 */
require get_template_directory() . '/inc/home-how-it-works.php';

/**
 * Home Page Why Join Section.
 */
require get_template_directory() . '/inc/home-why-join.php';

/**
 * Email Subscription Section.
 */
require get_template_directory() . '/inc/email-subscription.php';

/**
 * Flexible Content Section.
 */
require get_template_directory() . '/inc/flexible-content.php';

/**
 * Flexible Content Section: How It Works.
 */
require get_template_directory() . '/inc/flexible-content-how-it-works.php';

/**
 * Flexible Content Section: Custom Editor.
 */
require get_template_directory() . '/inc/flexible-content-custom-editor.php';

/**
 * Custom Header Image section.
 */
require get_template_directory() . '/inc/custom-header-img.php';

/**
 * Custom function for What's New page.
 */
require get_template_directory() . '/inc/whats-new.php';

/**
 * Custom function for What's New page.
 */
require get_template_directory() . '/inc/home-see-whats-inside.php';

/**
 * Custom function to display Mobile Menu.
 */
require get_template_directory() . '/inc/mobile-navigation.php';