<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );// add parent style

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'post-style', get_stylesheet_directory_uri() .'/assets/css/dtl-college-theme.css', array(),'1.0.0' );
}

define( 'DTL_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


//custom image sizes
require_once( DTL_THEME_DIR . 'includes/theme-options.php'); //custom image sizes
