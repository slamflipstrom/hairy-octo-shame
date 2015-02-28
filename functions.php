<?php

// WP functions allowing for dynamic menu creation
add_theme_support( 'menus' );

function register_theme_menus(){
  
  register_nav_menus(
    array(
      'primary-menu' => __('Primary Menu')
    )
  );
  
}
add_action('init', 'register_theme_menus');

// links files to WP structure
function wpsc_theme_styles(){
  
  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/responsive.css');
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/normalize.css'); 
}
add_action( 'wp_enqueue_scripts', 'wpsc_theme_styles');

// links JS file to WP 
function wpsc_theme_js() {
  
  wp_enqueue_script( 'app_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', false);
  
}
add_action( 'wp_enqueue_scripts', 'wpsc_theme_js');

?>