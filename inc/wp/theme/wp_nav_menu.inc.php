<?php
if (!defined('ABSPATH')) {
	exit;
}

// Ajout de la fonction de menu
if ( !function_exists( 'add_wp_nav_menu' ) )
{
  function add_wp_nav_menu() 
  {
    register_nav_menus(
      array(
        'header_nav_menu' => __( 'Header', 'keliosis' ),
        'footer_nav_menu' => __( 'Footer', 'keliosis' )
      )
    );
  }
  add_action( 'after_setup_theme', 'add_wp_nav_menu' );
}