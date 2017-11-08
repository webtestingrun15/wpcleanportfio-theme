<?php
//Add theme support
add_theme_support( 'title-tags' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );
add_theme_support( 'html5' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );
add_theme_support( 'custom-logo' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'starter-content' );

//Load in our CSS
function cleanportfolio_enqueue_styles() {
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/style.css', [], time(), 'all' );
}
add_action( 'wp_enqueue_scripts', 'cleanportfolio_enqueue_styles' );

// Register Menu Locations
register_nav_menus( [
	'main-menu' => esc_html( 'Main Menu', 'cleanportfolio' ),
	'footer-menu' => esc_html( 'Footer Menu', 'cleanportfolio' ),
] );

// Setup Widget Areas
function cleanportfolio_widgets_init() {
  register_sidebar([
    'name'          => esc_html__( 'Main Sidebar', 'cleanportfolio' ),
    'id'            => 'main-sidebar',
    'description'   => esc_html__( 'Add widgets for main sidebar here', 'cleanportfolio' ),
    'before_widget' => '<section class="widget">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ]);
}
add_action( 'widgets_init', 'cleanportfolio_widgets_init' );

?>
