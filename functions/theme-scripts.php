<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}

/* ---------------------------------------------------------------------------
 * Theme Script
 * This file will register all the styles of the theme to WordPress
 * --------------------------------------------------------------------------- */

function erkelensScripts() {
	wp_enqueue_script( 'plugin-js', THEME_URI . '/assets/js/plugins.js', '', false, true );
	wp_enqueue_script( 'all-js', THEME_URI . '/assets/js/all.min.js', '', false, true );
	wp_enqueue_script( 'isotope', THEME_URI . '/assets/js/isotope.pkgd.min.js', '', false, true );
	wp_enqueue_script( 'initjs', THEME_URI . '/assets/js/init.js', '', false, true );
	// wp_enqueue_script( 'init-js', THEME_URI . '/assets/js/init.js', '', false, true );
}

add_action( 'wp_enqueue_scripts', 'erkelensScripts' );