<?php
function diatheme_logo_setup() {
	$defaults = array(
		'header-text'          => array( 'site-title', 'site-description' ),
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action('after_setup_theme', 'diatheme_logo_setup' );


function register_my_menu()
{
    register_nav_menu('header-menu', __('Header Menu'));
}
add_action('init', 'register_my_menu');

    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('header', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('main-section', get_template_directory_uri() . '/assets/css/main-section.css');
    wp_enqueue_style('about-region', get_template_directory_uri() . '/assets/css/about-region.css');
    wp_enqueue_style('slider', get_template_directory_uri() . '/assets/css/slider.css');
    wp_enqueue_style('main-menu', get_template_directory_uri() . '/assets/css/main-menu.css');
    wp_enqueue_style('news', get_template_directory_uri() . '/assets/css/news.css');
    wp_enqueue_style('products', get_template_directory_uri() . '/assets/css/products.css');
    wp_enqueue_style('footer', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css');
	wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/main-menu.css');


    $uploads_dir = wp_upload_dir();
    $uploads_path = $uploads_dir['basedir'];
?>

