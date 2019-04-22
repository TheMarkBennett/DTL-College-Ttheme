<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );// add parent style

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
   wp_enqueue_style( 'dtl-style', get_stylesheet_directory_uri() .'/assets/css/dtl-college-theme.css');
}

define( 'DTL_THEME_DIR', trailingslashit( get_stylesheet_directory() ) );


//custom image sizes
require_once( DTL_THEME_DIR . 'includes/theme-options.php'); //custom image sizes


function sidebar_widget_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar'),
        'id' => 'main_sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );
}
add_action( 'widgets_init', 'sidebar_widget_init' );
