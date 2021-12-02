<?php

// Change all instances of mizuhoPortofolio to your theme name.
if ( ! function_exists( 'mizuhoPortofolio_setup' ) ) :
 
   function mizuhoPortofolio_setup() {
     add_theme_support( 'automatic-feed-links' );
     add_theme_support( 'title-tag' );
     add_theme_support( 'post-thumbnails' );
     add_theme_support( 'custom-logo' );

     register_nav_menus( array(
        'menu-main'   =>  'Main Menu',
        'menu-social' =>  'Social Menu'
     ) );
   }
 
endif;
 
add_action('after_setup_theme', 'mizuhoPortofolio_setup');

function themename_custom_logo_setup() {
   $defaults = array(
       'height'               => 400,
       'width'                => 400,
       'flex-height'          => true,
       'flex-width'           => true,
       'header-text'          => array( 'site-title', 'site-description' ),
       'unlink-homepage-logo' => true, 
   );

   add_theme_support( 'custom-logo', $defaults );
}
 
function mizuhoPortofolio_scripts_styles(){
   wp_enqueue_style('mizuhoPortofolio_style', get_stylesheet_uri());

   wp_enqueue_style( 'mizuhoPortofolio_style_googlefonts', 'https://fonts.googleapis.com/css2?family=Caveat:wght@400;600&family=Red+Hat+Mono:ital,wght@0,400;1,600', array(), null );

   wp_enqueue_style( 'mizuhoPortofolio_font_awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css' );
}
 
add_action('wp_enqueue_scripts', 'mizuhoPortofolio_scripts_styles');