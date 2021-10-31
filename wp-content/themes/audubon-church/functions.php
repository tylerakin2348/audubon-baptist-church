<?php

// Functions for Interest Theme

// Add stylesheets
function interest_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/scss/style.css' );
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/normalize.css' );
}

add_action( 'wp_enqueue_scripts', 'interest_scripts' );

// Wordpress menu customization page added in backend
 function register_my_menu() {
   register_nav_menu('header-menu',__( 'Header Menu' ));
 }
 add_action( 'init', 'register_my_menu' );

// Adds options for theme customizer
function themeslug_theme_customizer( $wp_customize ) {
	$wp_customize->add_section( 'themeslug_logo_section' , array(
	'title'       => __( 'Logo', 'themeslug' ),
	'priority'    => 30,
	'description' => 'Upload a logo to replace the default site name and description in the header',
) );
	$wp_customize->add_setting( 'themeslug_logo' );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
    'label'    => __( 'Logo', 'themeslug' ),
    'section'  => 'themeslug_logo_section',
    'settings' => 'themeslug_logo',
) ) );

}
add_action( 'customize_register', 'themeslug_theme_customizer' );

add_theme_support( 'post-thumbnails' );


// This function removes WP-injected p tags surrounding img elements.
	// This function was found at http://micahjon.com/2016/removing-wrapping-p-paragraph-tags-around-images-wordpress/
