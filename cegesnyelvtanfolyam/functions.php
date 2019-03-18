<?php
/**
 * Cegesnyelvtanfolyam functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Cegesnyelvtanfolyam
 */

if ( ! function_exists( 'cegesnyelvtanfolyam_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cegesnyelvtanfolyam_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Cegesnyelvtanfolyam, use a find and replace
		 * to change 'cegesnyelvtanfolyam' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cegesnyelvtanfolyam', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cegesnyelvtanfolyam' ),
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
		add_theme_support( 'custom-background', apply_filters( 'cegesnyelvtanfolyam_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

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
add_action( 'after_setup_theme', 'cegesnyelvtanfolyam_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cegesnyelvtanfolyam_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cegesnyelvtanfolyam_content_width', 640 );
}
add_action( 'after_setup_theme', 'cegesnyelvtanfolyam_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cegesnyelvtanfolyam_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cegesnyelvtanfolyam' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cegesnyelvtanfolyam' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cegesnyelvtanfolyam_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cegesnyelvtanfolyam_scripts() {
	wp_enqueue_style( 'cegesnyelvtanfolyam-style', get_stylesheet_uri() );

	wp_enqueue_script( 'cegesnyelvtanfolyam-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'cegesnyelvtanfolyam-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cegesnyelvtanfolyam_scripts' );

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
 * Advanced Custom Fields Setup
 */
if( function_exists('acf_add_local_field_group') ):

	acf_add_local_field_group(array(
		'key' => 'group_5c8a7a8dd7b17',
		'title' => 'Főcím mezők',
		'fields' => array(
			array(
				'key' => 'field_5c8a7a9b0ce3a',
				'label' => 'Főcím',
				'name' => 'focim',
				'type' => 'text',
				'instructions' => 'Slideshow alatti cím',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Angol és spanyol nyelvtanfolyamok',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8a7ab50ce3b',
				'label' => 'Alcím',
				'name' => 'alcim',
				'type' => 'text',
				'instructions' => 'Slideshow alatti kisbetűs szöveg',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Egyéni és kiscsoportos vállalati tanfolyamok, magánórák',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '33',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5c8a7b5f5b31e',
		'title' => 'Welcome mezők',
		'fields' => array(
			array(
				'key' => 'field_5c8a7ba9a45b1',
				'label' => 'Welcome cím',
				'name' => 'welcome_cim',
				'type' => 'text',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => 'Hatékony, kiscsoportos angol és spanyol tanfolyamok az Ön cégénél.',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
			array(
				'key' => 'field_5c8a7bc3a45b2',
				'label' => 'Welcome leírás',
				'name' => 'welcome_leiras',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '<p><i>Üdvözlöm a honlapomon! Kedves Érdeklődő!</i></p>
											<p><i>
													Szeretné, ha munkatársai megállnák a helyüket angol nyelven történő tárgyalásokon? Fontos, hogy
													pontosan és gördülékenyen kommunikáljanak és prezentáljanak? Szükségük van az angolra mindennapi
													tevékenységük során, hiszen nyelvigényes környezetben dolgoznak? Amennyiben a válasza valamelyik
													kérdésre igen, kérem, olvasson tovább.
													<br/>Üdvözlettel,
													<br/>Veres András</i></p>',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5c8a7bf362bac',
				'label' => 'Welcome kép',
				'name' => 'welcome_kep',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
				'preview_size' => 'full',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '33',
				),
			),
		),
		'menu_order' => 1,
		'position' => 'acf_after_title',
		'style' => 'default',
		'label_placement' => 'left',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	acf_add_local_field_group(array(
		'key' => 'group_5c8a7ce87b3d7',
		'title' => 'Rólam',
		'fields' => array(
			array(
				'key' => 'field_5c8a7cee793ef',
				'label' => 'Rólam cím bal',
				'name' => 'rolam_cim_bal',
				'type' => 'wysiwyg',
				'instructions' => 'Bal oldali szövegterület',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
			array(
				'key' => 'field_5c8a7d40793f0',
				'label' => 'Rólam cím jobb oldal',
				'name' => 'rolam_cim_jobb',
				'type' => 'wysiwyg',
				'instructions' => 'Rólam szekció jobb oldali szöveg',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'page',
					'operator' => '==',
					'value' => '33',
				),
			),
		),
		'menu_order' => 3,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;

