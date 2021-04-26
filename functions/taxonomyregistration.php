<?php

// Register Custom FAQ Category
function FAQCategory() {

	$labels = array(
		'name'                       => _x( 'FAQ Category', 'FAQ Category', 'Lawyer_theme' ),
		'singular_name'              => _x( 'FAQ Category', 'FAQ Category', 'Lawyer_theme' ),
		'menu_name'                  => __( 'FAQ Category', 'Lawyer_theme' ),
		'all_items'                  => __( 'All Items', 'Lawyer_theme' ),
		'parent_item'                => __( 'Parent Item', 'Lawyer_theme' ),
		'parent_item_colon'          => __( 'Parent Item:', 'Lawyer_theme' ),
		'new_item_name'              => __( 'New Item Name', 'Lawyer_theme' ),
		'add_new_item'               => __( 'Add New Item', 'Lawyer_theme' ),
		'edit_item'                  => __( 'Edit Item', 'Lawyer_theme' ),
		'update_item'                => __( 'Update Item', 'Lawyer_theme' ),
		'view_item'                  => __( 'View Item', 'Lawyer_theme' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'Lawyer_theme' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'Lawyer_theme' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'Lawyer_theme' ),
		'popular_items'              => __( 'Popular Items', 'Lawyer_theme' ),
		'search_items'               => __( 'Search Items', 'Lawyer_theme' ),
		'not_found'                  => __( 'Not Found', 'Lawyer_theme' ),
		'no_terms'                   => __( 'No items', 'Lawyer_theme' ),
		'items_list'                 => __( 'Items list', 'Lawyer_theme' ),
		'items_list_navigation'      => __( 'Items list navigation', 'Lawyer_theme' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'faq_category', array( 'faq' ), $args );

}
add_action( 'init', 'FAQCategory', 0 );