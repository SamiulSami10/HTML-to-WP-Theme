<?php 

add_theme_support( 'menus' );
add_theme_support( 'widgets' );
add_theme_support( 'custom-background' );
add_theme_support( 'post-formats',['image','video','audio'] );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );





register_nav_menus( [
    'main_menu'   => 'Main Menu',
    'footer_menu' => 'Footer Menu'
] )

?>