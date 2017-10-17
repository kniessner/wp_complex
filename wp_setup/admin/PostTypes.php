<?php


	
/********************************************************************************
Custom Post-types
********************************************************************************/

	add_action( 'init', 'create_custom_post_types' );
	function create_custom_post_types() {

		 $labels = array(
			'name'               => _x( 'Projects', 'post type general name', 'complex' ),
			'singular_name'      => _x( 'Project', 'post type singular name', 'complex' ),
			'menu_name'          => _x( 'Projects', 'admin menu', 'complex' ),
			'name_admin_bar'     => _x( 'Project', 'add new on admin bar', 'complex' ),
			'add_new'            => _x( 'Add Project', 'Project', 'complex' ),
			'add_new_item'       => __( 'Add a Project', 'complex' ),
			'new_item'           => __( 'New Project', 'complex' ),
			'edit_item'          => __( 'Edit Project', 'complex' ),
			'view_item'          => __( 'View Project', 'complex' ),
			'all_items'          => __( 'All Project', 'complex' ),
			'search_items'       => __( 'Search Project', 'complex' ),
			'parent_item_colon'  => __( 'Parent Project:', 'complex' ),
			'not_found'          => __( 'No Project found.', 'complex' ),
			'not_found_in_trash' => __( 'No Project found in Trash.', 'complex' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'menu_icon'     		 => 'dashicons-clipboard',
			'rewrite'            => array( 'slug' => 'projects' ),
			'supports'      		 => ['title','thumbnail','editor','post-formats','page-attributes'],
			'taxonomies'   			 => ['event_tags'],
		  'menu_position' 		 => 34,
			'has_archive'        => true,
			'hierarchical'       => true,
			);

	register_post_type( 'projects', $args );

	


    $labels = array(
			'name'                  => __('Demos', 'complex'),
    	'singular_name'         => __('Demo', 'complex'),
			'menu_name'          => _x( 'Demos', 'admin menu', 'complex' ),
	    'add_new'               => __('Add Demo', 'complex'),
	    'add_new_item'          => __('Add New Demo', 'complex'),
	    'edit_item'             => __('Edit Demo', 'complex'),
	    'new_item'              => __('New Demo','complex'),
	    'view_item'             => __('View Demo', 'complex'),
	    'search_items'          => __('Search Demo', 'complex'),
	    'not_found'             => __('No Demo found', 'complex'),
	    'not_found_in_trash'    => __('No Demo found in trash', 'complex'),
	    'parent_item_colon'     => __('Parent Demo:', 'complex'),
	    'all_items'             => __('All Demo', 'complex'),
	    'archives'              => __('Demo', 'complex'),
	    'insert_into_item'      => __('Insert into Demo', 'complex'),
	    'uploaded_to_this_item' => __('Uploaded to this Demo', 'complex'),
    );

    $args = array(
			'labels'        => $labels,
	    'public'        => true,
			'supports'      => ['title','thumbnail','editor','post-formats','page-attributes'],
	    'menu_icon'     => 'dashicons-clipboard',
	    'menu_position' => 35,
	    'rewrite'       => ['slug' => 'demo'],
	    'taxonomies'    => ['programming_languages', 'tags']
    );

    register_post_type( 'demos', $args );
		
		
		
    $labels = array(
			'name'                  => __('Guides', 'complex'),
    	'singular_name'         => __('Guide', 'complex'),
	    'add_new'               => __('Add Guide', 'complex'),
	    'add_new_item'          => __('Add New Guide', 'complex'),
	    'edit_item'             => __('Edit Guide', 'complex'),
	    'new_item'              => __('New Guide','complex'),
	    'view_item'             => __('View Guide', 'complex'),
	    'search_items'          => __('Search Guide', 'complex'),
	    'not_found'             => __('No Guide found', 'complex'),
	    'not_found_in_trash'    => __('No Guide found in trash', 'complex'),
	    'parent_item_colon'     => __('Parent Guide:', 'complex'),
	    'all_items'             => __('All Guide', 'complex'),
	    'archives'              => __('Guide', 'complex'),
	    'insert_into_item'      => __('Insert into Guide', 'complex'),
	    'uploaded_to_this_item' => __('Uploaded to this Guide', 'complex'),
    );

    $args = array(
			'labels'        => $labels,
	    'public'        => true,
			'supports'      => ['title','thumbnail','editor','post-formats','page-attributes'],
	    'menu_icon'     => 'dashicons-editor-insertmore',
	    'menu_position' => 37,
	    'rewrite'       => ['slug' => 'guide'],
	    'taxonomies'    => ['programming_languages', 'tags']
    );

    register_post_type( 'guides', $args );

	};
// https://codex.wordpress.org/Function_Reference/register_post_type
add_action('init', 'register_custom_post_types_snippets');
function register_custom_post_types_snippets() {
    $snippets_labels = [
        'name'                  => __('Snippets', 'code-base'),
        'singular_name'         => __('Snippet', 'code-base'),
        'add_new'               => __('Add Snippet', 'code-base'),
        'add_new_item'          => __('Add New Snippet', 'code-base'),
        'edit_item'             => __('Edit Snippet', 'code-base'),
        'new_item'              => __('New Snippet', 'code-base'),
        'view_item'             => __('View Snippet', 'code-base'),
        'search_items'          => __('Search Snippets', 'code-base'),
        'not_found'             => __('No Snippets found', 'code-base'),
        'not_found_in_trash'    => __('No Snippets found in trash', 'code-base'),
        'parent_item_colon'     => __('Parent Snippet:', 'code-base'),
        'all_items'             => __('All Snippets', 'code-base'),
        'archives'              => __('Snippets', 'code-base'),
        'insert_into_item'      => __('Insert into snippet', 'code-base'),
        'uploaded_to_this_item' => __('Uploaded to this snippet', 'code-base'),
    ];

    register_post_type('snippets', [
        'labels'              => $snippets_labels,
        'public'              => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => false,
        'show_ui'             => true,
     		'supports'      		 => ['title','thumbnail','editor','post-formats','page-attributes'],
        'menu_icon'           => 'dashicons-editor-insertmore',
        'menu_position'       => 36,
        'rewrite'             => false,
    ]);
}
	   $labels = array(
			'name'               => _x( 'Review', 'post type general name', 'complex' ),
			'singular_name'      => _x( 'Review', 'post type singular name', 'complex' ),
			'menu_name'          => _x( 'Reviews', 'admin menu', 'complex' ),
			'name_admin_bar'     => _x( 'Reviews', 'add new on admin bar', 'complex' ),
			'add_new'            => _x( 'Add Review', 'Post', 'complex' ),
			'add_new_item'       => __( 'Add a new Review', 'complex' ),
			'new_item'           => __( 'New Review', 'complex' ),
			'edit_item'          => __( 'Edit Review', 'complex' ),
			'view_item'          => __( 'View Review', 'complex' ),
			'all_items'          => __( 'All Review', 'complex' ),
			'search_items'       => __( 'Search Review', 'complex' ),
			'not_found'          => __( 'No Review found.', 'complex' ),
			'not_found_in_trash' => __( 'No Review found in Trash.', 'complex' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'menu_icon'     		 => 'dashicons-admin-post',
			'menu_position'			 => 39,
			'rewrite'            => array( 'slug' => 'reviews' ),
			'taxonomies'    => ['program_item_formats', 'program_item_tags'],
			'has_archive'        => true,
			'hierarchical'       => true,
			'supports'      		 => ['title','thumbnail','editor','post-formats','page-attributes']
		);

	register_post_type( 'reviews', $args );

 $labels = array(
			'name'               => _x( 'Client', 'post type general name', 'complex' ),
			'singular_name'      => _x( 'Client', 'post type singular name', 'complex' ),
			'menu_name'          => _x( 'Clients', 'admin menu', 'complex' ),
			'name_admin_bar'     => _x( 'Clients', 'add new on admin bar', 'complex' ),
			'add_new'            => _x( 'Add Client', 'Post', 'complex' ),
			'add_new_item'       => __( 'Add a new Client', 'complex' ),
			'new_item'           => __( 'New Client', 'complex' ),
			'edit_item'          => __( 'Edit Client', 'complex' ),
			'view_item'          => __( 'View Client', 'complex' ),
			'all_items'          => __( 'All Client', 'complex' ),
			'search_items'       => __( 'Search Client', 'complex' ),
			'not_found'          => __( 'No Client found.', 'complex' ),
			'not_found_in_trash' => __( 'No Client found in Trash.', 'complex' )
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'menu_icon'     		 => 'dashicons-businessman',
			'menu_position'			 => 38,
			'rewrite'            => array( 'slug' => 'client' ),
			'has_archive'        => true,
			'hierarchical'       => true,
			'supports'      		 => ['title','thumbnail','editor','post-formats','page-attributes']
		);

	register_post_type( 'clients', $args );





?>
