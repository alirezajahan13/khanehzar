<?php
/**
 * khane_zar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package khane_zar
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function khane_zar_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on khane_zar, use a find and replace
		* to change 'khane_zar' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'khane_zar', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'khane_zar' ),
			'menu-2' => esc_html__( 'Mobile-Menu', 'khane_zar')
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
			'khane_zar_custom_background_args',
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
add_action( 'after_setup_theme', 'khane_zar_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function khane_zar_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'khane_zar_content_width', 640 );
}
add_action( 'after_setup_theme', 'khane_zar_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function khane_zar_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'khane_zar' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'khane_zar' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'khane_zar_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function khane_zar_scripts() {
	wp_enqueue_style( 'khane_zar-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'khane_zar-style', 'rtl', 'replace' );
	wp_enqueue_style( 'swiper-style', get_template_directory_uri().'/swiper/swiper-bundle.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'additional-style', get_template_directory_uri().'/additional.css', array(), _S_VERSION );
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'khane_zar-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'swiper', get_template_directory_uri() . '/swiper/swiper-bundle.min.js', array(), _S_VERSION, true );
  	wp_enqueue_script( 'khane_zar-swiperSildes', get_template_directory_uri() . '/js/swiperSlides.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'khane_zar-home', get_template_directory_uri() . '/js/home.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'mobileMenu', get_template_directory_uri() . '/js/mobileMenu.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'customLike-home', get_template_directory_uri() . '/js/customLike.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'khane_zar_scripts' );

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


function bbloomer_shop_product_short_description() {
	the_excerpt();
}

function my_excerpt_length($length){
	return 18;
}
add_filter('excerpt_length', 'my_excerpt_length');


function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');



function pagination_bar() {
	global $wp_query;
	$total_pages = $wp_query->max_num_pages;
	if ($total_pages > 1){
		// $current_page = max(1, get_query_var('paged'));
		global $wp_query;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		echo paginate_links(array(
			'base' =>@add_query_arg('paged','%#%'),
			'format' => '/page/%#%',
			'current' => $current,
			'total' => $total_pages,
			'next_text' => '<span class="leftArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#3f3f3f" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m20.5 26.5-12-12 12-12"></path></svg></span>',
			'prev_text' => '<span class="rightArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#3f3f3f" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m8.5 2.5 12 12-12 12"></path></svg></span>'
		));
	}
}


function calculate_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count($content);
    $reading_speed = 150;
    $reading_time = ceil($word_count / $reading_speed);
    return sprintf(_n('%d', '%d', $reading_time, 'textdomain'), $reading_time);
}
function reading_time_shortcode() {
    return '<span class="reading-time">' . calculate_reading_time() . '</span>';
}
add_shortcode('reading_time', 'reading_time_shortcode');



// Add AJAX actions
function custom_ajax_scripts() {
    wp_enqueue_script('ajax-script', get_template_directory_uri() . '/js/customLike.js', array('jquery'), '', true);

    // Localize the script with new data
    $script_data = array(
        'ajax_url' => admin_url('admin-ajax.php'),
    );
    wp_localize_script('ajax-script', 'ajax_object', $script_data);
}

add_action('wp_enqueue_scripts', 'custom_ajax_scripts');

// Handle AJAX request to update like count
function update_likes() {
    $post_id = $_POST['post_id'];

    // Get current like count
    $current_likes = get_post_meta($post_id, '_like_count', true);

    // Increment like count
    $new_likes = $current_likes + 1;

    // Update like count in post meta
    update_post_meta($post_id, '_like_count', $new_likes);

    // Echo the updated like count
    echo $new_likes;

    // Ensure that WordPress does not print anything else
    wp_die();
}

add_action('wp_ajax_update_likes', 'update_likes');
add_action('wp_ajax_nopriv_update_likes', 'update_likes'); // For non-logged-in users

// Handle AJAX request to get initial like count
function get_initial_likes() {
    $post_id = $_POST['post_id'];

    // Get initial like count
    $initial_likes = get_post_meta($post_id, '_like_count', true) ?: 0;

    // Echo the initial like count
    echo $initial_likes;

    // Ensure that WordPress does not print anything else
    wp_die();
}

add_action('wp_ajax_get_initial_likes', 'get_initial_likes');
add_action('wp_ajax_nopriv_get_initial_likes', 'get_initial_likes'); // For non-logged-in users



add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);

function my_wp_nav_menu_objects($items, $args) {
    foreach ($items as &$item) {
        $icon = get_field('svg_menu_item_icon', $item);
        if ($icon) {
            $icon_markup = '<div class="menu-icon">' . $icon . '</div>';
            $item->title = $icon_markup . $item->title;
        }
    }
    return $items;
}

add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_svg_tag', 10, 2 );

function acf_add_allowed_svg_tag( $tags, $context ) {
    if ( $context === 'acf' ) {
        $tags['svg']  = array(
            'xmlns'        => true,
      'width'      => true,
      'height'    => true,
      'stroke'    => true,
      'stroke-width'    => true,
      'preserveAspectRatio'  => true,
            'fill'        => true,
            'viewbox'        => true,
            'role'        => true,
            'aria-hidden'      => true,
            'focusable'        => true,
        );

        $tags['path'] = array(
            'd'    => true,
            'fill' => true,
			'stroke'    => true,
			'stroke-width'    => true,
        );
    }
    return $tags;
}