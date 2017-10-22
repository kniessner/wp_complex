<?php


add_action('init', 'custom_taxonomies');
function custom_taxonomies() {

		$labels = [
		'name'                       => __('Client', 'code-base'),
		'singular_name'              => __('Client', 'code-base'),
		'all_items'                  => __('All Clients', 'code-base'),
		'edit_item'                  => __('Edit Client', 'code-base'),
		'view_item'                  => __('View Client', 'code-base'),
		'update_item'                => __('Update Client', 'code-base'),
		'add_new_item'               => __('Add New Client', 'code-base'),
		'new_item_name'              => __('New Client', 'code-base'),
		'parent_item'                => __('Parent Client', 'code-base'),
		'parent_item_colon'          => __('Parent Client:', 'code-base'),
		'search_items'               => __('Search Client', 'code-base'),
		'not_found'                  => __('No Client found.', 'code-base'),
	];

	register_taxonomy('client', ['snippets','guides','page','demo','projects'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $labels,
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
	
	register_taxonomy('programming_languages', ['page','projects','demo'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $programming_languages,
	]);

};



function add_category_to_pages() {
    $labels = array(
        'name'              => 'Add Category',
        'singular_name'     => 'Category',
        'search_items'      => 'Search Category',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category',
        'menu_name'         => 'Category', 
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_generic_term_count',
        'publicly_queryable'=>  true,	
        'has_archive'       =>  true,
    	'rewrite' => array('slug' => 'category', 'with_front' => false)
    );
	register_taxonomy('category', ['page','projects','demo','snippets'], [
		'hierarchical'      => true, // true: like categories, false: like tags
		'labels'            => $args,
		
    ]);

}
add_action( 'init', 'add_category_to_pages' );


function add_Ranking_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Ranking',
        'singular_name'     => 'Ranking',
        'search_items'      => 'Search Ranking',
        'edit_item'         => 'Edit Ranking',
        'update_item'       => 'Update Ranking',
        'add_new_item'      => 'Add New Ranking',
        'new_item_name'     => 'New Ranking',
        'menu_name'         => 'Ranking',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
        'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_generic_term_count',
    	'publicly_queryable'=>  true,
    	'has_archive'       =>  true,
    	'rewrite' => array('slug' => 'ranking', 'with_front' => false)
    );

    register_taxonomy( 'ranking', 'attachment', $args );
}
add_action( 'init', 'add_Ranking_to_media_taxonomy' );


function add_category_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Category',
        'singular_name'     => 'Category',
        'search_items'      => 'Search Category',
        'edit_item'         => 'Edit Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category',
        'menu_name'         => 'Category',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_generic_term_count',
        'publicly_queryable'=>  true,
    	'has_archive'       =>  true,
    	'rewrite' => array('slug' => 'category', 'with_front' => false)
    );

    register_taxonomy( 'category', 'attachment', $args );
}
add_action( 'init', 'add_category_to_media_taxonomy' );

function add_album_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Album',
        'singular_name'     => 'Album',
        'search_items'      => 'Search Album',
        'edit_item'         => 'Edit Album',
        'update_item'       => 'Update Album',
        'add_new_item'      => 'Add New Album',
        'new_item_name'     => 'New Album',
        'menu_name'         => 'Album',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_generic_term_count',
    	'publicly_queryable'=>  true,
    	'has_archive'       =>  true,
    	'rewrite' => array('slug' => 'album', 'with_front' => false)
    );

    register_taxonomy( 'album', 'attachment', $args );
}
add_action( 'init', 'add_album_to_media_taxonomy' );


function add_location_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Location',
        'singular_name'     => 'Publicity',
        'search_items'      => 'Search Location',
        'edit_item'         => 'Edit Location',
        'update_item'       => 'Update Location',
        'add_new_item'      => 'Add New Location',
        'new_item_name'     => 'New Location',
        'menu_name'         => 'Location',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       	'public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_generic_term_count',
		'publicly_queryable'=>  true,
		'has_archive'       =>  true,
		'rewrite' => array('slug' => 'location', 'with_front' => true)
    );

    register_taxonomy( 'location', 'attachment', $args );
}
add_action( 'init', 'add_location_to_media_taxonomy' );
?>
