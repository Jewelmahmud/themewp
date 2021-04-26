<?php

// Exit if accessed directly -------------------------------------------------------------------
if( !defined( 'ABSPATH' ) ) {
    die;
}

function CarwashThemeSetup() {
	
	/* Make theme available for translation.*/
	load_theme_textdomain( 'carwash', LANG_DIR );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
        
    // This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();
        
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );	
	// set_post_thumbnail_size( 900, 400, true ); 
	add_image_size( 'newsbig', 385, 300, true );
	add_image_size( 'newssmall', 385, 207, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(		
		'mainmenu' 	=> esc_html__( 'Main Menu', 'carwash' ),		
		'mobilemenu' 	=> esc_html__( 'Mobile Menu', 'carwash' ),
		'footermenu' 	=> esc_html__( 'Footer Menu', 'carwash' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'carwash_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	// Add support for custom logo.
	add_theme_support( 'custom-logo' );

	// Post format.
	add_theme_support( 'post-formats', array('video', 'audio', 'quote', 'gallery'));
	
	// WordPress 5.0 and Gutenberg support
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
		
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );	
	
}
add_action( 'after_setup_theme', 'CarwashThemeSetup' );

function carwashFallbackMenu() {

}



