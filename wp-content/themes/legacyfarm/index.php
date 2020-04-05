<?php
/**
 * Blog Page Template
 */
?>


<?php get_header(); ?>
<div class="layout layout-page-header">
    <div class="contain">
        <div class="layout-page-header__content">
            <h1 class="red-text">Articles</h1>
        </div>
    </div>
</div>
<div class="page-wrapper">

    <?php
        if ( have_posts() ) : while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
    ?>
    <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_excerpt(); ?>
    </div>
    <?php endwhile; ?>
    <div class="post-navigation">
        <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
    </div><!-- /.navigation -->
   <?php endif; ?>
</div>
<?php get_footer(); ?>
