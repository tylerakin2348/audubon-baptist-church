<?php
// Functions for Interest Theme
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_homepage_fields' );
function crb_homepage_fields() {
	Container::make( 'post_meta', __( 'Page Layouts', 'crb' ) )
		->show_on_template('front-page.php')
		->add_fields( array(
		Field::make( 'complex', 'crb_homepage_field_layouts', '' )
			->add_fields( array(
				Field::make( 'select', 'layout_selector', '' )
					->add_options( array(
						'choose_a_layout' => 'Choose a Layout',
						'homepage-main-slider' => 'Homepage Main Slider',
						'full-width' => 'Full Width Layout',
						'upcoming-events' => 'Upcoming Events',
						'for-sale' => 'For Sale Layout',
						'half-and-half' => 'Half and Half Layout',
						'partial-layout' => 'Partial Layouts',
					) ),

				/*
				* Homepage Main Slider
				*/
				// First, the checkbox conditional
				Field::make( 'complex', 'homepage_main_slider', 'Slides' )->add_fields( array(
					Field::make( 'image', 'homepage_slide_image', 'Slide Image' )
					->set_value_type( 'url' ),
					Field::make( 'rich_text', 'homepage_slide_content', 'Content' )
				))
				->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'homepage-main-slider',
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
				* For Sale Layout
				*/
				// For Sale Heading
				Field::make( 'text', 'for_sale_heading', 'Layout Heading' )
					->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'for-sale',

					)
				) ), // end of Image field

				// Left Content Image
				Field::make( 'image', 'for_sale_main_image', 'Main Image' )->set_value_type( 'url' )
					->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'for-sale',

					)
				) ), // end of Image field

				// Left Content Text
				Field::make( 'rich_text', 'for_sale_main_content', 'Main Content' )
				->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'for-sale',
					)
				) ), // end of WYSIWYG


				/*
				* Half and Half Layout
				*/

				Field::make( 'select', 'half_and_half_format_selector', 'Half and Half Format' )
					->add_options( array(
						'choose_a_layout' => 'Choose a Configuration for the Layout',
						'text_image' => 'Text/Image',
						'image_text' => 'Image/Text',
					) )
					->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'half-and-half',

						)
					) ),
					

				// Left Content Text
				Field::make( 'rich_text', 'text_image_half_and_half_text', 'Main Text' )
				->set_conditional_logic( array(
					array(
						'field' => 'half_and_half_format_selector',
						'value' => 'text_image',
					)
				) ), // end of WYSIWYG


				// Text/Image Configuration
				Field::make( 'image', 'text_image_half_and_half_image', 'Main Image' )->set_value_type( 'url' )
					->set_conditional_logic( array(
					array(
						'field' => 'half_and_half_format_selector',
						'value' => 'text_image',

					)
				) ), // end of Image field


				// Image/Text Configuration
				Field::make( 'image', 'image_text_half_and_half_image', 'Main Image' )->set_value_type( 'url' )
					->set_conditional_logic( array(
					array(
						'field' => 'half_and_half_format_selector',
						'value' => 'image_text',

					)
				) ), // end of Image field

				// Left Content Text
				Field::make( 'rich_text', 'image_text_half_and_half_text', 'Main Text' )
				->set_conditional_logic( array(
					array(
						'field' => 'half_and_half_format_selector',
						'value' => 'image_text',
					)
				) ), // end of WYSIWYG


				// WYSIWYG
				Field::make( 'text', 'events_calendar_title', 'Calendar Title' )
				->set_conditional_logic( array(
					array(
						'field' => 'layout_selector',
						'value' => 'upcoming-events',
					)
				) ), // end of WYSIWYG


				Field::make( 'complex', 'single_event' )->add_fields( array(
					Field::make( 'text', 'single_event_date', 'Event Date' ),
					  Field::make( 'text', 'single_event_title', 'Event Title' ),
					Field::make( 'text', 'single_event_time', 'Event Time' ),
					Field::make( 'text', 'single_event_description', 'Event Description' ),
					Field::make( 'checkbox', 'single_event_link_reveal', 'Add Event Link' ),
					Field::make( 'rich_text', 'single_event_link', 'Event Link' )
					->set_conditional_logic( array(
						   array(
							   'field' => 'layout_selector',
							   'value' => 'upcoming-events',
						   )
					   ) ), // end of WYSIWYG
				 ))
				 ->set_conditional_logic( array(
						array(
							'field' => 'layout_selector',
							'value' => 'upcoming-events',
						)
					) ), // end of WYSIWYG


					/*
					* Partial
					*/

					Field::make( 'select', 'partials', 'Partials' )
					->add_options( array(
						'' => '',
						'weekly-schedule' => 'Weekly Schedule',
						'our-story' => 'Our Story',
						'latest-sermon' => 'Latest Sermon'

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


