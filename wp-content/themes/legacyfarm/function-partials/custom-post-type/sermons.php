<?php
 //EVENTS
 // Register Custom Post Type

add_action( 'init', 'sermon_post_type' );
add_action( 'init', 'sermon_taxonomy' );


 function sermon_post_type() {
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
 

 function sermon_taxonomy() {
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