function gc_remove_p_tags_around_images($content)
{
	$contentWithFixedPTags =  preg_replace_callback('/<p>((?:.(?!p>))*?)(<a[^>]*>)?\s*(<img[^>]+>)(<\/a>)?(.*?)<\/p>/is', function($matches)
	{
		$image = $matches[2] . $matches[3] . $matches[4];
		$content = trim( $matches[1] . $matches[5] );
		if ($content) {
			$content = '<p>'. $content .'</p>';
		}
		return $image . $content;
	}, $content);

	// On large strings, this regular expression fails to execute, returning NULL
	return is_null($contentWithFixedPTags) ? $content : $contentWithFixedPTags;
}
add_filter('the_content', 'gc_remove_p_tags_around_images');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 50;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function wpdocs_excerpt_more( $more ) {
	return '...<a class="read-more" href="'.get_the_permalink().'" rel="nofollow">Continue reading >></a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home right sidebar',
		'id'            => 'home_right_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
    Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
        ->where( 'post_type', '=', 'page' )
		->add_fields( array(
			Field::make( 'complex', 'crb_content_fields', 'Page Content Fields' )
				->set_layout( 'tabbed-vertical' )
				->add_fields( array(

				/*
				* Page Header
				*/
					// First, the checkbox conditional
					Field::make( 'checkbox', 'page_header_reveal', 'Add Page Header' ),

					// Image Field
					Field::make( 'image', 'page_header_image', 'Background Image' )->set_value_type( 'url' )
					 ->set_conditional_logic( array(
						array(
							'field' => 'page_header_reveal',
							'value' => true,
						)
					) ), // end of Image field

					// WYSIWYG
					Field::make( 'rich_text', 'page_header_content', 'Content' )
					->set_conditional_logic( array(
						array(
							'field' => 'page_header_reveal',
							'value' => true,
						)
					) ), // end of WYSIWYG


				/*
				* Full Width Layout
				*/
					// First, the checkbox conditional
					Field::make( 'checkbox', 'full_width_reveal', 'Add Full Width Layout' ),

					// WYSIWYG
					Field::make( 'rich_text', 'full_width_content', 'Content' )
				    ->set_conditional_logic( array(
				        array(
				            'field' => 'full_width_reveal',
				            'value' => true,
				        )
				    ) ), // end of WYSIWYG

					// Image Field
					Field::make( 'image', 'full_width_image', 'Background Image' )->set_value_type( 'url' )
					 ->set_conditional_logic( array(
						array(
							'field' => 'full_width_reveal',
							'value' => true,
						)
					) ), // end of Image field


					/*
					* Media Object
					*/
					// First, the checkbox conditional
					Field::make( 'checkbox', 'media_object_reveal', 'Add Media Object' ),

					// Image Field
					Field::make( 'image', 'media_object_image', 'Background Image' )->set_value_type( 'url' )
					 ->set_conditional_logic( array(
						array(
							'field' => 'media_object_reveal',
							'value' => true,
						)
					) ), // end of Image field

					// WYSIWYG
					Field::make( 'rich_text', 'media_object_content', 'Content' )
					->set_conditional_logic( array(
						array(
							'field' => 'media_object_reveal',
							'value' => true,
						)
					) ), // end of WYSIWYG



					/*
					* Slider Object
					*/
					// First, the checkbox conditional
					Field::make( 'checkbox', 'slider_object_reveal', 'Add Slider Object' ),



					Field::make( 'complex', 'slider_object_slides' )->add_fields( array(
							   Field::make( 'image', 'slider_object_image', 'Slide Image' )
							   ->set_value_type( 'url' ),
							   Field::make( 'rich_text', 'slider_object_content', 'Content' )

		           ))
				   ->set_conditional_logic( array(
						  array(
							  'field' => 'slider_object_reveal',
							  'value' => true,
						  )
					  ) ), // end of WYSIWYG


					/*
		  			* Events
		  			*/
		  			// First, the checkbox conditional
		  			Field::make( 'checkbox', 'events_object_reveal', 'Add Events Object' ),


					// WYSIWYG
					Field::make( 'text', 'events_calendar_title', 'Calendar Title' )
				    ->set_conditional_logic( array(
				        array(
				            'field' => 'events_object_reveal',
				            'value' => true,
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
								   'field' => 'single_event_link_reveal',
								   'value' => true,
							   )
						   ) ), // end of WYSIWYG
		  		   ))
		  		   ->set_conditional_logic( array(
		  				  array(
		  					  'field' => 'events_object_reveal',
		  					  'value' => true,
		  				  )
		  			  ) ), // end of WYSIWYG


					/*
					* Partial
					*/
					// First, the checkbox conditional
					Field::make( 'checkbox', 'partial_reveal', 'Add a Partial' ),

					Field::make( 'select', 'partials', 'Partials' )
					    ->add_options( array(
							'' => '',
							'homepage-header-partial' => 'Homepage Header Partial',
							'homepage-slider-partial' => 'Homepage Slider Partial',
							'weekly-schedule-partial' => 'Weekly Schedule Partial',
							'seventy-fifth-partial' => '75th Anniversary Partial',
					        'beliefs-partial' => 'Belief Partial',
							'values-partial' => 'Values Partial',
							'appreciating-partial' => 'Appreciating Partial',
							'latest-sermon-partial' => 'Latest Sermon Partial',
							'our-story-partial' => 'Our Story Partial',
					    ) )
						->set_conditional_logic( array(
				   		array(
				   			'field' => 'partial_reveal',
				   			'value' => true,
				   		)
			   		) ), // end of Partial field

				) ), // End Content Fields

		) ); // End Container "Post Options"


} // End post meta function



// add_action( 'admin_head', 'hide_editor' );
// function hide_editor() {
//     $template_file = basename( get_page_template() );
//     if($template_file == 'fullwidth.php'){ // template
//         remove_post_type_support('page', 'editor');
//     }
// }

