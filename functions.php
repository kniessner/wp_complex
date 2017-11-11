<?php
/* Sets the path to the core framework directory. */
if ( !defined( 'HYBRID_DIR' ) )
	define( 'HYBRID_DIR', trailingslashit( TEMPLATEPATH ) . '/core/hybrid/' );

/* Sets the path to the core framework directory URI. */
if ( !defined( 'HYBRID_URI' ) )
	define( 'HYBRID_URI', trailingslashit( TEMPLATEPATH ) . '/core/hybrid/hybrid.php' );
/* Load the core theme framework. */
require_once( trailingslashit( TEMPLATEPATH ) . '/core/hybrid/hybrid.php' );
//$theme = new Hybrid();

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since 0.1.0
 */


add_action( 'after_setup_theme', 'complex_theme_setup' );
function complex_theme_setup() {

	/* Add theme support for core framework features. */
	add_theme_support( 'hybrid-core-widgets' );
	add_theme_support( 'hybrid-core-template-hierarchy' );
	add_theme_support( 'loop-pagination' );
	add_theme_support( 'get-the-image' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'cleaner-caption' );
	add_theme_support( 'cleaner-gallery' );
	add_theme_support( 'hybrid-core-theme-settings' );
}


add_action( 'after_setup_theme', 'complex_additional_setup' );

function complex_additional_setup() {
		require_once( trailingslashit( TEMPLATEPATH ) . 'wp_setup/admin/settings.php' );
		require_once( trailingslashit( TEMPLATEPATH ) . 'wp_setup/menus/settings.php' );
		require_once( trailingslashit( TEMPLATEPATH ) . 'wp_setup/admin/custom_post-types.php' );
		require_once( trailingslashit( TEMPLATEPATH ) . 'wp_setup/admin/custom_taxonomies.php' );

		//require_once( trailingslashit( TEMPLATEPATH ) . 'wp_setup/admin/walker_nav.php' );


}



/**
 * Enqueue additional scripts here.
 *
 *
 */

add_action('wp_enqueue_scripts', 'complex_add_scripts');

		function complex_add_scripts() {
			wp_enqueue_script( 'bundle', get_template_directory_uri() . '/core/js/bundle.js', array('jquery'), 1, false );
	   }

// Enable the option show in rest
add_filter( 'acf/rest_api/field_settings/show_in_rest', '__return_true' );

// Enable the option edit in rest
add_filter( 'acf/rest_api/field_settings/edit_in_rest', '__return_true' );


if( function_exists('acf_add_options_page') ) {

 	acf_add_options_page(array(
        'page_title' 	=> __('Media Settings', 'complex'),
        'menu_title' 	=> __('Media Settings', 'complex'),
        'menu_slug' 	=> 'media_settings',
        'capability' 	=> 'edit_posts',
        'post_id'		=> 'mediaSettings',
        'redirect' 	    => false
    ));


 
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Module',
		'menu_title' 	=> 'Modules',
		'menu_slug' 	=> 'modules',
		'post_id'		=> 'theme-modules'
	));
 
}

add_action( 'acf/rest_api/id', function( $id ) {
    if ( 'options' == $id ) {
    	$available = array( 'mediaSettings', 'theme-modules' );
    	
    	if ( isset( $_GET['option_id'] ) && in_array( $_GET['option_id'], $available ) ) {
    		return esc_sql( $_GET['option_id'] );
    	}
    }

    return $id;
} );




?>