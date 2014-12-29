<?php

function firstSite_resources() {

	wp_enqueue_style('style', get_stylesheet_uri());

}

add_action('wp_enqueue_scripts', 'firstSite_resources');




//Customize excerpt word count length

function custom_excerpt_length(){
	return 50;
}

add_filter('excerpt_length', 'custom_excerpt_length');


//Theme Setup
function ManicFringe_setup() {

	//Add featured image support
	add_theme_support('post-thumbnails');
	
	add_image_size('medium-thumbnail', 380, 160, true);
	add_image_size('small-thumbnail', 180, 120, true);
	add_image_size('banner-image', 935, 275, true);
	
	
	//navigation menus

	register_nav_menus(array(

		'primary' => __( 'Primary Menu'),
		'footer' => __('Footer Menu')

));


}

add_action('after_setup_theme', 'ManicFringe_setup');


//Add widget locations

function manicWidgetsInit() {
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar1',
		'before_widget' => '<div class="widget-item1">',
		'after_widget' => '</div>'
		
	));
	
	register_sidebar(array(
		'name' => 'Sidebar',
		'id' => 'sidebar2',
		'before_widget' => '<div class="widget-item2">',
		'after_widget' => '</div>'
		
	));

}

add_action('widgets_init', 'manicWidgetsInit' );