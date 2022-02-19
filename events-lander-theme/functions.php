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

   ?>