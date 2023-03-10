<?php
/**
 * Perfection Portfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Perfection_Portfolio
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
function perfection_portfolio_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Perfection Portfolio, use a find and replace
		* to change 'perfection_portfolio' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'perfection-portfolio', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'perfection-portfolio' ),
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
			'perfection_portfolio_custom_background_args',
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
add_action( 'after_setup_theme', 'perfection_portfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function perfection_portfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'perfection_portfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'perfection_portfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function perfection_portfolio_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'perfection-portfolio' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'perfection-portfolio' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'perfection_portfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function perfection_portfolio_scripts() {
	wp_enqueue_style( 'perfection_portfolio-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'perfection_portfolio-style', 'rtl', 'replace' );

	wp_enqueue_script( 'perfection_portfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'perfection_portfolio_scripts' );

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

function theme_get_customizer_css() {
	ob_start();

  //CALL TO ACTION BTN BACKGROUND
	$navbkgd = get_theme_mod( 'customize_navcolor', '' );
		if ( ! empty( $navbkgd ) ) {
			?>
			
			.site-header{
					background-color: <?php echo $navbkgd; ?> ;
				}
			
			<?php
	}

	$navtext = get_theme_mod( 'customize_navtext_color', '' );
		if ( ! empty( $navtext ) ) {
			?>
			
			.site-title a, .main-navigation a, .site-description{
					color: <?php echo $navtext; ?> ;
				}
			
			<?php
		}


	$mobilebkgd = get_theme_mod( 'customize_navmobile_color', '' );
		if ( ! empty( $mobilebkgd ) ) {
		?>
		
		.main-navigation.toggled ul{
				background: linear-gradient(to left, <?php echo $mobilebkgd; ?>, transparent);
			}
		
		<?php
		}

	$navhover = get_theme_mod( 'customize_navhov_color', '' );
		if ( ! empty( $navhover ) ) {
		?>
		
		.main-navigation ul li a:hover{
				border-bottom: solid 2px <?php echo $navhover; ?>;
			}
		
		<?php
		}

	$burger = get_theme_mod( 'customize_burgermenu_color', '' );
		if ( ! empty( $burger ) ) {
		?>
		
		.burger-menu{
				color: <?php echo $burger; ?>;
			}
		
		<?php
		}

	$css = ob_get_clean();
	return $css;
}


function theme_enqueue_styles() {
	wp_enqueue_style( 'theme-styles', get_stylesheet_uri() ); // This is where you enqueue your theme's main stylesheet
	$custom_css = theme_get_customizer_css();
	wp_add_inline_style( 'theme-styles', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
function disable_embeds_filter_oembed_response_data_( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}