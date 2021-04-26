<?php
/**
 * Theme Functions
 *
 * @package Gisola
 * @author Jewel Mahmud
 * @link Fhttp://huqson.nl
 */

// Exit if accessed directly ---------------------------------------------------
if( !defined( 'ABSPATH' ) ) {
    die;
}


// Variable Declaration --------------------------------------------------------

define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );
define( 'STYLESHEET_DIR', get_stylesheet_directory() );
define( 'STYLESHEET_URI', get_stylesheet_directory_uri() );
define( 'THEME_NAME', 'erkelens' );
define( 'THEME_VERSION', '1.0' );

define( 'LIBS_DIR', THEME_DIR. '/functions' );
define( 'LIBS_URI', THEME_URI. '/functions' );
define( 'INC_DIR', THEME_DIR. '/includes' );
define( 'LANG_DIR', THEME_DIR. '/languages' );
define( 'LIB_DIR', THEME_DIR. '/lib' );

define( 'ACF_PATH', STYLESHEET_DIR. '/lib/acf/' );
define( 'ACF_URL', STYLESHEET_URI. '/lib/acf/' );

// Functions ------------------------------------------------------------------
require_once( LIBS_DIR .'/theme-setup.php' );

// Welcome Notice -------------------------------------------------------------

function GisolaWelcomeNotice() {
	global $pagenow;

	if ( is_admin() && isset( $_GET['activated'] ) && 'themes.php' === $pagenow ) {
		echo '<div class="updated notice notice-success is-dismissible"><p>'.sprintf( __( 'Thank you for installing Erkelens Theme by Huqson.nl.', 'gisola_theme' )  ).'</p></div>';
	}
}
add_action( 'admin_notices', 'GisolaWelcomeNotice' );


// Theme Styles ---------------------------------------------------------------
require_once( LIBS_DIR .'/theme-styles.php' );
// Theme Script ---------------------------------------------------------------
require_once( LIBS_DIR .'/theme-scripts.php' );
// Post Registration ----------------------------------------------------------
require_once( LIBS_DIR .'/post-registration.php' );
// Taxonomy Registration-------------------------------------------------------
require_once( LIBS_DIR .'/taxonomyregistration.php' );
// Widget Registration --------------------------------------------------------
require_once( LIBS_DIR .'/widget-registration.php' );
// Shortcode Registration -----------------------------------------------------
require_once( LIBS_DIR .'/shortcodes.php' );
// Plugin Recommendation ------------------------------------------------------
require_once( LIBS_DIR .'/plugin-recommendation.php' );
// Login Customization --------------------------------------------------------
require_once( LIBS_DIR .'/loginCustomization.php' );




/* ---------------------------------------------------------------------------
 * Library Intigration
 * All the External Libraries will be included here
 * --------------------------------------------------------------------------- */

// CMB2 Intigration ----------------------------------------------------------
// require_once( LIB_DIR .'/cmb2/init.php' );
// require_once( LIB_DIR .'/cmb2/cmbfunctions.php' );

// Redux Framework Intigration ------------------------------------------------
// require_once( LIB_DIR .'/redux-framework/ReduxCore/framework.php' );
// require_once( LIB_DIR .'/redux-framework/sample/config.php' );

// TGM Plugin Activation ------------------------------------------------------
// require_once( INC_DIR .'/tgm/config.php' );


// Visual Composer Elements ---------------------------------------------------
require_once( LIBS_DIR .'/VisualComposer/functions.php' );
require_once( LIBS_DIR .'/VisualComposer/base.php' );

// Theme Walker ---------------------------------------------------------------
require_once( THEME_DIR .'/includes/class/erkelens-walker.php' );
require_once( THEME_DIR .'/includes/class/erkelens-walker-mobile.php' );

// Ajax Load More -------------------------------------------------------------
require_once( LIBS_DIR .'/loadmore.php' );

// Others Fucntions -----------------------------------------------------------
require_once( LIBS_DIR .'/others.php' );

// Page Functionality ---------------------------------------------------------
require_once( LIBS_DIR .'/pagefunctions.php' );

// Theme Options --------------------------------------------------------------
require_once( LIBS_DIR .'/themeoptions.php' );


function huqsonExcerpt($x, $length) {
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);






