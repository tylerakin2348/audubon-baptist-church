<?php
// Functions for Interest Theme
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'animal_type_fields' );

function animal_type_fields() {
    Container::make( 'post_meta', __( 'Animal Type Layouts', 'crb' ) )
		->show_on_template('page-animal-type.php')
		->add_fields( array(

			Field::make( 'complex', 'crb_animal_type_fields', '' )
				->add_fields( array(
					Field::make( 'select', 'layout_selector', '' )
						->add_options( array(
							'choose_a_layout' => 'Choose a Layout',
							'complex-page-header' => 'Page Header Layout',
							'full-width' => 'Full Width Layout',
							'two-thirds' => 'Two Thirds Layout',
							'partial-layout' => 'Partial Layouts',
						) ),
					
					/*
					* Page Header
					*/

					// WYSIWYG
					Field::make( 'text', 'page_header_heading', 'Page Heading' )
					->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'complex-page-header',
						)
					) ), // end of WYSIWYG

					// Image Field
					Field::make( 'image', 'page_header_image', 'Background Image' )->set_value_type( 'url' )
					 ->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'complex-page-header',
						)
					) ), // end of Image field

					// WYSIWYG
					Field::make( 'rich_text', 'page_header_content', 'Content' )
					->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'complex-page-header',
						)
					) ), // end of WYSIWYG


					/*
					* Full Width Layout
					*/
					// Image Field
					Field::make( 'image', 'full_width_image', 'Background Image' )->set_value_type( 'url' )
					 ->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'full-width',

						)
					) ), // end of Image field


					// WYSIWYG
					Field::make( 'rich_text', 'full_width_content', 'Content' )
				    ->set_conditional_logic( array(
				        array(
				            'field' => 'layout_selector',
				            'value' => 'full-width',

				        )
				    ) ), // end of WYSIWYG


					/*
					* Two-Thirds Layout
					*/

					Field::make( 'select', 'two_thirds_layout_format_selector', 'Two Thirds Layout Format' )
					->add_options( array(
						'choose_a_layout' => 'Choose a Configuration for the Layout',
						'aligned_left' => 'Aligned Left',
						'aligned_right' => 'Aligned Right',
					) )
					->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'two-thirds',

						)
					) ),
					// Left Content Text
					Field::make( 'rich_text', 'aligned_left_two_thirds_content', 'Main Text' )
					->set_conditional_logic( array(
						array(
							'field' => 'two_thirds_layout_format_selector',
							'value' => 'aligned_left',
						)
					) ), // end of WYSIWYG

					// Left Content Text
					Field::make( 'rich_text', 'aligned_right_two_thirds_content', 'Main Text' )
					->set_conditional_logic( array(
						array(
							'field' => 'two_thirds_layout_format_selector',
							'value' => 'aligned_right',
						)
					) ), // end of WYSIWYG

					/*
					* Partial
					*/

					Field::make( 'select', 'partials', 'Partials' )
					    ->add_options( array(
							'' => '',
							'gp-animal-list' => 'Great Pyrenees Animal List',
							'mn-animal-list' => 'Miniature Nubians Animal List',
					    ) )
						->set_conditional_logic( array(
				   		array(
				   			'field' => 'layout_selector',
				   			'value' => 'partial-layout'
				   		)
			   		) ), // end of Partial field

				) ), // End Content Fields

		) ); // End Container "Post Options"


} // End single_animal_fields