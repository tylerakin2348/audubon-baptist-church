<?php

add_action( 'init', 'great_pyrenees_post_type' );
add_action( 'init', 'great_pyrenees_taxonomy' );

// Great Pyrenees
 // Register Custom Post Type
 function great_pyrenees_post_type() {
     $labels = array(
         'name'                  => _x( 'Great Pyrenees', 'Post Type General Name', 'text_domain' ),
         'singular_name'         => _x( 'Great Pyrenees', 'Post Type Singular Name', 'text_domain' ),
         'menu_name'             => __( 'Great Pyrenees', 'text_domain' ),
         'name_admin_bar'        => __( 'Great Pyrenees', 'text_domain' ),
         'archives'              => __( 'Item Archives', 'text_domain' ),
         'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
         'all_items'             => __( 'All Great Pyrenees', 'text_domain' ),
         'add_new_item'          => __( 'Add New Great Pyrenees Dog', 'text_domain' ),
         'add_new'               => __( 'Add New Dog', 'text_domain' ),
         'new_item'              => __( 'New Great Pyrenees', 'text_domain' ),
         'edit_item'             => __( 'Edit Great Pyrenees', 'text_domain' ),
         'update_item'           => __( 'Update Great Pyrenees', 'text_domain' ),
         'view_item'             => __( 'View Great Pyrenees', 'text_domain' ),
         'search_items'          => __( 'Search Great Pyrenees', 'text_domain' ),
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
         'label'                 => __( 'Great Pyrenees', 'text_domain' ),
         'description'           => __( 'Descrizione evento', 'text_domain' ),
         'labels'                => $labels,
         'supports'              => array('title', 'thumbnail', 'editor' ),
         'taxonomies'            => array('dog-categories'),
         'hierarchical'          => true,
         'public'                => true,
         'show_ui'               => true,
         'show_in_menu'          => true,
         'menu_position'         => 5,
         'show_in_admin_bar'     => true,
         'show_in_nav_menus'     => true,
         'can_export'            => true,
         'has_archive'           => false,
         'exclude_from_search'   => false,
         'publicly_queryable'    => true,
         'capability_type'       => 'page',
         'rewrite' => array(
             'slug' => 'great-pyrenees',
             'with_front' => false
         ),
     );
     register_post_type( 'great-pyrenees', $args );

 }

 function great_pyrenees_taxonomy() {
     register_taxonomy(
		 'dog-categories',
         'great-pyrenees',
         array(
             'hierarchical' => true,
             'label' => 'Dog Categories',
             'query_var' => true,
             'rewrite' => array(
                 'slug' => 'dog-categories',
                 'with_front' => false
             )
         )
     );
 }

