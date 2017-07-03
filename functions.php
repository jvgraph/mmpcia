<?php
include('includes/aq_resizer.php');
//SCRIPTS AND STYLES
    function mmpcia_scripts() {
        //deregister styles

        wp_enqueue_style( 'mmpcia-fonts', 'https://fonts.googleapis.com/css?family=Bitter:700|Montserrat' );
        wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri() . '/style.css' );
        wp_enqueue_style( 'app-style', get_stylesheet_directory_uri() . '/css/app.css' );
    }
    add_action('wp_enqueue_scripts', 'mmpcia_scripts');

    function unhook_parent_style() {

    wp_dequeue_style( 'twentysixteen-style' );
    wp_deregister_style( 'twentysixteen-style' );

    }
    add_action( 'wp_enqueue_scripts', 'unhook_parent_style', 20 );

/// removing wp version from header
function mmpcia_remove_version() {
    return '';
}
add_filter('the_generator', 'mmpcia_remove_version');
?>