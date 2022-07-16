<?php
    $args = array(
        'orderby' => 'title',
        'post_type' => 'sermons',
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC', // Gets the most recent sermon post
    );

    $the_latest_sermon_query = new WP_Query( $args );
?>
