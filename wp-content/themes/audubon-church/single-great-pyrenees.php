<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page-wrapper">

        <div class="container__inner">

           <?php the_content();

            get_template_part( 'content-single-animal', get_post_format() ); ?>
    
        </div>
    </div><!-- /.blog-post -->
<?php endwhile; endif; ?>


<?php get_footer(); ?>
