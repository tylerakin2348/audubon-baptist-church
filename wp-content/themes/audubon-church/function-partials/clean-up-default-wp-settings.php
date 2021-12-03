<?php

/**
 * Remove core editor
 */
add_theme_support( 'post-thumbnails' );
add_filter('get_image_tag_class', 'image_tag_class', 10, 4);
add_filter('use_block_editor_for_post', '__return_false', 10);


add_action('admin_head', 'remove_editor');
add_action( 'customize_register', 'themeslug_theme_customizer' );
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
add_filter('the_content', 'gc_remove_p_tags_around_images');
add_action('publish_post', 'remove_default_category', 10, 2);
add_filter( 'wp_nav_menu_objects', 'wpdocs_add_menu_parent_class' );

function remove_editor() {
	if ( ! is_admin() ) {
		return;
	}
	remove_post_type_support('page', 'editor');

	remove_post_type_support('miniature-nubians', 'editor');
    remove_post_type_support('great-pyrenees', 'editor');
    remove_post_type_support('sermons', 'editor');

}

/*
* Remove post thumbnails support from everything but single posts
*/
add_action( 'after_setup_theme', function(){
	remove_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post' ) ); 
}, 11 );

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

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 15;
}

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

 add_filter('the_content', function ($content) {
	//-- Change src/srcset to data attributes.
	$content = preg_replace("/<img(.*?)(src=|srcset=)(.*?)>/i", '<img$1data-$2$3>', $content);

	//-- Add .lazy-load class to each image that already has a class.
	$content = preg_replace('/<img(.*?)class=\"(.*?)\"(.*?)>/i', '<img$1class="$2 lazy-load"$3>', $content);

	//-- Add .lazy-load class to each image that doesn't already have a class.
	$content = preg_replace('/<img((.(?!class=))*)\/?>/i', '<img class="lazy-load"$1>', $content);
	
	return $content;
});