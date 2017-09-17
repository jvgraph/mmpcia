<?php
require('includes/page-options.php');
include('includes/aq_resizer.php');


////adding menu

register_nav_menus( array(
'quick_link' => __( 'Quick Menu', 'twentysixteen' ),
) );
///exerpt length
function mmpcia_excerpt( $length ) {
return 20;
}
add_filter( 'excerpt_length', 'mmpcia_excerpt', 999 );

//SCRIPTS AND STYLES
function mmpcia_scripts() {
    //deregister styles

    wp_enqueue_style( 'mmpcia-fonts', 'https://fonts.googleapis.com/css?family=Bitter:700|Montserrat' );
    if( is_home() || is_front_page() ){
                wp_enqueue_style( 'slider-style', get_stylesheet_directory_uri() . '/css/flexslider.css' );
    }
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'app-style', get_stylesheet_directory_uri() . '/css/app.css' );

    wp_enqueue_script( 'flex', get_stylesheet_directory_uri() . '/js/flex.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_stylesheet_directory_uri() . '/js/app.js', array ( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts', 'mmpcia_scripts');


/// removing wp version from header
function mmpcia_remove_version() {
return '';
}
add_filter('the_generator', 'mmpcia_remove_version');

///ADD ME MENU
register_nav_menus( array(
'mmpcia_social' => __( 'Social Links', 'twentysixteen' ),
) );