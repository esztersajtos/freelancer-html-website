<?php
/**
 *
 * @package una
 * @since una 1.0.5
 * @license GPL 2.0
 * 
 */

# ------------------------------------------------------------------------
# Theme definitions
# ------------------------------------------------------------------------

define( 'una_theme_version' , '1.0.5' );  				# Theme version
if ( ! isset( $content_width ) ) $content_width = 640;  # Content Width

#-------------------------------------------------------------
# WordPress Head Clean-up
#-------------------------------------------------------------

function una_head_cleanup(){

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // New Title support since WP 4.1
    add_theme_support( 'title-tag' );

    // Disable comments feed
    add_filter( 'feed_links_show_comments_feed', '__return_false' ); 

    // Remove Smileys embedded in head
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );

    // Remove Smileys embedded in head
    remove_action( 'wp_print_styles', 'print_emoji_styles' );   

    // Remove RSS Feed in header
    remove_action('wp_head', 'feed_links', 2 );

    // Remove REST API
    remove_action( 'wp_head', 'rest_output_link_wp_head' );

    // Remove Windows Live Writer Manifest Link
    remove_action( 'wp_head', 'wlwmanifest_link');

    // Remove Weblog Client Link
    remove_action ('wp_head', 'rsd_link');

    // Remove WordPress Page/Post Shortlinks 
    remove_action( 'wp_head', 'wp_shortlink_wp_head');

    // Remove DNS Pre-fetch  (uncomment below to remove)
    // remove_action( 'wp_head', 'wp_resource_hints', 2 );


}

add_action( 'after_setup_theme', 'una_head_cleanup' );

#-------------------------------------------------------------
# Ultra geeky wp_head indentation
#-------------------------------------------------------------

function indented_wp_head(){
    ob_start();
    wp_head();
    $header = ob_get_contents();
    ob_end_clean();
    echo preg_replace("/\n/", "\n\t", substr($header, 0, -1));
    echo "\n";
}

#-------------------------------------------------------------
# Enqueue Styles
#-------------------------------------------------------------

function una_enqueue_styles() {             

	# Main stylesheet
  	wp_register_style( 'una-main-styles' , get_template_directory_uri(). "/style.css" , array(), una_theme_version, 'screen' );  	
  	wp_enqueue_style( 'una-main-styles' );           

}

add_action( 'wp_enqueue_scripts' , 'una_enqueue_styles' );

#-------------------------------------------------------------
# Enqueue Scripts 
#-------------------------------------------------------------

# False = Header
# True = Footer

function una_enqueue_scripts() {

	# Custom Scripts 
	wp_register_script  ( 'una-custom-code' , get_template_directory_uri().'/frontend/js/custom-code.js' , array(), una_theme_version, true );
	wp_enqueue_script ( 'una-custom-code' );  

}

add_action( 'wp_enqueue_scripts' , 'una_enqueue_scripts'   );