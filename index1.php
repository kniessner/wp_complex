
<?php

/**
 * Plugin Name: Gitium Custom Config
 */
add_action( 'plugins_loaded', 'gitium_custom_config' );
function gitium_custom_config() {
	add_filter( 'gitium_git_bin_path', function( $git_bin_path ) {
		return '/usr/bin/';
	});
}
?>