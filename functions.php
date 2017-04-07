<?php
/**
* Enqueues child theme stylesheet, loading first the parent theme stylesheet.
*/
function fthemes_custom_enqueue_child_theme_styles() {
$parent_style = 'depilex-stylesheet';
wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'depilex-child-stylesheet',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'fthemes_custom_enqueue_child_theme_styles' );

//Start writing your functions below