<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
    die;
}




// Register Custom Slider -----------------------------------------------------------------
function SliderPost() {

	$labels = array(
		'name'                  => _x( 'Slider', 'Slider', 'erkelens' ),
		'singular_name'         => _x( 'Slider', 'Slider', 'erkelens' ),
		'menu_name'             => __( 'Slider', 'erkelens' ),
		'name_admin_bar'        => __( 'Slider', 'erkelens' ),
		'archives'              => __( 'Slider Archieven', 'erkelens' ),
		'attributes'            => __( 'Slider Kenmerken', 'erkelens' ),
		'parent_item_colon'     => __( 'Ouder Slider:', 'erkelens' ),
		'all_items'             => __( 'Alle Slider', 'erkelens' ),
		'add_new_item'          => __( 'Voeg nieuwe toe Slider', 'erkelens' ),
		'add_new'               => __( 'Voeg nieuwe toe', 'erkelens' ),
		'new_item'              => __( 'Nieuw Slider', 'erkelens' ),
		'edit_item'             => __( 'Bewerk Slider', 'erkelens' ),
		'update_item'           => __( 'Bijwerken Slider', 'erkelens' ),
		'view_item'             => __( 'Visie Slider', 'erkelens' ),
		'view_items'            => __( 'Visie Slider', 'erkelens' ),
		'search_items'          => __( 'Zoeken Slider', 'erkelens' ),
		'not_found'             => __( 'Niet gevonden', 'erkelens' ),
		'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'erkelens' ),
		'featured_image'        => __( 'Uitgelichte afbeelding', 'erkelens' ),
		'set_featured_image'    => __( 'Uitgelichte afbeelding instellen', 'erkelens' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'erkelens' ),
		'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'erkelens' ),
		'insert_into_item'      => __( 'Invoegen in Slider', 'erkelens' ),
		'uploaded_to_this_item' => __( 'Geüpload naar deze Slider', 'erkelens' ),
		'items_list'            => __( 'Slider list', 'erkelens' ),
		'items_list_navigation' => __( 'Slider list navigation', 'erkelens' ),
		'filter_items_list'     => __( 'Filter Slider list', 'erkelens' ),
	);
	$args = array(
		'label'                 => __( 'Slider', 'erkelens' ),
		'description'           => __( 'Slider Description', 'erkelens' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-images-alt',
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'SliderPost', 0 );


// Register Custom FAQ -----------------------------------------------------------------
function FAQPost() {

	$labels = array(
		'name'                  => _x( 'FAQ', 'FAQ', 'erkelens' ),
		'singular_name'         => _x( 'FAQ', 'FAQ', 'erkelens' ),
		'menu_name'             => __( 'FAQ', 'erkelens' ),
		'name_admin_bar'        => __( 'FAQ', 'erkelens' ),
		'archives'              => __( 'FAQ Archieven', 'erkelens' ),
		'attributes'            => __( 'FAQ Kenmerken', 'erkelens' ),
		'parent_item_colon'     => __( 'Ouder FAQ:', 'erkelens' ),
		'all_items'             => __( 'Alle FAQ', 'erkelens' ),
		'add_new_item'          => __( 'Voeg nieuwe toe FAQ', 'erkelens' ),
		'add_new'               => __( 'Voeg nieuwe toe', 'erkelens' ),
		'new_item'              => __( 'Nieuw FAQ', 'erkelens' ),
		'edit_item'             => __( 'Bewerk FAQ', 'erkelens' ),
		'update_item'           => __( 'Bijwerken FAQ', 'erkelens' ),
		'view_item'             => __( 'Visie FAQ', 'erkelens' ),
		'view_items'            => __( 'Visie FAQ', 'erkelens' ),
		'search_items'          => __( 'Zoeken FAQ', 'erkelens' ),
		'not_found'             => __( 'Niet gevonden', 'erkelens' ),
		'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'erkelens' ),
		'featured_image'        => __( 'Uitgelichte afbeelding', 'erkelens' ),
		'set_featured_image'    => __( 'Uitgelichte afbeelding instellen', 'erkelens' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'erkelens' ),
		'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'erkelens' ),
		'insert_into_item'      => __( 'Invoegen in FAQ', 'erkelens' ),
		'uploaded_to_this_item' => __( 'Geüpload naar deze FAQ', 'erkelens' ),
		'items_list'            => __( 'FAQ list', 'erkelens' ),
		'items_list_navigation' => __( 'FAQ list navigation', 'erkelens' ),
		'filter_items_list'     => __( 'Filter FAQ list', 'erkelens' ),
	);
	$args = array(
		'label'                 => __( 'FAQ', 'erkelens' ),
		'description'           => __( 'FAQ Description', 'erkelens' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-admin-users',
	);
	register_post_type( 'faq', $args );

}
add_action( 'init', 'FAQPost', 0 );


// Register Custom Vragen -----------------------------------------------------------------
function VragenPost() {

	$labels = array(
		'name'                  => _x( 'Vragen', 'Vragen', 'erkelens' ),
		'singular_name'         => _x( 'Vragen', 'Vragen', 'erkelens' ),
		'menu_name'             => __( 'Vragen', 'erkelens' ),
		'name_admin_bar'        => __( 'Vragen', 'erkelens' ),
		'archives'              => __( 'Vragen Archieven', 'erkelens' ),
		'attributes'            => __( 'Vragen Kenmerken', 'erkelens' ),
		'parent_item_colon'     => __( 'Ouder Vragen:', 'erkelens' ),
		'all_items'             => __( 'Alle Vragen', 'erkelens' ),
		'add_new_item'          => __( 'Voeg nieuwe toe Vragen', 'erkelens' ),
		'add_new'               => __( 'Voeg nieuwe toe', 'erkelens' ),
		'new_item'              => __( 'Nieuw Vragen', 'erkelens' ),
		'edit_item'             => __( 'Bewerk Vragen', 'erkelens' ),
		'update_item'           => __( 'Bijwerken Vragen', 'erkelens' ),
		'view_item'             => __( 'Visie Vragen', 'erkelens' ),
		'view_items'            => __( 'Visie Vragen', 'erkelens' ),
		'search_items'          => __( 'Zoeken Vragen', 'erkelens' ),
		'not_found'             => __( 'Niet gevonden', 'erkelens' ),
		'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'erkelens' ),
		'featured_image'        => __( 'Uitgelichte afbeelding', 'erkelens' ),
		'set_featured_image'    => __( 'Uitgelichte afbeelding instellen', 'erkelens' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'erkelens' ),
		'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'erkelens' ),
		'insert_into_item'      => __( 'Invoegen in Vragen', 'erkelens' ),
		'uploaded_to_this_item' => __( 'Geüpload naar deze Vragen', 'erkelens' ),
		'items_list'            => __( 'Vragen list', 'erkelens' ),
		'items_list_navigation' => __( 'Vragen list navigation', 'erkelens' ),
		'filter_items_list'     => __( 'Filter Vragen list', 'erkelens' ),
	);
	$args = array(
		'label'                 => __( 'Vragen', 'erkelens' ),
		'description'           => __( 'Vragen Description', 'erkelens' ),
		'labels'                => $labels,
		'supports'              => array('title'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-share',
	);
	register_post_type( 'vragen', $args );

}
add_action( 'init', 'VragenPost', 0 );


// Register Custom Diensten -----------------------------------------------------------------
function DienstenPost() {

	$labels = array(
		'name'                  => _x( 'Diensten', 'Diensten', 'erkelens' ),
		'singular_name'         => _x( 'Diensten', 'Diensten', 'erkelens' ),
		'menu_name'             => __( 'Diensten', 'erkelens' ),
		'name_admin_bar'        => __( 'Diensten', 'erkelens' ),
		'archives'              => __( 'Diensten Archieven', 'erkelens' ),
		'attributes'            => __( 'Diensten Kenmerken', 'erkelens' ),
		'parent_item_colon'     => __( 'Ouder Diensten:', 'erkelens' ),
		'all_items'             => __( 'Alle Diensten', 'erkelens' ),
		'add_new_item'          => __( 'Voeg nieuwe toe Diensten', 'erkelens' ),
		'add_new'               => __( 'Voeg nieuwe toe', 'erkelens' ),
		'new_item'              => __( 'Nieuw Diensten', 'erkelens' ),
		'edit_item'             => __( 'Bewerk Diensten', 'erkelens' ),
		'update_item'           => __( 'Bijwerken Diensten', 'erkelens' ),
		'view_item'             => __( 'Visie Diensten', 'erkelens' ),
		'view_items'            => __( 'Visie Diensten', 'erkelens' ),
		'search_items'          => __( 'Zoeken Diensten', 'erkelens' ),
		'not_found'             => __( 'Niet gevonden', 'erkelens' ),
		'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'erkelens' ),
		'featured_image'        => __( 'Uitgelichte afbeelding', 'erkelens' ),
		'set_featured_image'    => __( 'Uitgelichte afbeelding instellen', 'erkelens' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'erkelens' ),
		'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'erkelens' ),
		'insert_into_item'      => __( 'Invoegen in Diensten', 'erkelens' ),
		'uploaded_to_this_item' => __( 'Geüpload naar deze Diensten', 'erkelens' ),
		'items_list'            => __( 'Diensten list', 'erkelens' ),
		'items_list_navigation' => __( 'Diensten list navigation', 'erkelens' ),
		'filter_items_list'     => __( 'Filter Diensten list', 'erkelens' ),
	);
	$args = array(
		'label'                 => __( 'Diensten', 'erkelens' ),
		'description'           => __( 'Diensten Description', 'erkelens' ),
		'labels'                => $labels,
		'supports'              => array('title','editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-megaphone',
	);
	register_post_type( 'diensten', $args );

}
add_action( 'init', 'DienstenPost', 0 );


// Register Custom Team -----------------------------------------------------------------
function TeamPost() {

	$labels = array(
		'name'                  => _x( 'Team', 'Team', 'erkelens' ),
		'singular_name'         => _x( 'Team', 'Team', 'erkelens' ),
		'menu_name'             => __( 'Team', 'erkelens' ),
		'name_admin_bar'        => __( 'Team', 'erkelens' ),
		'archives'              => __( 'Team Archieven', 'erkelens' ),
		'attributes'            => __( 'Team Kenmerken', 'erkelens' ),
		'parent_item_colon'     => __( 'Ouder Team:', 'erkelens' ),
		'all_items'             => __( 'Alle Team', 'erkelens' ),
		'add_new_item'          => __( 'Voeg nieuwe toe Team', 'erkelens' ),
		'add_new'               => __( 'Voeg nieuwe toe', 'erkelens' ),
		'new_item'              => __( 'Nieuw Team', 'erkelens' ),
		'edit_item'             => __( 'Bewerk Team', 'erkelens' ),
		'update_item'           => __( 'Bijwerken Team', 'erkelens' ),
		'view_item'             => __( 'Visie Team', 'erkelens' ),
		'view_items'            => __( 'Visie Team', 'erkelens' ),
		'search_items'          => __( 'Zoeken Team', 'erkelens' ),
		'not_found'             => __( 'Niet gevonden', 'erkelens' ),
		'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'erkelens' ),
		'featured_image'        => __( 'Uitgelichte afbeelding', 'erkelens' ),
		'set_featured_image'    => __( 'Uitgelichte afbeelding instellen', 'erkelens' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'erkelens' ),
		'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'erkelens' ),
		'insert_into_item'      => __( 'Invoegen in Team', 'erkelens' ),
		'uploaded_to_this_item' => __( 'Geüpload naar deze Team', 'erkelens' ),
		'items_list'            => __( 'Team list', 'erkelens' ),
		'items_list_navigation' => __( 'Team list navigation', 'erkelens' ),
		'filter_items_list'     => __( 'Filter Team list', 'erkelens' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'erkelens' ),
		'description'           => __( 'Team Description', 'erkelens' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor', 'thumbnail'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'TeamPost', 0 );


// Register Custom Recensie -----------------------------------------------------------------
function RecensiePost() {

	$labels = array(
		'name'                  => _x( 'Recensie', 'Recensie', 'erkelens' ),
		'singular_name'         => _x( 'Recensie', 'Recensie', 'erkelens' ),
		'menu_name'             => __( 'Recensie', 'erkelens' ),
		'name_admin_bar'        => __( 'Recensie', 'erkelens' ),
		'archives'              => __( 'Recensie Archieven', 'erkelens' ),
		'attributes'            => __( 'Recensie Kenmerken', 'erkelens' ),
		'parent_item_colon'     => __( 'Ouder Recensie:', 'erkelens' ),
		'all_items'             => __( 'Alle Recensie', 'erkelens' ),
		'add_new_item'          => __( 'Voeg nieuwe toe Recensie', 'erkelens' ),
		'add_new'               => __( 'Voeg nieuwe toe', 'erkelens' ),
		'new_item'              => __( 'Nieuw Recensie', 'erkelens' ),
		'edit_item'             => __( 'Bewerk Recensie', 'erkelens' ),
		'update_item'           => __( 'Bijwerken Recensie', 'erkelens' ),
		'view_item'             => __( 'Visie Recensie', 'erkelens' ),
		'view_items'            => __( 'Visie Recensie', 'erkelens' ),
		'search_items'          => __( 'Zoeken Recensie', 'erkelens' ),
		'not_found'             => __( 'Niet gevonden', 'erkelens' ),
		'not_found_in_trash'    => __( 'Niet gevonden in prullenbak', 'erkelens' ),
		'featured_image'        => __( 'Uitgelichte afbeelding', 'erkelens' ),
		'set_featured_image'    => __( 'Uitgelichte afbeelding instellen', 'erkelens' ),
		'remove_featured_image' => __( 'Uitgelichte afbeelding verwijderen', 'erkelens' ),
		'use_featured_image'    => __( 'Gebruik als uitgelichte afbeelding', 'erkelens' ),
		'insert_into_item'      => __( 'Invoegen in Recensie', 'erkelens' ),
		'uploaded_to_this_item' => __( 'Geüpload naar deze Recensie', 'erkelens' ),
		'items_list'            => __( 'Recensie list', 'erkelens' ),
		'items_list_navigation' => __( 'Recensie list navigation', 'erkelens' ),
		'filter_items_list'     => __( 'Filter Recensie list', 'erkelens' ),
	);
	$args = array(
		'label'                 => __( 'Recensie', 'erkelens' ),
		'description'           => __( 'Recensie Description', 'erkelens' ),
		'labels'                => $labels,
		'supports'              => array('title', 'editor'),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'menu_icon'             => 'dashicons-format-chat',
	);
	register_post_type( 'Recensie', $args );

}
add_action( 'init', 'RecensiePost', 0 );




