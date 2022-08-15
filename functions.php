<?php

function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', true );
    wp_enqueue_script( 'animate', get_template_directory_uri() . '/js/animate.js', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

add_filter( 'script_loader_tag', function ( $tag, $handle ) {
  if ( 'app' !== $handle && 'animate' !== $handle) {
    return $tag;
  }

  return str_replace( ' src', ' defer src', $tag );
}, 10, 2 );

function register_menus() {
  register_nav_menus(['header-menu' => __( 'Header Menu' )]);
}

add_action( 'init', 'register_menus' );

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
