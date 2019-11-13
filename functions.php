<?php
//Add Theme Support for document title tag
function custom_theme_support(){
  add_theme_support( 'title-tag');
}
add_action('after_setup_theme','custom_theme_support');

//custom style css
function imagegrafia_files(){
  wp_enqueue_style( 'style', get_stylesheet_uri() , NULL , microtime());
  wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' );
}
add_action('wp_enqueue_scripts','imagegrafia_files');

//w3 css files
function w3_files(){
  wp_enqueue_style( 'w31', 'https://www.w3schools.com/w3css/4/w3.css' );
  wp_enqueue_style( 'w32', 'https://fonts.googleapis.com/css?family=Lato' );
  wp_enqueue_style( 'w33', 'https://fonts.googleapis.com/css?family=Montserrat' );
  wp_enqueue_style( 'w34', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action('wp_enqueue_scripts','w3_files');


//customized Login screen
function ourHeaderUrl(){
  return esc_url(site_url('/'));
}
add_filter('login_headerurl', 'ourHeaderUrl');
function ourLoignCSS(){
  wp_enqueue_style( 'style', get_stylesheet_uri());
  wp_enqueue_style( 'w32', 'https://fonts.googleapis.com/css?family=Lato' );
}
add_action('login_enqueue_scripts', 'ourLoignCSS');
