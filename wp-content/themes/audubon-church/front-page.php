<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

    <?php

  	if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content-front-page', get_post_format() );

    endwhile; endif;
    ?>

<?php get_footer(); ?>
