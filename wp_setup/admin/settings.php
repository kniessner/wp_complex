<?php



//add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){

  //remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack*
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'edit-comments.php' );          //Comments
  //remove_menu_page( 'themes.php' );                 //Appearance


}



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

?>
