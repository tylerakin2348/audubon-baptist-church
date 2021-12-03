<?php
/**
 * Blog Page Template
 */
?>


<?php 

get_header();

wp_enqueue_script( 'blog-post-grid' );

?>
<?php include 'template-components/layouts/partials/default-page-header.php'; ?>
    <a class="assistive show-on-focus" href="#pagination">Skip to blog pagination</a>

    <?php
     if ( have_posts() ) : ?>
     <div class="blog-posts">
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="blog-posts__post">
            <?php $thePostFeaturedImage = get_the_post_thumbnail(); ?>
            <?php if ($thePostFeaturedImage) { ?>
            <div class="image"><?php echo $thePostFeaturedImage;?></div>
            <?php } ?>
            <div class="text">
                <h2><?php the_title(); ?></h2>

                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </div>
        </div>
        <?php endwhile; ?>
     </div>
     <?php include 'template-components/layout-fragments/navigation/blog-pagination.php'; ?>
    <?php endif; ?>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    <script>
        var elem = document.querySelector('.blog-posts');
        var msnry = new Masonry( elem, {
        // options
        itemSelector: '.blog-posts__post',
        // columnWidth: 200
        });

    </script>
<?php get_footer(); ?>
