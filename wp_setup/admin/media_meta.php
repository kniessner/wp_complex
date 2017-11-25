<?php 
/**
 * Register meta box(es).
 */
function wpdocs_register_meta_boxes() {
    add_meta_box( 'meta-box-id', __( 'My Meta Box', 'textdomain' ), 'wpdocs_my_display_callback', 'post' );
}
add_action( 'add_meta_boxes', 'wpdocs_register_meta_boxes' );
 
/**
 * Meta box display callback.
 *
 * @param WP_Post $post Current post object.
 */
function wpdocs_my_display_callback( $post ) {
    // Display code/markup goes here. Don't forget to include nonces!
}
 
/**
 * Save meta box content.
 *
 * @param int $post_id Post ID
 */
function wpdocs_save_meta_box( $post_id ) {
    // Save logic goes here. Don't forget to include nonce checks!
}
add_action( 'save_post', 'wpdocs_save_meta_box' );

add_action( 'do_meta_boxes', 'my_customize_meta_boxes'); //do_meta_boxes also allows plugin metaboxes to be modified
function my_customize_meta_boxes(){
    $post_types = get_post_types();
    remove_meta_box( 'authordiv', $post_types, 'normal' );
 
    add_meta_box( 'authordiv', __( 'Editor', 'textdomain' ), 'post_author_meta_box', $post_types, 'side', 'default' );
}
?>