<?php
if (!defined('ABSPATH')) {
	exit;
}

/* Support des miniatures */

if ( !function_exists( 'keliosis_widgets_init' ) )
{
  function keliosis_widgets_init() 
  {
    $footer_1 = array(
      'name'          => __( 'Footer - Col 1', 'keliosis' ),
      'id'            => 'keliosis-widget-footer-col-1',
      'description'   => __( 'Widgets placés dans la première colonne du footer', 'keliosis' ),
      'before_widget' => '<div class="keliosis-widgets">',
      'after_widget'  => '</div>',
      'before_title'  => '<span class="keliosis-widgets-title">',
      'after_title'   => '</span>',
    );
    $footer_2 = array(
      'name'          => __( 'Footer - Col 2', 'keliosis' ),
      'id'            => 'keliosis-widget-footer-col-2',
      'description'   => __( 'Widgets placés dans la seconde colonne du footer', 'keliosis' ),
      'before_widget' => '<div class="keliosis-widgets">',
      'after_widget'  => '</div>',
      'before_title'  => '<span class="keliosis-widgets-title">',
      'after_title'   => '</span>',
    );
    $footer_3 = array(
      'name'          => __( 'Footer - Col 3', 'keliosis' ),
      'id'            => 'keliosis-widget-footer-col-3',
      'description'   => __( 'Widgets placés dans la troisième colonne du footer', 'keliosis' ),
      'before_widget' => '<div class="keliosis-widgets">',
      'after_widget'  => '</div>',
      'before_title'  => '<span class="keliosis-widgets-title">',
      'after_title'   => '</span>',
    );
    $footer_4 = array(
      'name'          => __( 'Footer - Col 4', 'keliosis' ),
      'id'            => 'keliosis-widget-footer-col-4',
      'description'   => __( 'Widgets placés dans la quatrième colonne du footer', 'keliosis' ),
      'before_widget' => '<div class="keliosis-widgets">',
      'after_widget'  => '</div>',
      'before_title'  => '<span class="keliosis-widgets-title">',
      'after_title'   => '</span>',
    );
    
    register_sidebar( $footer_1 );
    register_sidebar( $footer_2 );
    register_sidebar( $footer_3 );
    register_sidebar( $footer_4 );
  }
  add_action( 'widgets_init', 'keliosis_widgets_init' );
}