<?php

// Pour ajouter des images à la une
function portfolio_thumbnail() {
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'portfolio_thumbnail');


// Pour le menu de navigation

if ( ! function_exists( 'portfolio_register_nav_menu' ) ) {

	function portfolio_register_nav_menu(){
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' )
		) );
	}
	add_action( 'after_setup_theme', 'portfolio_register_nav_menu', 0 );
}

// Pour fichier js

function my_load_scripts() {
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);

}
add_action('wp_enqueue_scripts', 'my_load_scripts');


// Gérer le menu desktop et mobile

register_nav_menus( array(
    'primary_menu' => 'Menu Principal',
    'mobile_menu'  => 'Menu Mobile',
) );
