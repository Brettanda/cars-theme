<?php
//https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
//add_theme_support('title-tag');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
add_theme_support( 'custom-header', array(
	'header-text' => false
));
add_theme_support( 'custom-logo' );

//Load Stylesheets
function linked_assets(){
	wp_enqueue_style('theme_styles', get_stylesheet_uri('style.scss'));
	wp_enqueue_script('theme_script', get_stylesheet_uri('scripts/scripts.js'));
	wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Indie+Flower|Muli:400,600');
}
add_action('wp_enqueue_scripts','linked_assets');

//Dynamic Menus
function my_menus(){
	register_nav_menu('site-menu','Main Navigation Menu');
//	register_nav_menu('mobile-menu','Mobile Navigation Menu');
//	register_nav_menu('footer-menu','Footer Menu');
}
add_action('init','my_menus');