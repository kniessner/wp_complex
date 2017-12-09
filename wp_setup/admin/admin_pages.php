<?php
if( function_exists('acf_add_options_page') ) {

 	$conf_parent = acf_add_options_page(array(
        'page_title' 	=> __('Complex Conf', 'complex'),
        'menu_title' 	=> __('Complex Conf', 'complex'),
        'menu_slug' 	=> 'complex',
        'redirect' 	    => false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> __('Media Settings', 'complex'),
        'menu_title' 	=> __('Media Settings', 'complex'),
        'menu_slug' 	=> 'media_settings',
        'post_id'		=> 'media-settings',
        'parent_slug' 	=> $conf_parent['menu_slug'],
        'redirect' 	    => false
    ));

	acf_add_options_page(array(
		'page_title' 	=> 'Theme Module',
		'menu_title' 	=> 'Modules',
		'menu_slug' 	=> 'modules',
		'parent_slug' 	=> $conf_parent['menu_slug'],
		'post_id'		=> 'theme-modules'
	));

}


add_action( 'admin_menu', 'register_Workspace' );
function register_Workspace() {
  // add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );

add_menu_page( 'Workspace', 'Workspace',
'manage_options', 'work', '', 'dashicons-welcome-widgets-menus', 3 );

add_submenu_page( 'work', 'Projects', 'Projects',
'manage_options', 'edit.php?post_type=projects', NULL );

add_submenu_page( 'work', 'Clients', 'Clients',
'manage_options', 'edit.php?post_type=clients', NULL );


add_submenu_page( 'work', 'Snippets', 'Snippets',
'manage_options', 'edit.php?post_type=snippets', NULL );

add_submenu_page( 'work', 'Scripts', 'Scripts',
'manage_options', 'edit.php?post_type=scripts', NULL );
}
?>
