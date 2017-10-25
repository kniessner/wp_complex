<?php

/* Register custom menus. */
add_action( 'init', 'complex_register_menus', 5 );
function complex_register_menus() {
	register_nav_menu( 'primary',    _x( 'Primary',    'nav menu location', 'hybrid-base' ) );
	register_nav_menu( 'secondary',  _x( 'Secondary',  'nav menu location', 'hybrid-base' ) );
	register_nav_menu( 'subsidiary', _x( 'Subsidiary', 'nav menu location', 'hybrid-base' ) );
}


function wpdocs_special_nav_class( $classes, $item ) {
        // Notice you can change the conditional from is_single() and $item->title
         if (in_array('current-menu-item', $classes) ){
	        $classes[] = 'nav-item active ';
	    }
    $classes[] = "nav-item";
        return $classes;
}
add_filter( 'nav_menu_css_class' , 'wpdocs_special_nav_class' , 10, 2 );

function add_menuclass($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
}
add_filter('wp_nav_menu','add_menuclass');


/* Register sidebars. */
add_action( 'widgets_init', 'complex_register_sidebars', 5 );
function complex_register_sidebars() {

	hybrid_register_sidebar(
		array(
			'id'          => 'posts',
			'name'        => _x( 'Posts', 'sidebar', 'k_complex' ),
			'description' => __( 'Shown on posts and blog index.', 'k_complex' )
		)
	);

	hybrid_register_sidebar(
		array(
			'id'          => 'pages',
			'name'        => _x( 'Pages', 'sidebar', 'k_complex' ),
			'description' => __( 'Shown on pages.', 'k_complex' )
		)
	);
}?>