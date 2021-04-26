<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}

/* ---------------------------------------------------------------------------
 * Theme Widgets
 * This file will register all the widgets of the theme to WordPress
 * --------------------------------------------------------------------------- */

function GisolaWidgets() {
 
    register_sidebar( array(
        'name' => __( 'Footer 1', 'gisola_theme' ),
        'id' => 'footer-1',
        'description' => __( 'Footer 1 is desiged for Company Logo and short description', 'gisola_theme' ),
        'before_widget' => '<div class="footer-widget1">',
        'after_widget' => '</div>',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer 2', 'gisola_theme'),
        'id' => 'footer-2',
        'description' => __( 'Footer 2 is desgined for some menu item', 'gisola_theme' ),
        'before_widget' => '<div class="footerlist">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
    register_sidebar( array(
        'name' =>__( 'Footer 3', 'gisola_theme'),
        'id' => 'footer-3',
        'description' => __( 'Footer 3 is desgined for some menu item', 'gisola_theme' ),
        'before_widget' => '<div class="footerlist">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
    register_sidebar( array(
        'name' =>__( 'Footer 4', 'gisola_theme'),
        'id' => 'footer-4',
        'description' => __( 'Footer 4 is desgined for address', 'gisola_theme' ),
        'before_widget' => '<div class="col-6 col-sm-4 col-lg-2 mb-4 mb-lg-0">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ) );
}
 
add_action( 'widgets_init', 'GisolaWidgets' );