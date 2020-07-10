<?php
function load_all ()
{
    // ! CSS Stuff goes here
    wp_register_style('custom', get_template_directory_uri().'/css/style.css', array(), null, 'all');
    wp_enqueue_style('custom');

    
    // ! JS Stuff goes here
    wp_enqueue_script('navbarhandler', get_template_directory_uri().'/js/nav.js', null, false );
    wp_enqueue_script('jquery', get_template_directory_uri().'https://code.jquery.com/jquery-3.5.1.slim.min.js', null, false );

    

}

function register_my_menus() {                                                      // register head and footer
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu'),
       )
     );
   }
   

   
function themename_custom_logo_setup() {                                          // register custom logo
    $defaults = array(
    'height'      => 250,
    'width'       => 1500,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
   }

  // ! capabilities go here
  add_action( 'init', 'register_my_menus' );
  if ( ! isset( $content_width ) ) $content_width = 1200;
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'align-wide' );
  add_theme_support( 'wp-block-styles' );
  add_action( 'after_setup_theme', 'themename_custom_logo_setup' );
  wp_enqueue_scripts();
  load_all();
  //! blame jesseb0rn for this shit.


