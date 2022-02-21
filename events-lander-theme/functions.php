<?php 

// Register WP Nav
function register_my_menus() {
    register_nav_menus(
      array(
        'main-menu' => __( 'Main Menu' ),
        'primary_menu' => __( 'Primary Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );


// Register Google API key for ACF events page 
function my_acf_google_map_api( $api ){
	
	$api['key'] = 'AIzaSyAhLt5Yca8jlOIKsIN1EjKCmf0CxD3bOOc';
	
	return $api;
	
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

?>