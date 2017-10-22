<?php
/********* Custom Mediethek **************/

function add_Ordner_to_media_taxonomy() {
    $labels = array(
        'name'              => 'Add Ordner',
        'singular_name'     => 'Ordner',
        'search_items'      => 'Ordner suchen',
        'edit_item'         => 'Edit Ordner',
        'update_item'       => 'Update Ordner',
        'add_new_item'      => 'Neuen Ordner hinzufügen',
        'new_item_name'     => 'Neuer Ordner',
        'menu_name'         => 'Ordner',
    );

    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'query_var' => true,
        'rewrite' => true,
       ' public' => true,
		'show_in_nav_menus' => true,
		'show_ui' => true,
		'show_admin_column' => true,
		'update_count_callback' => '_update_generic_term_count',
    	'publicly_queryable'=>  true,
    	'has_archive'       =>  true,
    	'rewrite' => array('slug' => 'Ordner', 'with_front' => true)
    );

    register_taxonomy( 'Ordner', 'attachment', $args );
}
add_action( 'init', 'add_Ordner_to_media_taxonomy' );



function custom_add_Ordner_filters() {
	global $typenow;

	// Use the taxonomy name or slug
	$taxonomies = array('Ordner' );

	// must set this to the post type you want the filter(s) displayed on
			$screen = get_current_screen();
			if($screen -> id == 'upload'){
					foreach ($taxonomies as $tax_slug) {
						$tax_obj = get_taxonomy($tax_slug);
						$tax_name = $tax_obj->labels->name;
						$terms = get_terms($tax_slug);
						if(count($terms) > 0) {
							echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
							echo "<option value=''>Ordner</option>";
							foreach ($terms as $term) {
								echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
							}
							echo "</select>";

					}
				}
			}

}




add_action( 'restrict_manage_posts', 'custom_add_Ordner_filters' );

function custom_add_Tag_filters() {
	global $typenow;

	// Use the taxonomy name or slug
	$taxonomies = array('Schlagwörter' );

	// must set this to the post type you want the filter(s) displayed on
			$screen = get_current_screen();
			if($screen -> id == 'edit-wiki-news'){

		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Schlagwörter </option>";
				foreach ($terms as $term) {
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
				}

				echo "</select>";

		}}
	}
}
add_action( 'restrict_manage_posts', 'custom_add_Tag_filters' );

function custom_add_Themen_filters() {
	global $typenow;

	// Use the taxonomy name or slug
	$taxonomies = array('Themen' );

	// must set this to the post type you want the filter(s) displayed on
				$screen = get_current_screen();

			if($screen -> id == 'edit-wiki-news'){

		foreach ($taxonomies as $tax_slug) {
			$tax_obj = get_taxonomy($tax_slug);
			$tax_name = $tax_obj->labels->name;
			$terms = get_terms($tax_slug);
			if(count($terms) > 0) {
				echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
				echo "<option value=''>Themen</option>";
				foreach ($terms as $term) {
					echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
				}
				echo "</select>";

		}}
	}
}
add_action( 'restrict_manage_posts', 'custom_add_Themen_filters' );
?>