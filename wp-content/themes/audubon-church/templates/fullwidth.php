<?php
/*
Template Name: Full Width Page
*/
?>

<?php get_header(); ?>

    <?php
  	if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part( 'content-full-width', get_post_format() );

    endwhile; endif;
    ?>

<?php get_footer(); ?>
