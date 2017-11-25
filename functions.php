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
  add_menu_page( 'Workspace', 'Workspace', 'manage_options', 'work', '', 'dashicons-welcome-widgets-menus', 1 );
}


add_submenu_page( 'work', 'Projects', 'Projects', 
'manage_options', 'edit.php?post_type=projects', NULL );

add_submenu_page( 'work', 'Clients', 'Clients', 
'manage_options', 'edit.php?post_type=clients', NULL );


add_submenu_page( 'work', 'Snippets', 'Snippets', 
'manage_options', 'edit.php?post_type=snippets', NULL );

add_submenu_page( 'work', 'Scripts', 'Scripts', 
'manage_options', 'edit.php?post_type=scripts', NULL );

add_action('admin_menu', 'my_plugin_menu');

function my_plugin_menu() {
	add_media_page('My Plugin Media', 'My Plugin', 'read', 'my-unique-identifier', 'my_plugin_function');
}

/*


add_filter( 'upload_dir', 'custom_upload_directory' );
function custom_upload_directory( $args ) {
 
    $id = $_REQUEST['post_id'];
    $parent = get_post( $id )->post_parent;
    $slug = get_post( $id )->post_name;
 
    // Check the post-type of the current post
    // assign directory to upload to
    // assign URL to connect to
    if( "x_items" == get_post_type( $id ) || "x_items" == get_post_type( $parent ) ) {
        $args['path'] = WP_CONTENT_DIR . '/x_items/' . $slug . '';
        $args['url']  = WP_CONTENT_URL . '/x_items/' . $slug . '';
    }

    return $args;
}*/

add_filter( 'wp_generate_attachment_metadata', 'manipulate_metadata_wpse_91177', 10, 2 );
add_filter( 'manage_upload_columns', 'camera_info_column_wpse_91177' );
add_action( 'manage_media_custom_column', 'camera_info_display_wpse_91177', 10, 2 );

function manipulate_metadata_wpse_91177( $metadata, $attachment_id ) 
{

   

    ?>
    <script>
    //alert('<?php echo $attachment_id . " ";?>');
    alert('<?php echo get_post_type( get_the_ID() ) ;?>');

    </script>
	<?php
	    $parent = get_post( $attachment_id )->post_parent;

    update_post_meta( $attachment_id, 'post_type', get_post_type( $parent )  );
    update_post_meta( $attachment_id, 'photo_title', $metadata['image_meta']['title'] );
    update_post_meta( $attachment_id, 'photo_camera', $metadata['image_meta']['camera'] );
    return $metadata;
}

function camera_info_column_wpse_91177( $columns ) 
{
    $columns['cam_info'] = 'Camera Info';    
    return $columns;
}

function camera_info_display_wpse_91177( $column_name, $post_id ) 
{
    if( 'cam_info' != $column_name || !wp_attachment_is_image( $post_id ) )
        return;

    $title = get_post_meta( $post_id, 'photo_title', true );
    $camera = get_post_meta( $post_id, 'photo_camera', true );
    $post_type = get_post_meta( $post_id, 'post_type', true );

    $echo_title = $title ? 'Title: ' . $title . '<br />' : '';
   
    $echo_post_type = $post_type ? 'Type: ' . $post_type : '';

    $echo_camera = $camera ? 'Camera: ' . $camera : '';
    echo $echo_title . $echo_camera .$echo_post_type;
}




function create_hidden_taxonomy() {
    register_taxonomy(
        'hidden_taxonomy',
        'attachment',
        array(
            'label' => __( 'Hidden Attachment Taxonomy' ),
            'public' => false, // it's hidden!
            'rewrite' => false,
            'hierarchical' => false,
        )
    );

}
add_action( 'init', 'create_hidden_taxonomy' );

/*

function tomjn_add_term( $post_id, \WP_Post $p, $update ) {

    if ( 'attachment' !== $p->post_type ) {
        return;
    }
    if ( wp_is_post_revision( $post_id ) ) {
        return;
    }
    if ( $post->post_parent ) {
        $excluded_types = array( 'example_post_type', 'other_post_type' );
        if ( in_array( get_post_type( $p->post_parent ), $excluded_types ) ) {
            return;
        }
    }
    $result = wp_set_object_terms( $post_id, 'show_in_media_library', 'hidden_taxonomy', false );
    if ( !is_array( $result ) || is_wp_error( $result ) ) {
        wp_die( "Error setting up terms") ;
    }
}
add_action( 'save_post', 'tomjn_add_term', 10, 2 );

*/



add_action( 'acf/rest_api/id', function( $id ) {
    if ( 'options' == $id ) {
    	$available = array( 'media-settings', 'theme-modules' );
    	
    	if ( isset( $_GET['option_id'] ) && in_array( $_GET['option_id'], $available ) ) {
    		return esc_sql( $_GET['option_id'] );
    	}
    }

    return $id;
} );


//add_filter('http_origin', function() { return "http://your domain";});

add_action( 'send_headers', function() {
	if ( ! did_action('rest_api_init') && $_SERVER['REQUEST_METHOD'] == 'HEAD' ) {
		header( 'Access-Control-Allow-Origin: *' );
		header( "Access-Control-Allow-Credentials", "true");
		header( 'Access-Control-Allow-Methods: GET' );
		header( 'Access-Control-Allow-Headers', '"Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers"');
		header( 'Access-Control-Expose-Headers: Link' );
		header( 'Access-Control-Allow-Methods: HEAD' );
	}
} );
add_action( 'rest_api_init', function() {
    
	remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
	add_filter( 'rest_pre_serve_request', function( $value ) {
		header( 'Access-Control-Allow-Origin: *' );
		header( 'Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE' );
		header( 'Access-Control-Allow-Credentials: true' );

		return $value;
		
	});
}, 15 );

function add_cors_http_header(){
    header("Access-Control-Allow-Origin: *");
}
add_action('init','add_cors_http_header');





/*add_action( 'rest_api_init', 'slug_register_acf' );
function slug_register_acf() {
  $post_types = get_post_types(['public'=>true], 'names');
  foreach ($post_types as $type) {
    register_api_field( $type,
        'acf',
        array(
            'get_callback'    => 'slug_get_acf',
            'update_callback' => null,
            'schema'          => null,
        )
    );
  }
}
function slug_get_acf( $object, $field_name, $request ) {
    return get_fields($object[ 'id' ]);
}
*/
/*
function my_customize_rest_cors() {
  remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
  add_filter( 'rest_pre_serve_request', function( $value ) {
    header( 'Access-Control-Allow-Origin: *' );
    header( 'Access-Control-Allow-Methods: GET' );
    header( 'Access-Control-Allow-Headers', '"Access-Control-Allow-Headers", "Access-Control-Allow-Headers, Origin,Accept, X-Requested-With, Content-Type, Access-Control-Request-Method, Access-Control-Request-Headers"');
    header( 'Access-Control-Allow-Credentials, true' );
    header( 'Access-Control-Expose-Headers: Link', false );

    return $value;
  });
}

add_action( 'rest_api_init', 'my_customize_rest_cors', 15 );
*/

?>