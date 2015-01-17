<?php

function wpsc_theme_styles(){
  
  wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css');
  wp_enqueue_style( 'responsive_css', get_template_directory_uri() . '/responsive.css');
  wp_enqueue_style( 'normalize_css', get_template_directory_uri() . '/normalize.css'); 
}
add_action( 'wp_enqueue_scripts', 'wpsc_theme_styles');

function wpsc_theme_js() {
  
  wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/app.js', array('jquery'), '', false);
  
}
add_action( 'wp_enqueue_scripts', 'wpsc_theme_js');

?>