<?php

add_action( 'wp_enqueue_scripts', 'interest_scripts' );
add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

/* Global scripts (Enqueued below) */
wp_register_script( 'jQuery', get_template_directory_uri() . 
	'/assets/dist/js/jquery.js', array(), '1.0.0', true );

wp_register_script( 'main', get_template_directory_uri() . 
	'/assets/dist/js/main.js', array(), '1.0.0', true );

wp_register_script( 'menu', get_template_directory_uri() . 
	'/assets/dist/js/template-components/layout-fragments/menu.js', 
	array(), '1.0.0', true );

wp_register_script( 'hamburger-menu', get_template_directory_uri() . 
'/assets/dist/js/template-components/layout-fragments/header-fragments/hamburger-menu.js', 
	array(), '1.0.0', true );

wp_register_script( 'intersection-observer',
	'https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.js', 
	array(), '1.0.0', true );

wp_register_script( 'lazy-load',
	'https://cdn.jsdelivr.net/npm/vanilla-lazyload@16.1.0/dist/lazyload.min.js', 
	array(), '1.0.0', true );


/* Vendor Scripts */
wp_register_script( 'flickity', get_template_directory_uri() . 
	'/assets/dist/js/vendors/flickity/flickity.js', 
	array( 'jquery' ), '1.0.0', true );
	
wp_register_script( 'blog-post-grid', 
	'https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js',
	 array(), '1.0.0', true );

// Template Scripts
wp_register_script( 'homepage-main-slider', get_template_directory_uri() . 
	'/assets/dist/js/template-components/layouts/homepage-main-slider.js', 
	array(), '1.0.0', true );

wp_register_script( 'for-sale-slider', get_template_directory_uri() . 
	'/assets/dist/js/template-components/layout-fragments/for-sale-slider.js',
	 array(), '1.0.0', true );

wp_register_script( 'blog-category-dropdown', get_template_directory_uri() . 
	'/assets/dist/js/template-components/layout-fragments/blog-category-dropdown.js', 
	array(), '1.0.0', true );

wp_register_script( 'latest-blog-posts', get_template_directory_uri() . 
	'/assets/dist/js/template-components/layouts/partials/latest-blog-posts.js', 
	array(), '1.0.0', true );


/* Enqueue the global scripts */
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_script('jQuery');
	wp_enqueue_script('main');
	wp_enqueue_script('menu');
	wp_enqueue_script('hamburger-menu');
	wp_enqueue_script('intersection-observer');
	wp_enqueue_script('lazy-load');
 });



// Async load
// https://ikreativ.com/async-with-wordpress-enqueue/
function ikreativ_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }


// Add stylesheets
function interest_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/scss/style.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
}
