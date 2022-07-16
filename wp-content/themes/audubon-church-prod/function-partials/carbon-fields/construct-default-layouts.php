<?php
// Functions for Interest Theme
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_content_fields' );
function crb_content_fields() {
	Container::make( 'post_meta', __( 'Default Layouts', 'crb' ) )
		// ->show_on_template('page.php') // Can't use this prefered approach here.
		->where( 'post_type', '=', 'page' )
		->add_fields( array(
		Field::make( 'complex', 'crb_content_fields', '' )
			->add_fields( array(
				Field::make( 'select', 'layout_selector', '' )
					->add_options( array(
						'choose_a_layout' => 'Choose a Layout',
						'page-header' => 'Page Header Layout',
						'full-width' => 'Full Width Layout',
						'partial-layout' => 'Partial Layouts',
						'media-object' => 'Media Object'
					) ),
				/*
				* Page Header
				*/
				// Image Field
				Field::make( 'image', 'page_header_image', 'Background Image' )->set_value_type( 'url' )
					->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'page-header',
					)
				) ), // end of Image field

				// WYSIWYG
				Field::make( 'rich_text', 'page_header_content', 'Content' )
				->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'page-header',
					)
				) ), // end of WYSIWYG


				/*
				* Full Width Layout
				*/

				// WYSIWYG
				Field::make( 'rich_text', 'full_width_content', 'Content' )
				->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'full-width',

					)
				) ), // end of WYSIWYG

				// Image Field
				Field::make( 'image', 'full_width_image', 'Background Image' )->set_value_type( 'url' )
					->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'full-width',

					)
				) ), // end of Image field


				/*
				* Media Object
				*/
				// Image Field
				Field::make( 'image', 'media_object_image', 'Background Image' )->set_value_type( 'url' )
					->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'media-object',
					)
				) ), // end of Image field

				// WYSIWYG
				Field::make( 'rich_text', 'media_object_content', 'Content' )
				->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'media-object',
					)
				) ), // end of WYSIWYG


				
				/*
				* Partial
				*/

				Field::make( 'select', 'partials', 'Partials' )
					->add_options( array(
						'' => '',
						'for-sale-animals-partial' => 'For Sale Animals',
					) )
					->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'partial-layout'
					)
				) ), // end of Partial field

			) ), // End Content Fields

	) ); // End Container "Post Options"


} // End post meta function