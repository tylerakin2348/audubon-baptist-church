<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php include 'template-components/layouts/partials/default-page-header.php'; ?>
    <?php include 'template-components/layout-fragments/blog-meta.php'; ?>

    <div class="blog-post">
        <div class="contain blog-post__container">

           <?php the_content(); ?>

        </div>
    </div><!-- /.blog-post -->

<?php endwhile; endif; ?>
    <?php include 'template-components/layout-fragments/navigation/blog-single-next-prev-links.php'; ?>

<?php get_footer(); ?>
