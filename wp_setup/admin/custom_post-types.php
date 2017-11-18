<?php


/********************************************************************************
Custom Post-types
********************************************************************************/

add_action( 'init', 'create_custom_post_types' );
function create_custom_post_types() {

	$labels = array(
				'name'                  => _x( 'Projects', 'Post Type General Name', 'project_complex' ),
				'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'project_complex' ),
				'menu_name'             => __( 'Projects', 'project_complex' ),
				'name_admin_bar'        => __( 'Projects', 'project_complex' ),
				'archives'              => __( 'Projects Archives', 'project_complex' ),
				'attributes'            => __( 'Projects Attributes', 'project_complex' ),
				'parent_item_colon'     => __( 'Parent Project:', 'project_complex' ),
				'all_items'             => __( 'All Projects', 'project_complex' ),
				'add_new_item'          => __( 'Add New Project', 'project_complex' ),
				'add_new'               => __( 'Add New Project', 'project_complex' ),
				'new_item'              => __( 'New Project', 'project_complex' ),
				'edit_item'             => __( 'Edit Project', 'project_complex' ),
				'update_item'           => __( 'Update Project', 'project_complex' ),
				'view_item'             => __( 'View Project', 'project_complex' ),
				'view_items'            => __( 'View Projects', 'project_complex' ),
				'search_items'          => __( 'Search Project', 'project_complex' ),
				'not_found'             => __( 'Not found', 'project_complex' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'project_complex' ),
				'featured_image'        => __( 'Featured Image', 'project_complex' ),
				'set_featured_image'    => __( 'Set featured image', 'project_complex' ),
				'remove_featured_image' => __( 'Remove featured image', 'project_complex' ),
				'use_featured_image'    => __( 'Use as featured image', 'project_complex' ),
				'insert_into_item'      => __( 'Insert into Project', 'project_complex' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'project_complex' ),
				'items_list'            => __( 'Projects list', 'project_complex' ),
				'items_list_navigation' => __( 'Projects list navigation', 'project_complex' ),
				'filter_items_list'     => __( 'Filter Projects list', 'project_complex' ),
			);
	$args = array(
				'label'                 => __( 'Project', 'project_complex' ),
				'description'           => __( 'Post Type Description', 'project_complex' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => true,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-clipboard',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,		
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest'          => true,
				'rest_base'             => 'projects',
				'rest_controller_class' => 'WP_REST_Posts_Projects',
			);

		register_post_type( 'projects', $args );

	$labels = array(
				'name'                  => _x( 'Web Storage', 'Post Type General Name', 'Entry_complex' ),
				'singular_name'         => _x( 'Web Storage', 'Post Type Singular Name', 'Entry_complex' ),
				'menu_name'             => __( 'Web Storage', 'Entry_complex' ),
				'name_admin_bar'        => __( 'Web Storage', 'Entry_complex' ),
				'archives'              => __( 'Entries Archives', 'Entry_complex' ),
				'attributes'            => __( 'Entries Attributes', 'Entry_complex' ),
				'parent_item_colon'     => __( 'Parent Entry:', 'Entry_complex' ),
				'all_items'             => __( 'All Entries', 'Entry_complex' ),
				'add_new_item'          => __( 'Add New Entry', 'Entry_complex' ),
				'add_new'               => __( 'Add New Entry', 'Entry_complex' ),
				'new_item'              => __( 'New Entry', 'Entry_complex' ),
				'edit_item'             => __( 'Edit Entry', 'Entry_complex' ),
				'update_item'           => __( 'Update Entry', 'Entry_complex' ),
				'view_item'             => __( 'View Entry', 'Entry_complex' ),
				'view_items'            => __( 'View Entries', 'Entry_complex' ),
				'search_items'          => __( 'Search Entry', 'Entry_complex' ),
				'not_found'             => __( 'Not found', 'Entry_complex' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'Entry_complex' ),
				'featured_image'        => __( 'Featured Image', 'Entry_complex' ),
				'set_featured_image'    => __( 'Set featured image', 'Entry_complex' ),
				'remove_featured_image' => __( 'Remove featured image', 'Entry_complex' ),
				'use_featured_image'    => __( 'Use as featured image', 'Entry_complex' ),
				'insert_into_item'      => __( 'Insert into Entry', 'Entry_complex' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'Entry_complex' ),
				'items_list'            => __( 'Entries list', 'Entry_complex' ),
				'items_list_navigation' => __( 'Entries list navigation', 'Entry_complex' ),
				'filter_items_list'     => __( 'Filter Entries list', 'Entry_complex' ),
			);

	$args = array(
				'label'                 => __( 'Entry', 'Entry_complex' ),
				'description'           => __( 'Post Type Description', 'Entry_complex' ),
				'labels'                => $labels,
				'hierarchical'          => true,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-clipboard',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,		
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest'          => true,
				'rest_base'             => 'webStorage',
				'rest_controller_class' => 'WP_REST_Posts_webStorage',
			);

		register_post_type( 'web_storage', $args );


	$labels = array(
				'name'                  => _x( 'Scripts', 'Post Type General Name', 'Script_complex' ),
				'singular_name'         => _x( 'Script', 'Post Type Singular Name', 'Script_complex' ),
				'menu_name'             => __( 'Scripts', 'Script_complex' ),
				'name_admin_bar'        => __( 'Scripts', 'Script_complex' ),
				'archives'              => __( 'Scripts Archives', 'Script_complex' ),
				'attributes'            => __( 'Scripts Attributes', 'Script_complex' ),
				'parent_item_colon'     => __( 'Parent Script:', 'Script_complex' ),
				'all_items'             => __( 'All Scripts', 'Script_complex' ),
				'add_new_item'          => __( 'Add New Script', 'Script_complex' ),
				'add_new'               => __( 'Add New Script', 'Script_complex' ),
				'new_item'              => __( 'New Script', 'Script_complex' ),
				'edit_item'             => __( 'Edit Script', 'Script_complex' ),
				'update_item'           => __( 'Update Script', 'Script_complex' ),
				'view_item'             => __( 'View Script', 'Script_complex' ),
				'view_items'            => __( 'View Scripts', 'Script_complex' ),
				'search_items'          => __( 'Search Script', 'Script_complex' ),
				'not_found'             => __( 'Not found', 'Script_complex' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'Script_complex' ),
				'featured_image'        => __( 'Featured Image', 'Script_complex' ),
				'set_featured_image'    => __( 'Set featured image', 'Script_complex' ),
				'remove_featured_image' => __( 'Remove featured image', 'Script_complex' ),
				'use_featured_image'    => __( 'Use as featured image', 'Script_complex' ),
				'insert_into_item'      => __( 'Insert into Script', 'Script_complex' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'Script_complex' ),
				'items_list'            => __( 'Scripts list', 'Script_complex' ),
				'items_list_navigation' => __( 'Scripts list navigation', 'Script_complex' ),
				'filter_items_list'     => __( 'Filter Scripts list', 'Script_complex' ),
			);
	$args = array(
				'label'                 => __( 'Script', 'Script_complex' ),
				'description'           => __( 'Post Type Description', 'Script_complex' ),
				'labels'                => $labels,
				'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => true,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'             => 'dashicons-clipboard',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,		
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
				'show_in_rest'          => true,
				'rest_base'             => 'Scripts',
				'rest_controller_class' => 'WP_REST_Posts_Scripts',
			);
	
	register_post_type( 'scripts', $args );

		$labels = array(
				'name'                  => _x( 'Clients', 'Post Type General Name', 'complex' ),
				'singular_name'         => _x( 'Client', 'Post Type Singular Name', 'complex' ),
				'menu_name'             => __( 'Clients', 'complex' ),
				'name_admin_bar'        => __( 'Post Type', 'complex' ),
				'archives'              => __( 'Item Archives', 'complex' ),
				'attributes'            => __( 'Item Attributes', 'complex' ),
				'parent_item_colon'     => __( 'Parent Item:', 'complex' ),
				'all_items'             => __( 'All Items', 'complex' ),
				'add_new_item'          => __( 'Add New Item', 'complex' ),
				'add_new'               => __( 'Add New', 'complex' ),
				'new_item'              => __( 'New Client', 'complex' ),
				'edit_item'             => __( 'Edit Item', 'complex' ),
				'update_item'           => __( 'Update Item', 'complex' ),
				'view_item'             => __( 'View Item', 'complex' ),
				'view_items'            => __( 'View Items', 'complex' ),
				'search_items'          => __( 'Search Item', 'complex' ),
				'not_found'             => __( 'Not found', 'complex' ),
				'not_found_in_trash'    => __( 'Not found in Trash', 'complex' ),
				'featured_image'        => __( 'Featured Image', 'complex' ),
				'set_featured_image'    => __( 'Set featured image', 'complex' ),
				'remove_featured_image' => __( 'Remove featured image', 'complex' ),
				'use_featured_image'    => __( 'Use as featured image', 'complex' ),
				'insert_into_item'      => __( 'Insert into item', 'complex' ),
				'uploaded_to_this_item' => __( 'Uploaded to this item', 'complex' ),
				'items_list'            => __( 'Items list', 'complex' ),
				'items_list_navigation' => __( 'Items list navigation', 'complex' ),
				'filter_items_list'     => __( 'Filter items list', 'complex' ),
			);
			$args = array(
				'label'                 => __( 'Client', 'complex' ),
				'description'           => __( 'Post Type Description', 'complex' ),
				'labels'                => $labels,
				'supports'              => array( ),
				'taxonomies'            => array( 'category', 'post_tag' ),
				'hierarchical'          => false,
				'public'                => true,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'menu_icon'				=> 'dashicons-universal-access',
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,		
				'exclude_from_search'   => false,
				'publicly_queryable'    => true,
				'capability_type'       => 'page',
			);
			register_post_type( 'clients', $args );

			$labels = array(
					'name'                  => _x( 'Snippets', 'Post Type General Name', 'complex' ),
					'singular_name'         => _x( 'Snippet', 'Post Type Singular Name', 'complex' ),
					'menu_name'             => __( 'Snippets', 'complex' ),
					'name_admin_bar'        => __( 'Snippets', 'complex' ),
					'archives'              => __( 'Snippet Archives', 'complex' ),
					'attributes'            => __( 'Snippet Attributes', 'complex' ),
					'parent_item_colon'     => __( 'Parent Item:', 'complex' ),
					'all_items'             => __( 'All Snippets', 'complex' ),
					'add_new_item'          => __( 'Add New Snippet', 'complex' ),
					'add_new'               => __( 'Add New', 'complex' ),
					'new_item'              => __( 'New Snippet', 'complex' ),
					'edit_item'             => __( 'Edit Snippet', 'complex' ),
					'update_item'           => __( 'Update Snippet', 'complex' ),
					'view_item'             => __( 'View Snippet', 'complex' ),
					'view_items'            => __( 'View Snippets', 'complex' ),
					'search_items'          => __( 'Search Snippet', 'complex' ),
					'not_found'             => __( 'Not found', 'complex' ),
					'not_found_in_trash'    => __( 'Not found in Trash', 'complex' ),
					'featured_image'        => __( 'Featured Image', 'complex' ),
					'set_featured_image'    => __( 'Set featured image', 'complex' ),
					'remove_featured_image' => __( 'Remove featured image', 'complex' ),
					'use_featured_image'    => __( 'Use as featured image', 'complex' ),
					'insert_into_item'      => __( 'Insert into Snippet', 'complex' ),
					'uploaded_to_this_item' => __( 'Uploaded to this Snippets', 'complex' ),
					'items_list'            => __( 'Snippets list', 'complex' ),
					'items_list_navigation' => __( 'Snippets list navigation', 'complex' ),
					'filter_items_list'     => __( 'Filter Snippets list', 'complex' ),
				);
				$args = array(
					'label'                 => __( 'Snippet', 'complex' ),
					'description'           => __( 'Post Type Description', 'complex' ),
					'labels'                => $labels,
					'supports'              => array( 'title', 'editor', ),
					'taxonomies'            => array( 'category', 'post_tag' ),
					'hierarchical'          => false,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 5,
					'menu_icon'             => 'dashicons-media-code',
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,		
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
				);
				register_post_type( 'snippets', $args );

				$labels = array(
					'name'                  => _x( 'Photo Collections', 'Post Type General Name', 'complex' ),
					'singular_name'         => _x( 'Photo Collection', 'Post Type Singular Name', 'complex' ),
					'menu_name'             => __( 'Photo Collections', 'complex' ),
					'name_admin_bar'        => __( 'Photo Collections', 'complex' ),
					'archives'              => __( 'Photo Collection Archives', 'complex' ),
					'attributes'            => __( 'Photo Collection Attributes', 'complex' ),
					'parent_item_colon'     => __( 'Parent Item:', 'complex' ),
					'all_items'             => __( 'All Photo Collections', 'complex' ),
					'add_new_item'          => __( 'Add New Photo Collection', 'complex' ),
					'add_new'               => __( 'Add New', 'complex' ),
					'new_item'              => __( 'New Photo Collection', 'complex' ),
					'edit_item'             => __( 'Edit Photo Collection', 'complex' ),
					'update_item'           => __( 'Update Photo Collection', 'complex' ),
					'view_item'             => __( 'View Photo Collection', 'complex' ),
					'view_items'            => __( 'View Photo Collections', 'complex' ),
					'search_items'          => __( 'Search Photo Collection', 'complex' ),
					'not_found'             => __( 'Not found', 'complex' ),
					'not_found_in_trash'    => __( 'Not found in Trash', 'complex' ),
					'featured_image'        => __( 'Featured Image', 'complex' ),
					'set_featured_image'    => __( 'Set featured image', 'complex' ),
					'remove_featured_image' => __( 'Remove featured image', 'complex' ),
					'use_featured_image'    => __( 'Use as featured image', 'complex' ),
					'insert_into_item'      => __( 'Insert into Photo Collection', 'complex' ),
					'uploaded_to_this_item' => __( 'Uploaded to this Photo Collections', 'complex' ),
					'items_list'            => __( 'Photo Collections list', 'complex' ),
					'items_list_navigation' => __( 'Photo Collections list navigation', 'complex' ),
					'filter_items_list'     => __( 'Filter Photo Collections list', 'complex' ),
				);
				$args = array(
					'label'                 => __( 'photo_collections', 'complex' ),
					'description'           => __( 'Post Type Description', 'complex' ),
					'labels'                => $labels,
					'supports'              => array( 'title',  ),
					'hierarchical'          => true,
					'public'                => true,
					'show_ui'               => true,
					'show_in_menu'          => true,
					'menu_position'         => 5,
					'menu_icon'             => 'dashicons-images-alt',
					'show_in_admin_bar'     => true,
					'show_in_nav_menus'     => true,
					'can_export'            => true,
					'has_archive'           => true,		
					'exclude_from_search'   => false,
					'publicly_queryable'    => true,
					'capability_type'       => 'page',
				);
				register_post_type( 'photo_collections', $args );
		
}





function wpsd_add_projects_args() {
    global $wp_post_types;
 
    $wp_post_types['projects']->show_in_rest = true;
    $wp_post_types['projects']->rest_base = 'projects';
    $wp_post_types['projects']->rest_controller_class = 'WP_REST_Posts_Controller';

}
add_action( 'init', 'wpsd_add_projects_args', 30 );


?>
