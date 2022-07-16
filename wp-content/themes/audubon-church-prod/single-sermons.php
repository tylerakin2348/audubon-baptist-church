<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="layout layout-page-header">
        <div class="contain">
            <div class="layout-page-header__content">
                <a href="/sermons">View all sermons</a>
                <h1 class="red-text">Sermon: <?php the_title(); ?></h1>
            </div>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="contain">
            <div class="layout layout-full-width">

                <?php the_content(); ?>

            </div>
        </div>

    </div><!-- /.blog-post -->
<?php endwhile; endif; ?>


<?php get_footer();