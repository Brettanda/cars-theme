<?php
//https://developer.wordpress.org/reference/functions/add_theme_support/#custom-logo
//remove_theme_support('title-tag');
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
/*add_theme_support( 'custom-header', array(
	'header-text' => false
));*/
add_theme_support( 'custom-logo' );

//Load Stylesheets
function linked_assets(){
	
	wp_enqueue_style('theme_styles', get_stylesheet_uri('style.css'));
	wp_enqueue_script('theme_script', get_stylesheet_directory_uri() . '/assets/scripts/scripts.js');
	wp_enqueue_script('animejs', get_stylesheet_directory_uri() . '/assets/modules/anime-master/lib/anime.min.js');
	wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Muli:300,400,600|Open+Sans:300,400');
}
add_action('wp_enqueue_scripts','linked_assets');

//Dynamic Menus
function my_menus(){
	register_nav_menu('site-menu','Main Navigation Menu');
//	register_nav_menu('site-footer','Footer Navigation');
}
add_action('init','my_menus');

function sidebar(){
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'description' => 'This sidebar goes to the right of the main section',
		'id' => 'sidebar-right',
	));
	register_sidebar(array(
		'name' => 'Footer Sidebar',
		'description' => 'The Sidebar that is at the bottom of the page',
		'id' => 'sidebar-footer',
	));
}
add_action('widgets_init','sidebar');

$theme_error = function($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Theme &rsaquo; Error', 'novacomm');
    $footer = "<a href=\"mailto:brett@brettanda.ca?subject=$subtitle\">Get Help</a>";
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

add_filter ('wp_image_editors', 'graphic_editor');
function graphic_editor($array){
	return array('WP_Image_Editor_GD', 'WP_Image_Editor_Imagick');
}

function theme_customize_register( $wp_customize ) {
/*	$wp_customize->add_section( 'theme', array(
		'title' =>__('Color Themes', 'cars'),
		'description' => 'These are the different example color themes',
		'priority' => 50,
	) );*/
	$wp_customize->add_setting( 'theme_color', array(
		'default' => '1',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( 'theme_color_choice', array(
		'label' => __( 'Choose your theme', 'cars'),
		'section' => 'colors',
		'setting' => 'theme_color',
		'type' => 'radio',
		'choices' => array(
			'Theme 1' => '1',
			'Theme 2' => '2',
		),
	) );
}
add_action( 'customize_register' , 'theme_customize_register' );

function create_posttype() {
	register_post_type( 'upcoming-events',
		array(
			'labels' => array(
				'name' => __('Upcoming Events'),
				'singular_name' => __( 'Upcoming Event' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'events'),
		)
	);
}
add_action('init', 'create_posttype');
