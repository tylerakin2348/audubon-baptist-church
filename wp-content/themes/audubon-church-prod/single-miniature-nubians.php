<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="layout layout-page-header">

        <div class="contain">
                <div class="layout-page-header__content">
                    <h1 class="red-text"><?php the_title(); ?></h1>
                </div>
                <div class="blog-post-meta">
                    <span class="the-date"><?php the_date(); ?></span>
                    <br />
                    <div class="the-author">
                        by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a>
                    </div>
                </div>
        </div>
    </div>
    <div class="page-wrapper">

        <div class="container__inner">

           <?php the_content();
            get_template_part( 'content-single-animal', get_post_format() ); ?>

        </div>
    </div><!-- /.blog-post -->
<?php if (has_term('for-sale', 'goat-categories')) { ?>
    <h2>For Sale</h2>
    <a href="/contact-us">Contact Us</a>
<?php
    } else {
} ?>

<?php endwhile; endif; ?>


<?php get_footer();