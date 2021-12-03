<?php
// Functions for Interest Theme
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'single_animal_fields' );
function single_animal_fields() {
    Container::make( 'post_meta', __( 'Single Animal Layouts', 'crb' ) )
		->where( 'post_type', '=', 'miniature-nubians' )
		->or_where( 'post_type', '=', 'great-pyrenees' )
		->add_fields( array(
			Field::make( 'checkbox', 'add_for_sale_information', 'Add For Sale Information' )
				->set_option_value( 'yes' ),

			Field::make( 'text', 'crb_price', 'Animal Price' )
				->set_conditional_logic( array(
					array(
						'field' => 'add_for_sale_information',
						'value' => true,
					)
				) ), // end of Image field


			Field::make( 'textarea', 'crb_animal_information', 'Animal Information' )
				->set_conditional_logic( array(
					array(
						'field' => 'add_for_sale_information',
						'value' => true,
					)
				) ), // end of Image field
				
			Field::make( 'complex', 'crb_single_animal_fields', '' )
				->add_fields( array(
					Field::make( 'select', 'layout_selector', '' )
						->add_options( array(
							'choose_a_layout' => 'Choose a Layout',
							'complex-page-header' => 'Page Header Layout',
							'full-width' => 'Full Width Layout',
							'image-gallery' => 'Image Gallery',
							'partial-layouts' => 'Partial Layouts',
						) ),
					/*
					* Page Header
					*/

					// WYSIWYG
					Field::make( 'text', 'page_header_heading', 'Heading' )
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
					* Slider Object
					*/
					// First, the checkbox conditional

					Field::make( 'media_gallery', 'image_gallery', 'Images' )
						->set_value('url')
						->set_type('image')
				   ->set_conditional_logic( array(
						  array(
							  'field' => 'layout_selector',
							  'value' => 'image-gallery',
						  )
					  ) ), // end of WYSIWYG

					/*
					* Partial
					*/

					Field::make( 'select', 'partials', 'Partials' )
					    ->add_options( array(
							'' => '',
							'latest-blog-posts' => 'Latest Blog Posts',
							
					    ) )
						->set_conditional_logic( array(
				   		array(
				   			'field' => 'layout_selector',
				   			'value' => 'partial=layouts'
				   		)
			   		) ), // end of Partial field

				) ), // End Content Fields

		) ); // End Container "Post Options"


} // End single_animal_fields