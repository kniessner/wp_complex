<?php
function custom_taxonomies() {

	// JOURNAL ENTRIES Taxonomies

	
	$ressource_labels = [
		'name'                       => __('Ressources', 'code-base'),
		'singular_name'              => __('Ressource', 'code-base'),
		'all_items'                  => __('All Ressources', 'code-base'),
		'edit_item'                  => __('Edit Ressource', 'code-base'),
		'view_item'                  => __('View Ressource', 'code-base'),
		'update_item'                => __('Update Ressource', 'code-base'),
		'add_new_item'               => __('Add New Ressource', 'code-base'),
		'new_item_name'              => __('New Ressource', 'code-base'),
		'parent_item'                => __('Parent Ressource', 'code-base'),
		'parent_item_colon'          => __('Parent Ressource:', 'code-base'),
		'search_items'               => __('Search Ressources', 'code-base'),
		'not_found'                  => __('No Ressources found.', 'code-base'),
	];

	register_taxonomy('ressource_labels', ['guides'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $ressource_labels,
	]);
	
	// PROGRAM ITEMS Taxonomies

	$Topic_labels = [
		'name'                       => __('Topic', 'code-base'),
		'singular_name'              => __('Topic', 'code-base'),
		'all_items'                  => __('All Topic', 'code-base'),
		'edit_item'                  => __('Edit Topic', 'code-base'),
		'view_item'                  => __('View Topic', 'code-base'),
		'update_item'                => __('Update Topic', 'code-base'),
		'add_new_item'               => __('Add New Topic', 'code-base'),
		'new_item_name'              => __('New Topic', 'code-base'),
		'parent_item'                => __('Parent Topic', 'code-base'),
		'parent_item_colon'          => __('Parent Topic:', 'code-base'),
		'search_items'               => __('Search Topic', 'code-base'),
		'not_found'                  => __('No Topic found.', 'code-base'),
	];

	register_taxonomy('topic', ['snippets','guides'], [
		'hierarchical'      => false, // true: like categories, false: like tags
		'labels'            => $Topic_labels,
	]);

	$Tags_labels = [
		'name'                       => __('Tags', 'code-base'),
		'singular_name'              => __('Tag', 'code-base'),
		'all_items'                  => __('All Tags', 'code-base'),
		'edit_item'                  => __('Edit Tag', 'code-base'),
		'view_item'                  => __('View Tag', 'code-base'),
		'update_item'                => __('Update Tag', 'code-base'),
		'add_new_item'               => __('Add New Tag', 'code-base'),
		'new_item_name'              => __('New RessoTagurce', 'code-base'),
		'parent_item'                => __('Parent Tag', 'code-base'),
		'parent_item_colon'          => __('Parent Tag:', 'code-base'),
		'search_items'               => __('Search Tags', 'code-base'),
		'not_found'                  => __('No Tag found.', 'code-base'),
	];

	register_taxonomy('program_item_tags',  [
		'hierarchical'      => false, // true: like categories, false: like tags
		'labels'            => $Tags_labels,
	]);

	// Programming Languages

	$programming_languages = [
		'name'                       => __('Programming Language', 'code-archiv'),
		'singular_name'              => __('Programming Language', 'code-archive'),
		'all_items'                  => __('All Programming Languages', 'code-archive'),
		'edit_item'                  => __('Edit Programming Language', 'code-archive'),
		'view_item'                  => __('View Programming Language', 'code-archive'),
		'update_item'                => __('Update Programming Language', 'code-archive'),
		'add_new_item'               => __('Add New Programming Language', 'code-archive'),
		'new_item_name'              => __('New Programming Language', 'code-archive'),
		'parent_item'                => __('Parent Programming Language', 'code-archive'),
		'parent_item_colon'          => __('Parent Programming Language:', 'code-archive'),
		'search_items'               => __('Search Programming Language', 'code-archive'),
		'not_found'                  => __('No Programming Language found.', 'code-archive'),
	];
	
	
	register_taxonomy('programming_languages', ['page','project'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $programming_languages,
	]);
}

add_action('init', 'custom_taxonomies');





/********************************************************************************
Custom Post-types
********************************************************************************/




// https://codex.wordpress.org/Function_Reference/register_post_type
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
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'snippets' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    ]);
	
	 
 
}
add_action('init', 'register_custom_post_types_snippets');


add_action( 'init', 'codex_book_init' );
/**
 * Register a book post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function codex_book_init() {
    $labels = array(
        'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' )
    );
 
    $args = array(
        'labels'             => $labels,
                'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
 
    register_post_type( 'book', $args );
}

function wpsd_add_book_args() {
    global $wp_post_types;
 
    $wp_post_types['book']->show_in_rest = true;
    $wp_post_types['book']->rest_base = 'book';
    $wp_post_types['book']->rest_controller_class = 'WP_REST_Posts_Controller';
}
add_action( 'init', 'wpsd_add_book_args', 30 );
?>
