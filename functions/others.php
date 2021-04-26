<?php

// Exit if accessed directly ---------------------------------------------------
if( !defined( 'ABSPATH' ) ) {
    die;
}

// define( 'WP_MEMORY_LIMIT', '2048M' );
// ACF Functionality -----------------------------------------------------------
// Include the ACF plugin.
include_once( ACF_PATH . 'acf.php' );

// Customize the url setting to fix incorrect asset URLs.
function acf_settings_url( $url ) {
    return ACF_URL;
}
add_filter('acf/settings/url', 'acf_settings_url');

//(Optional) Hide the ACF admin menu item---------------------------------------
// function acf_settings_show_admin( $show_admin ) {
//     return false;
// }
// add_filter('acf/settings/show_admin', 'acf_settings_show_admin');

// Yost Metabox Priority to low -----------------------------------------------
function move_yoast_below_acf() {
    return 'low';
}
add_filter( 'wpseo_metabox_prio', 'move_yoast_below_acf');


// Data Formation -----------------------------------------------------------
// remove_filter( 'the_content', 'wpautop' );
// remove_filter( 'the_excerpt', 'wpautop' );

// Excerpt More Modification -------------------------------------------------
function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// Hide the version Number to be safe from hacking ----------------------------
function wpb_remove_version() {
    return '';
}
add_filter('the_generator', 'wpb_remove_version');


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '500' );


remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

// Function for increasing excerpt length --------------------------------------
 
function lawyer_excerpt_length($length) {
    global $post;
    if ($post->post_type == 'post')
        return 15;
    else if ($post->post_type == 'advocaat')
        return 20;
    else if ($post->post_type == 'vragen')
        return 20;
    else
        return 30;
}
add_filter('excerpt_length', 'lawyer_excerpt_length');




// Change POSTS to Nieuws in WP dashboard ------------------------------------------------------------
add_action( 'admin_menu', 'pilau_change_post_menu_label' );
add_action( 'init', 'pilau_change_post_object_label' );
function pilau_change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Nieuws';
    $submenu['edit.php'][5][0] = 'Nieuws';
    $submenu['edit.php'][10][0] = 'Nieuws toevoegen';
    $submenu['edit.php'][16][0] = 'Nieuws-tags';
    echo '';
}
function pilau_change_post_object_label() {
    global $wp_post_types;
    $labels = &$wp_post_types['post']->labels;
    $labels->name = 'Nieuws';
    $labels->singular_name = 'Nieuws';
    $labels->add_new = 'Nieuws toevoegen';
    $labels->add_new_item = 'Nieuws toevoegen';
    $labels->edit_item = 'Nieuws bewerken';
    $labels->new_item = 'Nieuws';
    $labels->view_item = 'Bekijk Nieuws';
    $labels->search_items = 'Zoeken in Nieuws';
    $labels->not_found = 'Geen Nieuws gevonden';
    $labels->not_found_in_trash = 'Geen Nieuws gevonden in prullenbak';
} 


// Various Filters -----------------------------------------------------------


add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
    $content = str_replace('<br />', '', $content);
    return $content;
});
add_filter('wpcf7_autop_or_not', '__return_false');



// Remove Default editor for specific page template ---------------------------
function remove_editor() {
    if (isset($_GET['post'])) {
        $id = $_GET['post'];
        $template = get_post_meta($id, '_wp_page_template', true);
        switch ($template) {
            case 'templates/landing.php':
            // the below removes 'editor' support for 'pages'
            // if you want to remove for posts or custom post types as well
            // add this line for posts:
            // remove_post_type_support('post', 'editor');
            // add this line for custom post types and replace 
            // custom-post-type-name with the name of post type:
            // remove_post_type_support('custom-post-type-name', 'editor');
            remove_post_type_support('page', 'editor');
            break;
            default :
            // Don't remove any other template.
            break;
        }
    }
}
add_action('init', 'remove_editor');


// Dashboard Favicon changer -----------------------------------------------


function adminFavicon() {
    $siteidentity = get_field('site_identities','option');
    echo '<link rel="Shortcut Icon" type="image/x-icon" href="' .$siteidentity['favicon'].'" />';
}

function dashboardLogo() {
    $siteidentity = get_field('site_identities','option');
    echo '
    <style type="text/css">
    #wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
    background-image: url(' .$siteidentity['favicon'].') !important;
    background-position: 0 0;
    color:rgba(0, 0, 0, 0);
    background-size:100%;
    }
    #wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
    background-position: 0 0;
    }
    </style>
    ';
}

add_action('wp_before_admin_bar_render', 'dashboardLogo');
add_action( 'admin_head', 'adminFavicon' );
add_action( 'login_head', 'adminFavicon' );





