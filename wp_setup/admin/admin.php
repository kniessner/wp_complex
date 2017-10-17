<?php

function custom_menu_page_removing() {
    remove_menu_page( 'edit.php' ); 
    remove_menu_page( 'edit-comments.php' ); 
    remove_menu_page( 'index.php' );
}
add_action( 'admin_menu', 'custom_menu_page_removing' );

?>