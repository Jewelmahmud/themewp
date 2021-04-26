<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}

/* ---------------------------------------------------------------------------
 * Theme Style
 * This file will register all the styles of the theme to WordPress
 * --------------------------------------------------------------------------- */

function erkelensStyle() {
	wp_enqueue_style( 'LineIcons', THEME_URI . '/assets/css/LineIcons.css' );
	wp_enqueue_style( 'plugincss', THEME_URI . '/assets/css/plugins.css' );
	wp_enqueue_style( 'maincss', THEME_URI . '/assets/css/main.css' );
	wp_enqueue_style( 'erkelens', THEME_URI . '/assets/css/erkelens.css' );

}

add_action( 'wp_enqueue_scripts', 'erkelensStyle' );


// Admin Script Enque -------------------------------------------------------------------------------------
function erkelensAdminScript( $hook ) {
    wp_enqueue_style( 'adminstyle', THEME_URI . '/assets/css/admin.css' );
}
add_action( 'admin_enqueue_scripts', 'erkelensAdminScript' );