<?php


// add_theme_support( 'menus' );

// register_nav_menus( array(
//     'primary'   => __( 'Primary Menu', 'myfirsttheme' ),
//     'secondary' => __( 'Secondary Menu', 'myfirsttheme' )
// ) );

wp_enqueue_style( 'style', get_stylesheet_uri() );


wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css',false,'1.1','all');
wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], 1.1, true);


function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' )
       )
     );
   }

   add_action( 'init', 'register_my_menus' );

   add_theme_support( 'post-thumbnails', array( 'page' ) );