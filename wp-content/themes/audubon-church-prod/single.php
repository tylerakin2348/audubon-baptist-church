<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="layout layout-page-header">
        <div class="contain">
            <div class="layout-page-header__content">
                <a href="/newsletters">View all newsletters</a>
                <h1 class="red-text">Newsletter: <?php the_title(); ?></h1>
            </div>
        </div>
    </div>
        
    <div class="blog-post">
        <div class="contain blog-post__container">

           <?php the_content(); ?>

        </div>
    </div><!-- /.blog-post -->

<?php endwhile; endif; ?>
    <?php include 'template-components/layout-fragments/navigation/blog-single-next-prev-links.php'; ?>

<?php get_footer(); ?>
