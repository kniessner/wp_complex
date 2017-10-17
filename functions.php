<?php
/* Sets the path to the core framework directory. */
if ( !defined( 'HYBRID_DIR' ) )
	define( 'HYBRID_DIR', trailingslashit( TEMPLATEPATH ) . '/core/hybrid/' );

/* Sets the path to the core framework directory URI. */
if ( !defined( 'HYBRID_URI' ) )
	define( 'HYBRID_URI', trailingslashit( TEMPLATEPATH ) . '/core/hybrid/hybrid.php' );
/* Load the core theme framework. */
require_once( trailingslashit( TEMPLATEPATH ) . '/core/hybrid/hybrid.php' );
$theme = new Hybrid();

/**
 * Theme setup function.  This function adds support for theme features and defines the default theme
 * actions and filters.
 *
 * @since 0.1.0
 */


add_action( 'after_setup_theme', 'hybrid_theme_setup' );
function hybrid_theme_setup() {

	/* Add theme support for core framework features. */
	add_theme_support( 'hybrid-core-widgets' );
	add_theme_support( 'hybrid-core-template-hierarchy' );
	add_theme_support( 'loop-pagination' );
	add_theme_support( 'get-the-image' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'cleaner-caption' );
	add_theme_support( 'cleaner-gallery' );

	// add_theme_support( 'breadcrumb-trail' );
	// add_theme_support( 'hybrid-core-post-meta-box' );
	 add_theme_support( 'hybrid-core-theme-settings' );
	// add_theme_support( 'hybrid-core-seo' );
}


add_action( 'after_setup_theme', 'additional_setup' );
function additional_setup() {

		require_once( trailingslashit( TEMPLATEPATH ) . 'settings.php' );

}


/**
 * Enqueue additional scripts here.
 *
 *
 */





?>

