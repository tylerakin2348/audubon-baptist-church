<?php
// Functions for Interest Theme
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'theme_options' );

function theme_options() {
	Container::make( 'theme_options', 'Theme Options' )
		->add_fields( array(
			Field::make( 'image', 'blog_header_image', 'Blog Header Image' )->set_value_type( 'url' )
		) );
}