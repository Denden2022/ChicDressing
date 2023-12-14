<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
    wp_enqueue_style('chicdressing-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
}

add_filter( 'big_image_size_threshold', '__return_false' );

// Remove Google Fonts
// font kalam
function remove_google_fonts() {
    wp_deregister_style( 'ashe-kalam-font' );
    wp_deregister_style( 'ashe-opensans-font' );
    wp_deregister_style( 'ashe-playfair-font' );
    wp_deregister_style( 'ashe-rokkit-font' );
   }
   add_action('wp_print_styles', 'remove_google_fonts' );
?>