/**
 * Register a sermon post type.
 * Based on the following tutorial:
 * https://crunchify.com/how-to-create-wordpress-custom-post-type-cpt-and-taxonomy-hello-world-tutorial-tips-and-tricks/
 */

 //     /**
 //      * Register a custom post type
 //      *
 //      * Supplied is a "reasonable" list of defaults
 //      * @see register_post_type for full list of options for register_post_type
 //      * @see add_post_type_support for full descriptions of 'supports' options
 //      * @see get_post_type_capabilities for full list of available fine grained capabilities that are supported
 //      */
	//  function sermons_custom_post_type() {
 //     register_post_type('sermons', array(
 //         'labels' => array(
 //             'name' => __('Sermons', 'the-authority-child'),
 //             'singular_name' => __('Sermon')
 //         ),
 //         'description' => __('All sermons'),
 //         'menu_icon' => 'dashicons-book-alt',
 //         'public' => true,
	// 	 'taxonomies' => array( 'taxonomy' ),
 //         'exclude_from_search' => false,
 //         'has_archive' => true,
 //         'publicly_queryable' => true,
 //         'show_ui' => true,
 //         'show_in_nav_menus' => true,
 //         'hierarchical' => false,
 //         'supports' => array(
 //             'title',
 //             'editor',
 //             'comments',
 //             'revisions',
 //             'author',
 //             'excerpt',
 //             'thumbnail',
 //             'custom-fields'
 //         ),
 //     ));
 // }
 // add_action('init', 'sermons_custom_post_type');
 //


 //EVENTS
 // Register Custom Post Type
 function wpse239701_events_post_type() {
     $labels = array(
         'name'                  => _x( 'Sermons', 'Post Type General Name', 'text_domain' ),
         'singular_name'         => _x( 'Sermon', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'             => __( 'Sermon', 'text_domain' ),
         'name_admin_bar'        => __( 'Sermon', 'text_domain' ),
         'archives'              => __( 'Item Archives', 'text_domain' ),
         'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
         'all_items'             => __( 'All Items', 'text_domain' ),
         'add_new_item'          => __( 'Add New Item', 'text_domain' ),
         'add_new'               => __( 'Add New', 'text_domain' ),
         'new_item'              => __( 'New Item', 'text_domain' ),
         'edit_item'             => __( 'Edit Item', 'text_domain' ),
         'update_item'           => __( 'Update Item', 'text_domain' ),
         'view_item'             => __( 'View Item', 'text_domain' ),
         'search_items'          => __( 'Search Item', 'text_domain' ),
         'not_found'             => __( 'Not found', 'text_domain' ),
         'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
         'featured_image'        => __( 'Featured Image', 'text_domain' ),
         'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
         'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
         'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
         'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
         'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
         'items_list'            => __( 'Items list', 'text_domain' ),
         'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
         'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
     );
     $args = array(
         'label'                 => __( 'Sermons', 'text_domain' ),
         'description'           => __( 'Descrizione evento', 'text_domain' ),
         'labels'                => $labels,
         'supports'              => array('title', 'thumbnail', 'editor' ),
         'taxonomies'            => array('series'),
         'hierarchical'          => true,
         'public'                => true,
         'show_ui'               => true,
         'show_in_menu'          => true,
         'menu_position'         => 5,
         'show_in_admin_bar'     => true,
         'show_in_nav_menus'     => true,
         'can_export'            => true,
         'has_archive'           => 'sermons',
         'exclude_from_search'   => false,
         'publicly_queryable'    => true,
         'capability_type'       => 'page',
         'rewrite' => array(
             'slug' => 'sermon',
             'with_front' => false
         ),
     );
     register_post_type( 'sermons', $args );

 }
 
 add_action( 'init', 'wpse239701_events_post_type' );

 function wpse239701_events_taxonomy() {
     register_taxonomy(
         'series',
         'sermons',
         array(
             'hierarchical' => true,
             'label' => 'Sermon Series',
             'query_var' => true,
             'rewrite' => array(
                 'slug' => 'sermons',
                 'with_front' => false
             )
         )
     );
 }
 add_action( 'init', 'wpse239701_events_taxonomy' );


 function wpse239701_events_post_link( $permalink, $post_id, $leavename ) {
     if ( strpos( $permalink, '%events_categories%' ) === false ) {
         return $permalink;
     }

     // Get post
     $post = get_post($post_id);
     if ( ! $post ) {
         return $permalink;
     }

     // Get taxonomy terms
     $terms = wp_get_object_terms($post->ID, 'events_categories');
     if ( ! is_wp_error( $terms ) && ! empty( $terms ) && is_object( $terms[0] ) ) {
         $taxonomy_slug = $terms[0]->slug;
     } else {
         $taxonomy_slug = 'uncategorized';
     }

     return str_replace( '%events_categories%', $taxonomy_slug, $permalink );
 }
 // add_filter( 'post_link', 'wpse239701_events_post_link', 10, 3 ); // Not needed - we aren't adding our custom taxonomy to posts, but if we were, this would be used.
 add_filter( 'post_type_link', 'wpse239701_events_post_link', 10, 3 );

//remove default category (uncategorized) when another category has been set
function remove_default_category($ID, $post) {

    //get all categories for the post
    $categories = wp_get_object_terms($ID, 'category');

    //if there is more than one category set, check to see if one of them is the default
        foreach ($categories as $key => $category) {
            //if category is the default, then remove it
            if ($category->name == "Uncategorized") {
                wp_remove_object_terms($ID, 'uncategorized', 'category');
            }
        }
}
//hook in to the publsh_post action to run when a post is published
add_action('publish_post', 'remove_default_category', 10, 2);
//
// /**
//  * Custom walker class.
//  */
// class WPDocs_Walker_Nav_Menu extends Walker_Nav_Menu {
//
//     /**
//      * Starts the list before the elements are added.
//      *
//      * Adds classes to the unordered list sub-menus.
//      *
//      * @param string $output Passed by reference. Used to append additional content.
//      * @param int    $depth  Depth of menu item. Used for padding.
//      * @param array  $args   An array of arguments. @see wp_nav_menu()
//      */
//     function start_lvl( &$output, $depth = 0, $args = array() ) {
//         // Depth-dependent classes.
//         $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
//         $display_depth = ( $depth + 1); // because it counts the first submenu as 0
//         $classes = array(
//             'sub-menu',
//             ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
//             ( $display_depth >=2 ? 'sub-sub-menu' : '' ),
//             'menu-depth-' . $display_depth
//         );
//         $class_names = implode( ' ', $classes );
//
//         // Build HTML for output.
//         $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
//     }
//
//     /**
//      * Start the element output.
//      *
//      * Adds main/sub-classes to the list items and links.
//      *
//      * @param string $output Passed by reference. Used to append additional content.
//      * @param object $item   Menu item data object.
//      * @param int    $depth  Depth of menu item. Used for padding.
//      * @param array  $args   An array of arguments. @see wp_nav_menu()
//      * @param int    $id     Current item ID.
// 	 * From https://developer.wordpress.org/reference/functions/wp_nav_menu/
//      */
//     function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
//         global $wp_query;
//         $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
//
//         // Depth-dependent classes.
//         $depth_classes = array(
//             ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
//             ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
//             ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
//             'menu-item-depth-' . $depth
//         );
//         $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
//
//
//
//         $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
//
//         // Build HTML.
//         $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
//
//         // Link attributes.
//         $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
//         $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
//         $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
//         $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
//         $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
//
//         // Build HTML output and pass through the proper filter.
//         $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
//             $args->before,
//             $attributes,
//             $args->link_before,
//             apply_filters( 'the_title', $item->title, $item->ID ),
//             $args->link_after,
//             $args->after
//         );
//         $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
//     }
// }

/**
 * Add a parent CSS class for nav menu items.
 *
 * @param array  $items The menu items, sorted by each menu item's menu order.
 * @return array (maybe) modified parent CSS class.
 */
function wpdocs_add_menu_parent_class( $items ) {
    $parents = array();

    // Collect menu items with parents.
    foreach ( $items as $item ) {
        if ( $item->menu_item_parent && $item->menu_item_parent > 0 ) {
            $parents[] = $item->menu_item_parent;
        }
    }

    // Add class.
    foreach ( $items as $item ) {
        if ( in_array( $item->ID, $parents ) ) {
            $item->classes[] = 'menu-parent-item';
        }
    }


    return $items;

}
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '<br /><a href="'. get_permalink($post->ID) . '"> Read the full article...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');
