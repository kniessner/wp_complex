<?php

/* Register custom menus. */
add_action( 'init', 'complex_register_menus', 5 );


function complex_register_menus() {
	register_nav_menu( 'primary',    _x( 'Primary',    'nav menu location', 'hybrid-base' ) );
	register_nav_menu( 'secondary',  _x( 'Secondary',  'nav menu location', 'hybrid-base' ) );
	register_nav_menu( 'subsidiary', _x( 'Subsidiary', 'nav menu location', 'hybrid-base' ) );
}



add_filter( 'nav_menu_css_class', 'add_custom_class', 10, 2 );

function add_custom_class( $classes = array(), $menu_item = false ) {

    //Check if already have the class
    if (! in_array( 'current-menu-item', $classes ) ) {

        //Check if it's the ID we're looking for
        if ( 1633 == $menu_item->ID ) {

            //Check if is in a single post
            if ( is_single() ) {

                //Check if the single post is in the category
                if ( in_category( 'Services' ) ) {

                    $classes[] = 'current-menu-item';

                }

            }

        } elseif ( 1634 == $menu_item->ID ) {

            //Check if is in a single post
            if ( is_single() ) {

                //Check if the single post is in the category
                if ( in_category( 'Products' ) ) {

                    $classes[] = 'current-menu-item';

                }

            }

        }





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
}


add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
  
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance

  
}

?>